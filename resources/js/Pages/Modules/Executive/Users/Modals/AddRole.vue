
<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Add Role" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3 mt-n1">
                <BCol lg="12" class="mt-0 mb-2">
                    <div class="alert fs-10 alert-danger alert-dismissible alert-label-icon label-arrow fade show mb-xl-0 material-shadow" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>Notice</strong>
                        - Adding a new role will grant the user access to the corresponding role module.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </BCol>
                <BCol lg="12" class="mt-1">
                    <BCol lg="12"><hr class="text-muted"/></BCol>
                    <BRow class="g-3">
                        <BCol lg="7"  style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="(form.errors.is_psto) ? 'text-danger' : ''">Select the assigned area for the user?</BCol>
                        <BCol lg="5"  style="margin-top: 13px; margin-bottom: -12px;">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio3" class="custom-control-input me-2" @input="handleInput('is_psto')" :value="0" v-model="form.is_psto">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio3">Regional</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio4" class="custom-control-input me-2" @input="handleInput('is_psto')" :value="1" v-model="form.is_psto">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio4">PSTO</label>
                                    </div>
                                </div>
                            </div>
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n2"/></BCol>
                    </BRow>
                </BCol>
                <BCol v-if="form.is_psto != null" :lg="(!form.is_psto) ? 12 : 6" class="mt-0">
                    <InputLabel for="username" value="Agency" :message="form.errors.agency_id"/>
                    <Multiselect :options="dropdowns.agencies" label="name" v-model="form.agency" object @input="handleInput('agency_id')" placeholder="Select Agency" ref="multiselect1"/>
                </BCol>
                <BCol lg="6" v-if="form.is_psto" class="mt-0">
                    <InputLabel for="province_code" value="Province" :message="form.errors.province_code"/>
                    <Multiselect :options="provinces" label="name" v-model="form.province_code" placeholder="Select Province" ref="multiselect3"/>
                </BCol>
                
                <BCol v-if="form.agency_id" :lg="(has_lab || form.role_id == 9) ? 6 : 12" class="mt-1">
                    <InputLabel for="role" value="Role" :message="form.errors.role_id"/>
                    <Multiselect
                    v-model="form.role" :groups="true"
                    :options="dropdowns.roles"
                    label="name"
                    object
                    ref="multiselect2"
                    placeholder="Select Role"/>
                </BCol>
                <BCol lg="6" v-if="has_lab" class="mt-1">
                    <InputLabel for="laboratory_id" value="Laboratory" :message="form.errors.laboratory_id"/>
                    <Multiselect :options="dropdowns.laboratories" label="name" v-model="form.laboratory_id" placeholder="Select Laboratory" ref="multiselect3"/>
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
export default {
    components: { Multiselect, InputLabel },
    props: ['dropdowns'],
    data(){
        return {
            form: useForm({
                code: null,
                role_id: null,
                agency_id: null,
                province_code: null,
                laboratory_id: null,
                is_psto: null,
                type: 'add',
                option: 'new'
            }),
            provinces: [],
            facilities: [],
            user: {},
            type: null,
            showModal: false,
        }
    },
    watch: {
        "form.is_psto"(newVal){
            this.form.province_code = null;
            this.provinces = null;
            this.form.agency = null;
            this.form.agency_id = null;
        },
        "form.role"(newVal){
            if(newVal){
                if(newVal.has_lab){
                    this.has_lab = 1
                }else{
                    this.has_lab = 0
                }
                this.form.role_id = newVal.value;
            }else{
                this.has_lab = 0;
                this.form.role_id = null;
            }
        },
        "form.agency"(newVal){
            if(newVal){
              this.form.agency_id = newVal.value;
              this.region = newVal.region;
              this.fetchProvince(this.region);
            }else{
                this.has_lab = 0;
                this.form.agency_id = null;
                this.form.role = null;
                this.form.role_id = null;
                this.form.province_code = null;
                this.form.laboratory_id = null;
                this.provinces = [];
            }
        }
    },
    methods: { 
        show(data){
            this.user = data;
            this.form.code = this.user.code,
            this.showModal = true;
        },
        submit(){
            this.form.put('/users/update', {
                preserveScroll: true,
                onSuccess: () => {
                    this.$emit('update',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
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
         
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.user = {};
            this.form.reset();
            this.form.clearErrors();
            this.showModal = false;
        }
    }
}
</script>