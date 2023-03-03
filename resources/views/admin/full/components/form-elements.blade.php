
<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('pacient_id'), 'has-success': fields.pacient_id && fields.pacient_id.valid }">
    <label for="pacient_id" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.full.columns.pacient_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pacient_id" v-validate="'integer'" @input="validate($event)"
            class="form-control"
            :class="{'form-control-danger': errors.has('pacient_id'), 'form-control-success': fields.pacient_id && fields.pacient_id.valid}"
            id="pacient_id" name="pacient_id" placeholder="{{ trans('admin.full.columns.pacient_id') }}">
        <div v-if="errors.has('pacient_id')" class="form-control-feedback form-text" v-cloak>
            @{{ errors.first('pacient_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('data_examen'), 'has-success': fields.data_examen && fields.data_examen.valid }">
    <label for="data_examen" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.full.columns.data_examen') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.data_examen" :config="datetimePickerConfig"
                v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                :class="{'form-control-danger': errors.has('data_examen'), 'form-control-success': fields.data_examen && fields.data_examen.valid}"
                id="data_examen" name="data_examen"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('data_examen')" class="form-control-feedback form-text" v-cloak>
            @{{ errors.first('data_examen') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('data_examen_mod'), 'has-success': fields.data_examen_mod && fields.data_examen_mod.valid }">
    <label for="data_examen_mod" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.full.columns.data_examen_mod') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.data_examen_mod" :config="datetimePickerConfig"
                v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                :class="{'form-control-danger': errors.has('data_examen_mod'), 'form-control-success': fields.data_examen_mod && fields.data_examen_mod.valid}"
                id="data_examen_mod" name="data_examen_mod"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('data_examen_mod')" class="form-control-feedback form-text" v-cloak>
            @{{ errors.first('data_examen_mod') }}</div>
    </div>
</div>