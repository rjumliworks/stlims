<template>
     <!-- style="--vz-modal-width: 1000px;" -->
    <b-modal  v-if="selected" v-model="showModal" style="--vz-modal-width: 600px;" header-class="p-3 bg-light" title="View Report Number" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="row mt-2">
            <div class="col-sm-6">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-hashtag"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1 fs-12">Report No. :</p>
                            <h5 class="mb-0 fs-13">{{selected.report.code}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1 fs-12">Report Date :</p>
                            <h5 class="mb-0 fs-13">{{selected.created_at}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-muted"/> 
        <div class="alert alert-primary alert-dismissible alert-label-icon rounded-label fade show mb-n2" role="alert">
            <i class="ri-qr-code-fill label-icon"></i><strong>TSR Verification QR Code</strong> - <span style="cursor: pointer;" @click="printQr()">Click to print and affix to test report</span>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button @click="openResult()" variant="primary" block>Preview</b-button>
        </template>
    </b-modal>
</template>
<script>
import simplebar from "simplebar-vue";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components : { InputLabel, TextInput, simplebar}, 
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: { analyses: [], report: {}},
            parameters: [
                {name: null, result: null}
            ],
        }
    },
    methods: { 
        show(data){
            this.selected = data;
            this.parameters = this.selected.analyses.map(analysis => {
                // return { name: analysis.testservice.testname.name, result: null };
            });
            this.showModal = true;
        },
        printQr(id){
            window.open('/testreports?option=qrcode&id='+this.selected.qr);
        },
        openResult(){
            this.$refs.result.show(this.parameters,this.selected.sample_id);
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>