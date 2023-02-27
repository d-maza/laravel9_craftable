import AppForm from '../app-components/Form/AppForm';

Vue.component('pacient-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nom:  '' ,
                cognoms:  '' ,
                telefon:  '' ,
                curs_escolar:  '' ,
                data_naixement:  '' ,
                sex:  '' ,
                esports:  '' ,
                fecha:  '' ,
                referidor:  '' ,
                
            }
        }
    }

});