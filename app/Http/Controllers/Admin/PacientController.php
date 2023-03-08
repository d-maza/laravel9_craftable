<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PacientExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pacient\BulkDestroyPacient;
use App\Http\Requests\Admin\Pacient\DestroyPacient;
use App\Http\Requests\Admin\Pacient\IndexPacient;
use App\Http\Requests\Admin\Pacient\StorePacient;
use App\Http\Requests\Admin\Pacient\UpdatePacient;
use App\Models\Pacient;
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

class PacientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPacient $request
     * @return array|Factory|View
     */
    public function index(IndexPacient $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pacient::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nom', 'cognoms', 'telefon', 'curs_escolar', 'data_naixement', 'sex', 'esports', 'fecha', 'referidor'],

            // set columns to searchIn
            ['id', 'nom', 'cognoms', 'telefon', 'curs_escolar', 'sex', 'esports', 'referidor']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.pacient.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.pacient.create');

        return view('admin.pacient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePacient $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePacient $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Pacient
        $pacient = Pacient::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pacients'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pacients');
    }

    /**
     * Display the specified resource.
     *
     * @param Pacient $pacient
     * @throws AuthorizationException
     * @return void
     */
    public function show(Pacient $pacient)
    {
        $this->authorize('admin.pacient.show', $pacient);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pacient $pacient
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Pacient $pacient)
    {
        $this->authorize('admin.pacient.edit', $pacient);


        return view('admin.pacient.edit', [
            'pacient' => $pacient,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePacient $request
     * @param Pacient $pacient
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePacient $request, Pacient $pacient)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Pacient
        $pacient->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/pacients'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/pacients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPacient $request
     * @param Pacient $pacient
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPacient $request, Pacient $pacient)
    {
        $pacient->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPacient $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPacient $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Pacient::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(PacientExport::class), 'pacients.xlsx');
    }
}
