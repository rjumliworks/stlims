<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Create OR Series" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow class="g-3">
                <BCol lg="12 mt-3">
                    <InputLabel for="name" value="Series Name" :message="form.errors.name"/>
                    <TextInput id="name" v-model="form.name" type="text" class="form-control" placeholder="Please enter a name" :light="true"/>
                </BCol>
                <BCol lg="6 mt-0">
                    <InputLabel for="name" value="Start" :message="form.errors.start"/>
                    <TextInput id="name" v-model="form.start" type="text" class="form-control" placeholder="Please enter start number" :light="true"/>
                </BCol>
                <BCol lg="6 mt-0">
                    <InputLabel for="name" value="End" :message="form.errors.end"/>
                    <TextInput id="name" v-model="form.end" type="text" class="form-control" placeholder="Please enter end number" :light="true"/>
                </BCol>
                <BCol lg="12 mt-0">
                    <InputLabel for="name" value="Next" :message="form.errors.next"/>
                    <TextInput id="name" v-model="form.next" type="text" class="form-control" placeholder="Please enter next number" :light="true"/>
                </BCol>
                <BCol lg="12">
                    <BRow class="g-3 mt-n2">
                        <BCol lg="12"><hr class="text-muted mb-n3 mt-n1"/></BCol>
                        <BCol lg="8" style="margin-top: 13px; margin-bottom: -12px;" class="fs-12" :class="(form.errors.is_active) ? 'text-danger' : ''">Do you want to set this Official Receipt series as active?</BCol>
                        <BCol lg="4" style="margin-top: 13px; margin-bottom: -12px;">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio1" class="custom-control-input me-2" @input="handleInput('is_active')" :value="true" v-model="form.is_active">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio1">Yes</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio2" class="custom-control-input me-2" @input="handleInput('is_active')" :value="false" v-model="form.is_active">
                                        <label class="custom-control-label fw-normal fs-12" for="customRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                        </BCol>
                        <BCol lg="12"><hr class="text-muted mt-n2"/></BCol>
                    </BRow>
                </BCol>
            </BRow>
        </form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
export default {
    components: { InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                name: null,
                start: null,
                end: null,
                next: null,
                is_active: null,
                option: 'orseries'
            }),
            showModal: false
        }
    },
    watch: {
        "form.start"(newVal){
            this.form.next = newVal;
        }
    },
    methods: { 
        show(){
            this.form.reset();
            this.form.clearErrors();
            this.editable = false;
            this.showModal = true;
        },
        edit(data){
            this.form.reset();
            this.form.clearErrors();
            this.form.id = data.id;
            this.form.name = data.name;
            this.form.start = data.start;
            this.form.end = data.end;
            this.editable = true;
            this.showModal = true;
        },
        submit(){
            if(!this.editable){
                this.form.post('/cashiering',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.$emit('update',true);
                        this.hide();
                    },
                });
            }else{
                this.form.put('/cashiering/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.$emit('update',true);
                        this.hide();
                    },
                });
            }
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