<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 600px;" header-class="p-3 bg-light" title="Edit TSR" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <div class="row g-2">
                <BCol lg="12">
                    <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow fs-11" role="alert">
                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Only TSR's with <b>Pending</b> or <b>For Payment</b> status can be updated.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </BCol>
            </div>
        </form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Update</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                option: 'Update'
            }),
            showModal: false
        }
    },
    methods: { 
        show(data){
            this.form.id = data;
            this.showModal = true;
        },
        submit(){
            this.form.put('/testrequests/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('update',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>