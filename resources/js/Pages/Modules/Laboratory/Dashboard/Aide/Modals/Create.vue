<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Sample Disposal" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-2">
                <!-- <BCol lg="12">
                    <InputLabel for="customer" value="Sample Code" :message="form.errors.sample_id"/>
                    <Multiselect 
                    :options="samples" 
                    @search-change="fetchSample" 
                    v-model="form.sample_id" 
                    label="name"
                    object
                    :searchable="true" 
                    @input="handleInput('sample_id')"
                    placeholder="Select Sample"/>
                </BCol> -->
                <BCol lg="6" v-if="form.sample">
                    <!-- <InputLabel for="firstname" value="Firstname" :message="form.errors.firstname"/> -->
                    <TextInput id="firstname" v-model="form.sample.code" type="text" class="form-control" :light="true" readonly/>
                </BCol>
                <BCol lg="6" v-if="form.sample">
                    <!-- <InputLabel for="firstname" value="Firstname" :message="form.errors.firstname"/> -->
                    <TextInput id="firstname" v-model="form.sample.name" type="text" class="form-control" :light="true" readonly/>
                </BCol>
                <BCol lg="12">
                    <hr class="text-muted mt-1 mb-n3"/>
                </BCol>
                <BCol lg="12" class="mt-2">
                    <InputLabel value="Type of Disposal" :message="form.errors.disposal_id"/>
                    <Multiselect 
                    :options="disposals" 
                    v-model="form.disposal_id" 
                    label="name"
                    :searchable="true" 
                    @input="handleInput('disposal_id')"
                    placeholder="Select Type"/>
                </BCol>
                <BCol lg="12" class="mt-1">
                    <InputLabel value="Disposed Date" :message="form.errors.disposed_at"/>
                    <TextInput v-model="form.disposed_at" type="date" class="form-control" placeholder="Please select date" @input="handleInput('disposed_at')" :light="true"/>
                </BCol>
            </BRow>
        </form>

        {{form.sample_id}}
           
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
    props: ['disposals'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                sample: null,
                disposal_id: null,
                disposed_at: null,
                option: 'disposal'
            }),
            samples: [],
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(data){
            this.form.sample = data.sample;
            this.showModal = true;
        },
        submit(){
            this.form.post('/samples',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('success',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
        },
        fetchSample(code){
            axios.get('/search',{
                params: {
                    option: 'sample',
                    keyword: code
                }
            })
            .then(response => {
                this.samples = response.data;
            })
            .catch(err => console.log(err));
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.form.reset();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>