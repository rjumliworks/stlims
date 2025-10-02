<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Add Sample Name" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12 mt-3" v-if="selected">
                    <TextInput :value="selected.name" type="text" class="form-control" placeholder="Please enter name" :light="true" readonly/>
                </BCol>
                <BCol lg="12">
                    <InputLabel :value="(selected) ? 'Subtype' : 'Name'" :message="form.errors.name"/>
                    <TextInput v-model="form.name" type="text" class="form-control" placeholder="Please enter name" :light="true"/>
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
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                name: null,
                name_id: null,
                option: 'name'
            }),
            selected: null,
            showModal: false
        }
    },
    methods: { 
        show(data){
            this.selected = (data)? data : null;
            this.showModal = true;
        },
        submit(){
            (this.selected) ? this.form.name_id = this.selected.value : '';
            this.form.post('/samples',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('success',response.props.flash.data);
                    this.hide();
                },
            });
        },
        hide(){
            this.form.reset();
            this.selected = null;
            this.showModal = false;
        }
    }
}
</script>