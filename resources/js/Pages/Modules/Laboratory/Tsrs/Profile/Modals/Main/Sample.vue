<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 800px;" header-class="p-3 bg-light" :title="(!editable) ? 'Add Sampletype' : 'Edit Sampletype'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3 mt-3">
                <BCol lg="12" v-if="action == 'copy'" class="mt-0 mb-2">
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow" role="alert"><i class="ri-error-warning-line label-icon"></i>
                        <div class="d-flex mb-n2">
                            <div class="flex-shrink-0 me-3">
                                <TextInput id="name" v-model="form.count" type="text" class="form-control" style="width: 45px; text-align: center;" :light="true"/>
                            </div>
                            <div class="flex-grow-1 mt-2"> 
                                <span>Please specify how many copies of the sample you want to add with its details.</span>
                            </div>
                        </div>
                    </div>
                </BCol>
                <BCol lg="12" v-if="action == 'copy'">
                    <hr class="text-muted mt-n3"/>
                </BCol>
                <BCol lg="12" class="mt-n3 mb-3">
                    <div class="d-flex">
                        <div style="width: 100%;">
                            <div class="row g-2">
                                <div :class="(form.sampletype?.subs.length > 0) ? 'col-md-6' : 'col-md-12'">
                                    <InputLabel for="conforme" value="Sample Type" :message="form.errors.sampletype_id"/>
                                    <Multiselect 
                                    :options="types" 
                                    object
                                    @search-change="fetchTypes"
                                    v-model="form.sampletype"
                                    @input="handleInput('sampletype')"
                                    :searchable="true" label="name"
                                    placeholder="Select Sampletype"/>
                                </div>
                                 <div class="col-md-6" v-if="form.sampletype?.subs.length > 0">
                                    <InputLabel for="conforme" value="Sample Type" :message="form.errors.sampletype_id"/>
                                    <Multiselect 
                                    :options="form.sampletype.subs" 
                                    v-model="form.sampletype_id"
                                    @input="handleInput('sampletype_id')"
                                    :searchable="true" label="name"
                                    placeholder="Select Sampletype"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex-shrink-0">
                            <b-button @click="openAdd()" style="margin-top: 20px;" variant="light" class="waves-effect waves-light ms-1"><i class="ri-add-circle-fill"></i></b-button>
                        </div>
                    </div>
                </BCol>
                <BCol lg="12">
                    <hr class="text-muted mt-n3"/>
                </BCol>
                <BCol lg="12" class="mt-n2 mb-n3">
                    <InputLabel for="name" value="Sample Name"/>
                    <TextInput id="name" v-model="form.name" type="text" class="form-control" placeholder="Please enter name" :light="true"/>
                </BCol>
                <BCol lg="6" class="mb-1">
                    <InputLabel for="name" value="Description provided by customer"/>
                    <Textarea id="name" v-model="form.customer_description" class="form-control" rows="7" :class="{ 'is-invalid': form.errors.customer_description }" :light="true"/>
                </BCol>
                <BCol lg="6" class="mb-1">
                    <InputLabel for="name" value="Description based on the sample submitted"/>
                    <Textarea id="name" v-model="form.description" class="form-control" rows="7" :class="{ 'is-invalid': form.errors.description }" :light="true"/>
                </BCol>
            </BRow>
        </form>
           
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
    <Add @selected="set" ref="add"/>
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import Add from './AddSampletype.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
import Textarea from '@/Shared/Components/Forms/Textarea.vue';

export default {
    components: { InputLabel, TextInput, Textarea, Multiselect, Add },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                tsr_id: null,
                sampletype_id: null,
                sampletype: null,
                name: null,
                code: null,
                description: null,
                customer_description: null,
                laboratory_id: null,
                count: 1,
            }),
            types: [],
            action: null,
            sampletypes: [],
            showModal: false,
            editable: false
        }
    },
    watch: {
        "form.sampletype"(newVal){
            if (newVal) {
                if (!this.editable && this.action !== 'copy') {
                    this.form.sampletype_id = newVal.value;
                }else{
                    if(this.form.sampletype.subs.length == 0){
                        this.form.sampletype_id = newVal.value;
                    }
                }
            } else {
                this.form.sampletype_id = null;
            }
        },
    },
    methods: { 
        show(id, laboratory){
            this.editable = false;
            this.form.reset();
            this.types = [];
            this.action = null;
            this.form.tsr_id = id;
            this.form.laboratory_id = laboratory;
            this.showModal = true;
        },

        edit(id, laboratory, data){
            this.editable = true;
            this.form.reset();
            this.types = [];
            this.action = null;
            this.form.id = data.id;
            this.form.name = data.name;
            this.form.description = data.description;
            this.form.customer_description = data.customer_description;
            this.form.tsr_id = id;
            this.form.laboratory_id = laboratory;
            this.setSampleType(data.sample);
            this.showModal = true;
        },

        copy(id, laboratory, data){
            this.action = 'copy';
            this.form.reset();
            this.types = [];
            this.form.tsr_id = id;
            this.form.name = data.name;
            this.form.description = data.description;
            this.form.customer_description = data.customer_description;
            this.form.laboratory_id = laboratory;
            this.setSampleType(data.sample);
            this.showModal = true;
        },

        setSampleType(sample){
            if (sample === null || sample === undefined) {
                return;
            }
            if(sample.parent){
                this.types.push({
                    value: sample.parent.id,
                    name: sample.parent.name
                });
                this.form.sampletype = {
                    value: sample.parent.id,
                    name: sample.parent.name,
                    subs: Array.isArray(sample.parent.subs)
                        ? sample.parent.subs.map(sub => ({
                            value: sub.id,
                            name: sub.name
                        }))
                        : []
                };
                this.form.sampletype_id = sample.id;
            } else {
                this.types.push({
                    value: sample.id,
                    name: sample.name
                });
                this.form.sampletype = {
                    value: sample.id,
                    name: sample.name,
                    subs: Array.isArray(sample.subs)
                        ? sample.subs.map(sub => ({
                            value: sub.id,
                            name: sub.name
                        }))
                        : []
                };
                this.form.sampletype_id = sample.id;
            }
        },

        submit(){
            if(this.editable){
                this.form.put('/samples/update',{
                    preserveScroll: true,
                    onSuccess: () => this.hide(),
                });
            } else {
                this.form.post('/samples',{
                    preserveScroll: true,
                    onSuccess: () => this.hide(),
                });
            }
        },

        openAdd(){
            this.$refs.add.show(this.form.laboratory_id);
        },

        fetchTypes: _.debounce(function (code) {
            if (!code || code.length < 2) return; // prevent firing for empty / too short queries
            axios.get('/samples', {
                params: {
                    laboratory: this.form.laboratory_id,
                    option: 'types',
                    keyword: code
                }
            })
            .then(response => {
                this.types = response.data;
            })
            .catch(err => console.log(err));
        }, 300),

       set(data){
            if (!this.types.find(t => t.value === data.value)) {
                this.types.push(data);
            }
            this.form.sampletype = {
                ...data,
                subs: Array.isArray(data.subs) ? data.subs : [] // always normalize
            };
            this.form.sampletype_id = data.value;
        },

        handleInput(field) {
            this.form.errors[field] = false;
        },

        hide(){
            this.form.reset();
            this.editable = false;
            this.action = null;
            this.types = [];
            this.showModal = false;
        }
    }
}
</script>
