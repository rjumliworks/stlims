<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Upload Testservices" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form enctype="multipart/form-data">
            <BRow>
                <BCol lg="12">
                    <div class="mt-1 mb-n3">
                        <div class="avatar-md mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="ri-upload-cloud-fill h1 mb-0 text-primary"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-2 text-center">
                            <h6 class="mb-0">Import using Excel</h6>
                            <p class="font-size-12 text-muted">Please click preview to generate the entry</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="mt-4 mb-2" type="file" @change="uploadFieldChange">
                        <br/>
                        <span v-if="isLoading"><i class='bx bx-loader-circle bx-spin mt-2'></i><span class="text-muted ms-1 mt-n4">Loading ... </span></span>
                        <br/>
                        <span v-if="users.length > 0 && isLoading == false" class="text-muted mb-5">Are you sure you want to import the <span class="font-weight-bold text-danger"> {{ users.length }}</span> testservices?</span>
                    </div>
                </BCol>
            </BRow>
            <BCol lg="12" class="mt-1 mb-1">
                <InputLabel value="Laboratory"/>
                <Multiselect :options="dropdowns.laboratories" 
                :searchable="true" v-model="laboratory_id" 
                placeholder="Select Laboratory" ref="multiselect1"/>
            </BCol>
            <BCol lg="12" class="mt-1 mb-1">
                <InputLabel value="Agency"/>
                <Multiselect :options="dropdowns.agencies" 
                :searchable="true" v-model="agency_id" 
                placeholder="Select Agency" ref="multiselect1"/>
            </BCol>
        </form>
          <template v-slot:footer>
            <b-button @click="preview()" :disabled="users.length > 0" variant="light" block>Preview</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="users.length == 0" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import Multiselect from '@/Shared/Components/Forms/Multiselect.vue';
export default {
    components: { Multiselect },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: {},
            users: [],
            entry: '',
            success: 0,
            failed: 0,
            duplicate: 0,
            result: false,
            isLoading: false,
            showModal: false,
            laboratory_id: null,
            agency_id: null
        }
    },
    methods: { 
        show(){
            this.showModal = true;
        },
        uploadFieldChange(e) {
            e.preventDefault();
            var file = e.target.files || e.dataTransfer.files;
            this.entry = file;
        },
        preview(){
            this.isLoading = true;
            let data = new FormData();
            data.append('import_file', this.entry[0]);
            data.append('option', 'preview');

            axios.post(this.currentUrl + '/services', data)
            .then(response => {
                this.users = response.data;
                this.isLoading = false;
            })
            .catch(error => {
                if (error.response.status == 422) {
                    this.errors = error.response.data.errors;
                    this.isLoading = false;
                }
                 this.isLoading = false;
            });
        },
        submit(){
            this.isLoading = true;
            this.qualifiers = this.users;

            axios.post(this.currentUrl + '/services', {
                lists: this.qualifiers,
                laboratory_id: this.laboratory_id,
                agency_id: this.agency_id,
                option: 'upload'
            })
            .then(response => {
                this.result = true;
                this.success = response.success;
                this.failed = response.failed;
                this.duplicate = response.duplicate;

                this.isLoading = false;
                this.showModal = false;
                this.$emit('status',true);
            })
            .catch(error => {
                if (error.response.status == 422) {
                    this.errors = error.response.data.errors;
                    this.isLoading = false;
                }
                this.isLoading = false;
            });
        },
        handleInput(field) {
            this.form.errors[field] = false;
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
<style scoped>
.multiselect-search {
  background: #f5f6f7 !important;
}
/* .input-group input {
    border: 1px solid #e9eaed;
    background-color: #f5f6f7;
    height: 37.5px;
}
.testbutton {
    height: 38px;
} */
</style>