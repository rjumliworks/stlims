<template>
    <b-modal v-if="selected" v-model="showModal" style="--vz-modal-width: 650px;" header-class="p-3 bg-light" title="Edit Quotation" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="ms-2 mt-0 mb-3">
            <h5 class="modal-title ms-n2 fs-16">{{ selected.code }}</h5>
            <div class="hstack gap-3 flex-wrap mt-0 ms-n2 mb-n2">
                <div class="text-primary fw-semibold">Customer :
                   {{ selected.customer.name }}
                </div>
            </div>
        </div>
        <form class="customform">
            <BRow class="g-3">
                <BCol lg="12">
                    <hr class="text-muted mt-0 mb-3"/>
                </BCol>
                <BCol lg="6" class="mt-1"  v-if="selected.status.name == 'Pending'">
                    <InputLabel for="region" value="Laboratory" :message="form.errors.laboratory_id"/>
                    <Multiselect 
                    :options="dropdowns.laboratories" 
                    v-model="form.laboratory_id"
                    @input="handleInput('laboratory_id')"
                    :searchable="true" label="name"
                    placeholder="Select Laboratory"/>
                </BCol>
                 <BCol lg="6" class="mt-1">
                    <InputLabel for="region" value="Discount" :message="form.errors.discount_id"/>
                    <Multiselect 
                    :options="dropdowns.discounts" 
                    v-model="form.discount_id"
                    @input="handleInput('discount_id')"
                    :searchable="true" label="name"
                    placeholder="Select Discount"/>
                </BCol>
                <BCol :lg="(selected.status.name != 'Pending') ? 6 : 12" class="mt-1">
                    <InputLabel for="region" value="Purpose" :message="form.errors.purpose_id"/>
                    <Multiselect 
                    :options="dropdowns.purposes" 
                    v-model="form.purpose_id"
                    @input="handleInput('purpose_id')"
                    :searchable="true" label="name"
                    placeholder="Select Purpose"/>
                </BCol>
            </BRow>
        </form>
           
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
    <Add @selected="set" ref="conforme"/>
</template>
<script>
import _ from 'lodash';
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { Multiselect, InputLabel, TextInput },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                laboratory_id: null,
                discount_id: null,
                purpose_id: null,
                option: 'update'
            }),
            selected: null,
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(data){
            this.selected = data;
            this.form.id = data.id;
            this.form.discount_id = data.discounted.id;
            this.form.laboratory_id = data.laboratory.id;
            this.form.purpose_id = (data.purpose) ? data.purpose.id : null;
            this.showModal = true;
        },
        submit(){
            this.form.put('/quotations/update',{
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
        hide(){
            this.form.reset();
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>