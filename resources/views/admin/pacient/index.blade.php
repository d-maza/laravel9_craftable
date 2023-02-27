@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.pacient.actions.index'))

@section('body')

<pacient-listing :data="{{ $data->toJson() }}" :url="'{{ url('admin/pacients') }}'" inline-template>

    <div class="row ">
        <div class=" col">
            <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> {{ trans('admin.pacient.actions.index') }}
                    <a class="btn btn-primary btn-sm pull-right m-b-0 ml-2" href="{{ url('admin/pacients/export') }}"
                        role="button"><i class="fa fa-file-excel-o"></i>&nbsp;
                        {{ trans('admin.pacient.actions.export') }}</a>
                    <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0"
                        href="{{ url('admin/pacients/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp;
                        {{ trans('admin.pacient.actions.create') }}</a>
                </div>
                <div class="card-body" v-cloak>
                    <div class="card-block">
                        <form @submit.prevent="">
                            <div class="row justify-content-md-between">
                                <div class="col col-lg-7 col-xl-5 form-group">
                                    <div class="input-group">
                                        <input class="form-control"
                                            placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}"
                                            v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary"
                                                @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp;
                                                {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-auto form-group ">
                                    <select class="form-control" v-model="pagination.state.per_page">

                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </form>

                        <table class="table table-hover table-listing">
                            <thead>
                                <tr>
                                    <th class="bulk-checkbox">
                                        <input class="form-check-input" id="enabled" type="checkbox"
                                            v-model="isClickedAll" v-validate="''" data-vv-name="enabled"
                                            name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                        <label class="form-check-label" for="enabled">
                                            #
                                        </label>
                                    </th>

                                    <!-- <th is='sortable' :column="'id'">{{ trans('admin.pacient.columns.id') }}</th> -->
                                    <th is='sortable' :column="'nom'">{{ trans('admin.pacient.columns.nom') }}</th>
                                    <th is='sortable' :column="'cognoms'">{{ trans('admin.pacient.columns.cognoms') }}
                                    </th>
                                    <th is='sortable' :column="'telefon'">{{ trans('admin.pacient.columns.telefon') }}
                                    </th>
                                    <th is='sortable' :column="'curs_escolar'">
                                        {{ trans('admin.pacient.columns.curs_escolar') }}</th>
                                    <th is='sortable' :column="'data_naixement'">
                                        {{ trans('admin.pacient.columns.data_naixement') }}</th>
                                    <!-- <th is='sortable' :column="'sex'">{{ trans('admin.pacient.columns.sex') }}</th> -->
                                    <th is='sortable' :column="'esports'">{{ trans('admin.pacient.columns.esports') }}
                                    </th>
                                    <th is='sortable' :column="'fecha'">{{ trans('admin.pacient.columns.fecha') }}</th>
                                    <th is='sortable' :column="'referidor'">
                                        {{ trans('admin.pacient.columns.referidor') }}</th>

                                    <th></th>
                                </tr>
                                <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                    <td class="bg-bulk-info d-table-cell text-center" colspan="12">
                                        <span
                                            class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }}
                                            @{{ clickedBulkItemsCount }}. <a href="#" class="text-primary"
                                                @click="onBulkItemsClickedAll('/admin/pacients')"
                                                v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa"
                                                    :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i>
                                                {{ trans('brackets/admin-ui::admin.listing.check_all_items') }}
                                                @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                href="#" class="text-primary"
                                                @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>
                                        </span>

                                        <span class="pull-right pr-2">
                                            <button class="btn btn-sm btn-danger pr-3 pl-3"
                                                @click="bulkDelete('/admin/pacients/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                        </span>

                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in collection" :key="item.id"
                                    :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                    <td class="bulk-checkbox">
                                        <input class="form-check-input" :id="'enabled' + item.id" type="checkbox"
                                            v-model="bulkItems[item.id]" v-validate="''"
                                            :data-vv-name="'enabled' + item.id"
                                            :name="'enabled' + item.id + '_fake_element'"
                                            @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                        <label class="form-check-label" :for="'enabled' + item.id">
                                        </label>
                                    </td>

                                    <!-- <td>@{{ item.id }}</td> -->
                                    <td>@{{ item.nom }}</td>
                                    <td>@{{ item.cognoms }}</td>
                                    <td>@{{ item.telefon }}</td>
                                    <td>@{{ item.curs_escolar }}</td>
                                    <td>@{{ item.data_naixement | date }}</td>
                                    <!-- <td>@{{ item.sex }}</td> -->
                                    <td>@{{ item.esports }}</td>
                                    <td>@{{ item.fecha | date }}</td>
                                    <td>@{{ item.referidor }}</td>

                                    <td>
                                        <div class="row no-gutters">
                                            <div class="col mt-1">
                                                <a class="btn btn-sm btn-spinner btn-info"
                                                    :href="item.resource_url + '/edit'"
                                                    title="{{ trans('brackets/admin-ui::admin.btn.edit') }}"
                                                    role="button"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <form class="col mt-1" @submit.prevent="deleteItem(item.resource_url)">
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="row" v-if="pagination.state.total > 0">
                            <div class="col-sm">
                                <span
                                    class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                            </div>
                            <div class="col-sm-auto">
                                <pagination></pagination>
                            </div>
                        </div>

                        <div class="no-items-found" v-if="!collection.length > 0">
                            <i class="icon-magnifier"></i>
                            <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                            <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                            <a class="btn btn-primary btn-spinner" href="{{ url('admin/pacients/create') }}"
                                role="button"><i class="fa fa-plus"></i>&nbsp;
                                {{ trans('admin.pacient.actions.create') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</pacient-listing>

@endsection