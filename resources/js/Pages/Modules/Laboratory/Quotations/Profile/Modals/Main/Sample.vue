<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 800px;" header-class="p-3 bg-light" :title="(!editable) ? 'Add Sampletype' : 'Edit Sampletype'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3 mt-3">
                <BCol lg="12" class="mt-n2 mb-n3">
                    <InputLabel for="name" value="Sample Name"/>
                    <TextInput id="name" v-model="form.name" type="text" class="form-control" placeholder="Please enter name" :light="true"/>
                </BCol>
                <BCol lg="6" class="mb-1">
                    <InputLabel for="name" value="Description provided by customer"/>
                    <Textarea id="name" v-model="form.customer_description" class="form-control" rows="7" :light="true"/>
                </BCol>
                <BCol lg="6" class="mb-1">
                    <InputLabel for="name" value="Description based on the sample submitted"/>
                    <Textarea id="name" v-model="form.description" class="form-control" rows="7" :light="true"/>
                </BCol>
            </BRow>
        </form>
           
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
    <!-- <Add @selected="set" ref="conforme"/> -->
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
import Textarea from '@/Shared/Components/Forms/Textarea.vue';
export default {
    components: { InputLabel, TextInput, Textarea },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                quotation_id: null,
                name: null,
                description: null,
                customer_description: null,
                option: 'sample'
            }),
            sampletypes: [],
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(id,laboratory){
            this.form.quotation_id = id;
            this.form.laboratory_id = laboratory;
            this.showModal = true;
        },
        copy(id,sample){
            this.form.quotation_id = id;
            this.form.name = sample.name;
            this.form.description = sample.description;
            this.form.customer_description = sample.customer_description;
            this.showModal = true;
        },
        edit(id,data){
            this.form.id = data.id;
            this.form.quotation_id = id;
            this.form.option = 'quotation';
            this.form.name = data.name;
            this.form.description = data.description;
            this.form.customer_description = data.customer_description;
            this.form.tsr_id = id;
            this.editable = true;
            this.showModal = true;
        },
        submit(){
            if(this.editable){
                this.form.put('/quotations/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    },
                });
            }else{
                this.form.post('/quotations',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    },
                });
            }
        },
        hide(){
            this.form.reset();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>