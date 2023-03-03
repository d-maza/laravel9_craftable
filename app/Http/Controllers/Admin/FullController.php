<?php

namespace App\Http\Controllers\Admin;

use App\Exports\FullExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Full\BulkDestroyFull;
use App\Http\Requests\Admin\Full\DestroyFull;
use App\Http\Requests\Admin\Full\IndexFull;
use App\Http\Requests\Admin\Full\StoreFull;
use App\Http\Requests\Admin\Full\UpdateFull;
use App\Models\Full;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\View\View;

class FullController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexFull $request
     * @return array|Factory|View
     */
    public function index(IndexFull $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Full::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'pacient_id', 'data_examen', 'data_examen_mod'],

            // set columns to searchIn
            ['id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.full.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.full.create');

        return view('admin.full.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFull $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreFull $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Full
        $full = Full::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/fulls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/fulls');
    }

    /**
     * Display the specified resource.
     *
     * @param Full $full
     * @throws AuthorizationException
     * @return void
     */
    public function show(Full $full)
    {
        $this->authorize('admin.full.show', $full);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Full $full
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Full $full)
    {
        $this->authorize('admin.full.edit', $full);


        return view('admin.full.edit', [
            'full' => $full,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFull $request
     * @param Full $full
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateFull $request, Full $full)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Full
        $full->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/fulls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/fulls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyFull $request
     * @param Full $full
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyFull $request, Full $full)
    {
        $full->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyFull $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyFull $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Full::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    /**
     * Export entities
     *
     * @return BinaryFileResponse|null
     */
    public function export(): ?BinaryFileResponse
    {
        return Excel::download(app(FullExport::class), 'fulls.xlsx');
    }
}
