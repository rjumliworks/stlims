<template>
    <b-modal  v-if="selected" v-model="showModal" style="--vz-modal-width: 650px;" header-class="p-3 bg-light" title="View Analysis" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            <h6><span class="fw-semibold text-primary fs-15">{{ selected.testname }}</span> <span class="text-muted">({{ selected.sampletype }})</span></h6>
                            <div class="hstack gap-3  fs-12 flex-wrap">
                                <div>Analyst : 
                                    <span v-if="selected.analyst != '-'" class="fw-medium">{{selected.analyst}}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                                <div class="vr" style="width: 1px;"></div>
                                <div>Status : 
                                    <span class="fw-medium">{{selected.status.name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-muted mt-0"/>
         <div class="row g-2 mt-n2">
            <div class="col-sm-12">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-information-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0 fs-12">Method:</p>
                            <h5 class="mb-0 fs-12">{{selected.method}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-3">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-file-list-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0 fs-12">Reference:</p>
                            <h5 class="mb-0 fs-12">{{selected.reference}}</h5>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <hr class="text-muted mt-0"/>
        <div class="row g-2 mt-n2 mb-n2">
            <div class="col-sm-6">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0 fs-12">Start Date:</p>
                            <h5 class="mb-0 fs-12">{{(selected.start_at) ? selected.start_at : '-'}}</h5>
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
                            <p class="text-muted mb-0 fs-12">End Date :</p>
                            <h5 class="mb-0 fs-12">{{(selected.end_at) ? selected.end_at : '-'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-n3" v-if="selected.status.name == 'Cancelled'">
                <hr class="text-muted mt-2"/>
                <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow mt-2 fs-12" role="alert"><i class="ri-error-warning-line label-icon"></i>
                    <b><i>{{ selected.remarkable.reason }}</i></b><br /> <br /> 
                    This analysis has been cancelled. <br /> The amount of <strong>{{ selected.fee }}</strong> has been credited to the customer's wallet. 
                </div>
            </div>
            <template v-if="selected.remarkable">
                <div class="col-sm-12 mb-n3" v-if="selected.remarkable.type_id == 86">
                    <hr class="text-muted mt-2"/>
                    <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow mt-2 fs-12" role="alert"><i class="ri-error-warning-line label-icon"></i>
                        <b><i>{{ selected.remarkable.reason }}</i></b><br /> <br /> 
                        This analysis cost has been refunded. <br /> The amount of <strong>{{ selected.remarkable.amount }}</strong> has been credited to the customer's wallet. 
                    </div>
                </div>
            </template>
        </div>
        
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button v-if="status == 'Ongoing' && selected.status.name == 'Pending' && selected.is_refunded == 0" @click="openCancel(selected,'refund')" variant="success" block>Refund</b-button>
            <b-button v-if="status == 'Ongoing' && selected.status.name == 'Pending' && selected.is_refunded == 0" @click="openCancel(selected,'cancel')" variant="danger" block>Cancel</b-button>
        </template>
    </b-modal>
    <Cancel @success="hide()" ref="cancel"/>
</template>
<script>
import Cancel from './Cancel.vue';
import simplebar from "simplebar-vue";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    props: ['status','customer','id'],
    components : { InputLabel, TextInput, simplebar, Cancel }, 
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: {
                analyses: [],
                lists: [],
                report: {},
                status: {}
            }
        }
    },
    methods: { 
        show(data){
            this.selected = data;   
            this.showModal = true;
        },
        getRowClass(list, index) {
            if (list.selected) {
                return 'bg-warning-subtle';
            }
            if (list.status.name == 'Completed') {
                return 'bg-success-subtle';
            }
            return '';
        },
        printQr(id){
            window.open('/testreports?option=qrcode&id='+this.selected.qr);
        },
        openCancel(data,type){
            this.$refs.cancel.show(data,this.customer,this.id,type);
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>