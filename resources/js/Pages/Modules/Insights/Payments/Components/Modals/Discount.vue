<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Filter Disount" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <BRow class="g-3 mt-1 mb-2">
                        <BCol lg="12" class="mt-1">
                            <InputLabel value="Discount"/>
                            <Multiselect :options="discounts" v-model="form.id" label="name" :searchable="true" placeholder="Select Discount" />
                        </BCol>
                    </BRow>  
                </BCol>
            </BRow>
        </form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Generate</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
export default {
    components: {InputLabel, Multiselect },
    props: ['discounts','y'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
               id: null,
            }),
            showModal: false
        }
    },
    methods: { 
        show(){
            this.showModal = true;
        },  
        submit(){
            window.open('/insights?discount='+this.form.id+'&year='+this.y+'&option=discount');
        },
        fetchProvince(code){
            axios.get('/search',{
                params: {
                    option: 'provinces',
                    code: code
                }
            })
            .then(response => {
                this.provinces = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchMunicipality(code){
            axios.get('/search',{
                params: {
                    option: 'municipalities',
                    code: code
                }
            })
            .then(response => {
                this.municipalities = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchBarangay(code){
            axios.get('/search',{
                params: {
                    option: 'barangays',
                    code: code
                }
            })
            .then(response => {
                this.barangays = response.data;
            })
            .catch(err => console.log(err));
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>