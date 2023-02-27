<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nom'), 'has-success': fields.nom && fields.nom.valid }">
    <label for="nom" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.nom') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nom" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nom'), 'form-control-success': fields.nom && fields.nom.valid}" id="nom" name="nom" placeholder="{{ trans('admin.pacient.columns.nom') }}">
        <div v-if="errors.has('nom')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nom') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cognoms'), 'has-success': fields.cognoms && fields.cognoms.valid }">
    <label for="cognoms" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.cognoms') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cognoms" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cognoms'), 'form-control-success': fields.cognoms && fields.cognoms.valid}" id="cognoms" name="cognoms" placeholder="{{ trans('admin.pacient.columns.cognoms') }}">
        <div v-if="errors.has('cognoms')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cognoms') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefon'), 'has-success': fields.telefon && fields.telefon.valid }">
    <label for="telefon" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.telefon') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefon" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefon'), 'form-control-success': fields.telefon && fields.telefon.valid}" id="telefon" name="telefon" placeholder="{{ trans('admin.pacient.columns.telefon') }}">
        <div v-if="errors.has('telefon')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefon') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('curs_escolar'), 'has-success': fields.curs_escolar && fields.curs_escolar.valid }">
    <label for="curs_escolar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.curs_escolar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.curs_escolar" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('curs_escolar'), 'form-control-success': fields.curs_escolar && fields.curs_escolar.valid}" id="curs_escolar" name="curs_escolar" placeholder="{{ trans('admin.pacient.columns.curs_escolar') }}">
        <div v-if="errors.has('curs_escolar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('curs_escolar') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('data_naixement'), 'has-success': fields.data_naixement && fields.data_naixement.valid }">
    <label for="data_naixement" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.data_naixement') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.data_naixement" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('data_naixement'), 'form-control-success': fields.data_naixement && fields.data_naixement.valid}" id="data_naixement" name="data_naixement" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('data_naixement')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('data_naixement') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sex'), 'has-success': fields.sex && fields.sex.valid }">
    <label for="sex" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.sex') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sex" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sex'), 'form-control-success': fields.sex && fields.sex.valid}" id="sex" name="sex" placeholder="{{ trans('admin.pacient.columns.sex') }}">
        <div v-if="errors.has('sex')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sex') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('esports'), 'has-success': fields.esports && fields.esports.valid }">
    <label for="esports" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.esports') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.esports" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('esports'), 'form-control-success': fields.esports && fields.esports.valid}" id="esports" name="esports" placeholder="{{ trans('admin.pacient.columns.esports') }}">
        <div v-if="errors.has('esports')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('esports') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('referidor'), 'has-success': fields.referidor && fields.referidor.valid }">
    <label for="referidor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pacient.columns.referidor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.referidor" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('referidor'), 'form-control-success': fields.referidor && fields.referidor.valid}" id="referidor" name="referidor" placeholder="{{ trans('admin.pacient.columns.referidor') }}">
        <div v-if="errors.has('referidor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('referidor') }}</div>
    </div>
</div>


