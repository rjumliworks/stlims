<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 700px;" header-class="p-3 bg-light" title="Edit Customer" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        
            <BRow v-if="selected">
                <BCol lg="12" class="mt-n1">
                    <TextInput id="address" :value="selected.customer" type="text" class="form-control" :light="true" readonly/>
                    <div class="mt-4">
                    <form class="customform">
                        <BRow>
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
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                is_new: null,
                option: 'type',
            }),
            errors: [],
            showModal: false,
            editable: false,
            selected: null,
        }
    },

    methods: { 
        show(data){
            this.selected = data;
            this.form.id = data.id;
             this.form.is_new =
        data.is_new === null
            ? null
            : Boolean(Number(data.is_new));
            this.showModal = true;
        },
        submit(){
            this.form.put('/customers/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('update',true);
                    this.hide();
                }
            });
        },
        handleInput(field) {
            this.errors[field] = false;
        },
        hide(){
            this.form.reset();
            this.form.clearErrors();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>