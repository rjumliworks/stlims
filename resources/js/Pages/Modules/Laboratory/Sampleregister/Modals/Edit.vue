<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Update Analysis" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <InputLabel for="customer" value="Analyst" :message="form.errors.analyst"/>
                    <Multiselect 
                    :options="analysts" 
                    v-model="form.analyst" 
                    object label="name"
                    :searchable="true" 
                    @input="handleInput('analyst')"
                    placeholder="Select Analyst"/>
                </BCol>
                <BCol lg="6" class="mt-2">
                    <InputLabel value="Start Date" :message="form.errors.start_at"/>
                    <TextInput v-model="form.start_at" type="date" class="form-control" @input="handleInput('start_at')" :light="true"/>
                </BCol>
                <BCol lg="6" class="mt-2">
                    <InputLabel value="End Date" :message="form.errors.end_at"/>
                    <TextInput v-model="form.end_at" type="date" class="form-control" @input="handleInput('end_at')" :light="true"/>
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
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput, Multiselect },
    props: ['analysts'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                analyst: null,
                start_at: null,
                end_at: null,
                option: 'tagging'
            }),
            showModal: false
        }
    },
    methods: { 
        show(data){
            this.form.id = data.id;
            this.form.analyst = {
                value: data.analyst_id,
                name: data.analyst
            };
            this.form.start_at = this.convertToISO(data.start_at);
            this.form.end_at = this.convertToISO(data.end_at);
            this.showModal = true;
        },
        submit(){
            this.form.put('/analyses/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('update',response.props.flash.data.data);
                    this.hide();
                },
            });
        },
        convertToISO(dateString) {
            const date = new Date(dateString);
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');

            return `${year}-${month}-${day}`;
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.form.reset();
            this.showModal = false;
        }
    }
}
</script>