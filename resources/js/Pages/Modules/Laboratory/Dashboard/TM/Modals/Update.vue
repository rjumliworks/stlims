<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="TSR Releasing" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3">
                <BCol lg="12 mt-1">
                    <InputLabel value="Tsr"/>
                    <TextInput :value="code" type="text" class="form-control" readonly :light="true"/>
                </BCol>
                <BCol lg="12 mt-1">
                    <InputLabel value="Customer"/>
                    <TextInput :value="customer" type="text" class="form-control" readonly :light="true"/>
                </BCol>
                <BCol lg="12">
                    <hr class="text-muted mt-1 mb-n1"/>
                </BCol>
                <BCol lg="12">
                    <InputLabel value="Released Date" :message="form.errors.released_at"/>
                    <TextInput v-model="form.released_at" type="date" class="form-control" placeholder="Please select date" @input="handleInput('released_at')" :light="true"/>
                </BCol>
            </BRow>
        </form>
           
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { Multiselect, InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                released_at: null,
                option: 'release'
            }),
            code: null,
            customer: null,
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(data){
            this.form.id = data.id;
            this.code = data.code;
            this.customer = data.customer;
            this.showModal = true;
        },
        submit(){
            this.form.tsr_id = (this.tsr) ? this.tsr.value : null;
            this.form.put('/release/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('update',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        updateData(data){
            this.lists[this.index] = data;
        },
        hide(){
            this.form.reset();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>