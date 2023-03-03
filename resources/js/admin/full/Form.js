import AppForm from '../app-components/Form/AppForm';

Vue.component('full-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                pacient_id:  '' ,
                data_examen:  '' ,
                data_examen_mod:  '' ,
                
            }
        }
    }

});