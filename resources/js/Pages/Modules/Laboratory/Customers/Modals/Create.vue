<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 700px;" header-class="p-3 bg-light" :title="(!editable) ? 'Create Customer' : 'Edit Customer'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        
            <BRow>
                <BCol lg="12" class="mt-n1">
                    <Multiselect 
                    :key="multiselectKey" 
                    :create-option="true" 
                    :options="names" 
                    @search-change="fetchCustomer" 
                    v-model="form.customer" 
                    object
                    :searchable="true" 
                    label="name"
                    :message="form.errors.name" 
                    placeholder="Select Customer"/>
                    <div v-if="form.customer" class="mb-n2">
                        <div v-if="(typeof form.customer.value === 'string')" class="alert alert-success mt-2 p-2 fs-12" role="alert">
                            The inputted customer name is new. Please double-check the spelling.
                        </div>
                        <div v-if="(typeof form.customer.value === 'number')" class="alert alert-warning mt-2 p-2 fs-12" role="alert">
                            The customer name already exists. This will add a branch for the customer name.
                        </div>
                    </div>
                    <hr class="text-muted mt-3 mb-4"/>
                    <div class="mt-3">
                    <form class="customform">
                        <BRow>
                            <BCol lg="12">
                                <BRow class="g-3">
                                    <BCol lg="8"  style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="(form.errors.has_branches) ? 'text-danger' : ''">Does the new customer represent a branch?</BCol>
                                    <BCol lg="4"  style="margin-top: 13px; margin-bottom: -12px;">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" id="customRadio1" class="custom-control-input me-2" :value="true" v-model="form.has_branches">
                                                    <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" id="customRadio2" class="custom-control-input me-2" :value="false" v-model="form.has_branches">
                                                    <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </BCol>
                                    <BCol lg="12"><hr class="text-muted mt-n2"/></BCol>
                                </BRow>
                            </BCol>
                            <BCol lg="12">
                                <BRow class="g-3 mt-n2">
                                    <BCol lg="12" v-if="form.has_branches" class="mt-0 mb-0">
                                        <InputLabel for="name" value="Branch" :message="form.errors.name"/>
                                        <TextInput id="name" v-model="form.name" type="text" class="form-control" placeholder="Please enter name" @input="handleInput('name')" :light="true"/>
                                    </BCol>
                                    <BCol :lg="(form.classification_id == 9) ? 3 : 6" class="mt-0 mb-1">
                                        <InputLabel for="classification_id" value="Classification" :message="form.errors.classification_id"/>
                                        <Multiselect :options="dropdowns.classes" label="name" v-model="form.classification_id" placeholder="Select Classification" @input="handleInput('classification_id')"/>
                                    </BCol>
                                    <BCol lg="3" v-if="form.classification_id == 9" class="mt-0 mb-1">
                                        <InputLabel for="type_id" value="Type" :message="form.errors.type_id"/>
                                        <Multiselect :options="dropdowns.individuals" label="name" v-model="form.type_id" placeholder="Select Type" @input="handleInput('type_id')"/>
                                    </BCol>
                                    <!-- <BCol :lg="(form.has_branches) ? 6 : 12" class="mt-1 mb-1">
                                        <InputLabel for="industry_id" value="Industry Type" />
                                        <Multiselect :options="dropdowns.industries" :searchable="true" v-model="form.industry_id" :message="form.errors.industry_id" placeholder="Select Industry"/>
                                        <InputError :message="form.errors.industry_id" />
                                    </BCol> -->
                                    <BCol :lg="(form.sex_id == 71) ? '3' : '6'" class="mt-0 mb-1">
                                        <InputLabel for="sex_id" value="Sex" :message="form.errors.sex_id"/>
                                        <Multiselect :options="dropdowns.sexs" label="name" v-model="form.sex_id" placeholder="Select Sex" @input="handleInput('sex_id')" />
                                    </BCol>
                                    <BCol v-if="form.sex_id == 71" lg="3" class="mt-0 mb-1">
                                        <InputLabel for="sex_id" value="Type" :message="form.errors.female_id"/>
                                        <Multiselect :options="dropdowns.females" label="name" v-model="form.female_id" placeholder="Select Type" @input="handleInput('female_id')" />
                                    </BCol>
                                    <BCol :lg="(subs.length > 0) ? '6' : '12'" class="mt-0 mb-1">
                                        <InputLabel for="industry_id" value="Industry Type" :message="form.errors.industry_id"/>
                                        <Multiselect :options="industries" :searchable="true" label="name" object v-model="industry" placeholder="Select Industry" @input="handleInput('industry')" />
                                    </BCol>
                                    <BCol lg="6" class="mt-0 mb-1" v-if="subs.length > 0">
                                        <InputLabel for="industry_id" value="Industry Subtype" :message="form.errors.industry_id"/>
                                        <Multiselect :options="subs" :searchable="true" label="name" v-model="form.industry_id" placeholder="Select Industry" @input="handleInput('industry_id')" />
                                    </BCol>
                                    <BCol lg="12"><hr class="text-muted mt-0 mb-1"/></BCol>
                                    <BCol lg="6" class="mt-1 mb-n1">
                                        <InputLabel for="email" value="Email" :message="form.errors.email"/>
                                        <TextInput id="email" v-model="form.email" type="email" class="form-control" placeholder="Please enter email" @input="handleInput('email')" :light="true"/>
                                    </BCol>
                                    <BCol lg="6" class="mt-1 mb-n1">
                                        <InputLabel for="contact_no" value="Mobile no." :message="form.errors.contact_no"/>
                                        <TextInput id="contact_no" v-model="form.contact_no" type="text" class="form-control" placeholder="Please enter contact" @input="handleInput('contact_no')" :light="true"/>
                                    </BCol>
                                    <BCol lg="12" class="mt-1">
                                        <div class="d-flex">
                                            <div style="width: 100%;">
                                                <InputLabel value="Address" :message="form.errors.address"/>
                                                <TextInput readonly v-model="address" type="text" class="form-control" placeholder="Please enter address" @input="handleInput('address')" :light="true" />
                                            </div>
                                            <div class="flex-shrink-0">
                                                <b-button @click="addLocation(index)" style="margin-top: 20px;" variant="light" class="waves-effect waves-light ms-1"><i class="ri-map-pin-fill"></i></b-button>
                                            </div>
                                        </div>
                                    </BCol>
                                    <BCol lg="12">
                                        <BRow class="g-3">
                                            <BCol lg="12"><hr class="text-muted mb-n3 mt-n1"/></BCol>
                                            <BCol lg="8" style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="(form.errors.is_new) ? 'text-danger' : ''">Is this a new Customer?</BCol>
                                            <BCol lg="4" style="margin-top: 13px; margin-bottom: -12px;">
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" id="customRadio1" class="custom-control-input me-2" :value="true" v-model="form.is_new">
                                                            <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" id="customRadio2" class="custom-control-input me-2" :value="false" v-model="form.is_new">
                                                            <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol lg="12"><hr class="text-muted mt-n2"/></BCol>
                                        </BRow>
                                    </BCol>
                                </BRow>
                            </BCol>
                        </Brow>
                    </form>
                    </div>    
                </BCol>
            </BRow>
          <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
    <Location :regions="dropdowns.regions" @submit="handleSubmit" ref="location"/>
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import Map from '../Components/Map.vue';
import Search from '../Components/Search.vue';
import Multiselect from "@vueform/multiselect";
import Location from './Location.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput, Multiselect, Map, Search, Location },
    props: ['dropdowns','region'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                name: null,
                email: null,
                is_main: false,
                contact_no: null,
                classification_id: null,
                sex_id: null,
                type_id: null,
                industry_id: null,
                has_branches: null,
                is_new: null,
                address: null,
                region_code: null,
                province_code: null,
                municipality_code: null,
                barangay_code: null,
                latitude: null,
                longitude: null,
                customer: null,
                name_id: null,
                female_id: null,
                option: 'customer'
            }),
            multiselectKey: 0,
            address: null,
            has_branch: false,
            names: [],
            industry: null,
            showModal: false,
            editable: false,
            subs: []
        }
    },
    watch: {
        'form.classification_id'(newVal){
            if(newVal == 9){
                this.industry = {
                    value: 107,
                    name: 'Individual'
                };
                this.form.industry_id = 107;
            }else{
                this.industry = null;
                this.form.industry = null;
            }
        },
        'form.customer'(){
            if(this.form.customer){
               if(typeof this.form.customer.value === 'number'){
                    this.form.has_branches = true;
                    this.form.name_id = this.form.customer.value;
               }else if(typeof this.form.customer.value === 'string'){
                    this.form.has_branches = false;
               }    
            }else{
                this.form.has_branches = false;
            }
        },
        'form.has_branches'(){
            if(!this.form.has_branches){
                this.form.name = 'Main';
                this.form.is_main = true;
            }else{
                this.form.name = null;
                this.form.is_main = false;
            }
        },
        'industry'(){
            if(this.industry){
                if(this.industry.is_alone == 1){
                    this.form.industry_id = this.industry.value;
                    this.subs = [];
                }else{
                    this.subs = this.dropdowns.industries.filter(industry => industry.industry_id == this.industry.value);
                }
            }else{
                this.subs = [];
            }
        }
    },
    computed: {
        industries() {
            return this.dropdowns.industries.filter(industry => industry.is_main == 1);
        },
    },
    methods: { 
        show(){
            this.form.reset();
            this.names = [];
            this.showModal = true;
        },
        fetchCustomer(code){
            axios.get('/customers',{
                params: {
                    option: 'search',
                    keyword: code
                }
            })
            .then(response => {
                this.names = response.data;
            })
            .catch(err => console.log(err));
        },
        submit(){
            this.form.post('/customers',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.names = [];
                    this.$emit('message',true);
                    this.hide();
                    this.multiselectKey += 1;
                },
            });
        },
        addLocation(index){
            this.$refs.location.openEdit(this.region);
        },
        handleSubmit(data) {
            this.address = data.address;
            const index = data.index;

            if (index !== undefined) {
                this.form.address = data.form.info;
                this.form.region_code = data.form.region;
                this.form.province_code = data.form.province.value;
                this.form.municipality_code = data.form.municipality.value;
                this.form.barangay_code = data.form.barangay.value;
                this.form.latitude = data.form.latitude;
                this.form.longitude = data.form.longitude;
            }
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.form.customer = null;
            this.address = null;
            this.industry = null;
            this.form.reset();
            this.form.clearErrors();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>