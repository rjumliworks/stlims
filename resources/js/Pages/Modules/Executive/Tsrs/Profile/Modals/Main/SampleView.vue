<template>
     <!-- style="--vz-modal-width: 1000px;" -->
    <b-modal  v-if="selected" v-model="showModal" style="--vz-modal-width: 1000px;" header-class="p-3 bg-light" title="View Sample" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            <h6><span class="fw-semibold text-primary fs-15">{{ selected.code }}</span> <span class="fw-normal fs-14 text-muted">({{selected.name}})</span></h6>
                            <div class="hstack gap-3 fs-13 flex-wrap">
                                <!-- <div><span class="text-muted">Sample Name :</span> <span class="fw-medium">{{selected.name}}</span></div> -->
                                <!-- <div class="vr" style="width: 1px;"></div> -->
                                <div><span class="text-muted">Report No. :</span> <span class="fw-medium">{{selected.report.code}}</span></div>
                                <div class="vr" style="width: 1px;"></div>
                                <div><span class="text-muted">Date Completed :</span> <span class="fw-medium">{{selected.completed_at}}</span></div>
                                <div class="vr" style="width: 1px;"></div>
                                <div v-if="selected.disposal"><span class="text-muted">Disposed Date : </span><span class="fw-medium">{{selected.disposal.disposed_at}}</span></div>
                                <div v-if="selected.disposal" class="vr" style="width: 1px;"></div>
                                <div v-if="selected.disposal"><span class="text-muted">Manner of Disposal : </span><span class="fw-medium">{{selected.disposal.disposal}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-muted mt-0"/>
        <div class="card bg-light-subtle shadow-none border">
            <div class="card-header bg-light-subtle">
                <div class="d-flex mb-n3">
                    <div class="flex-shrink-0 me-3">
                        <div style="height:2.5rem;width:2.5rem;">
                            <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                <i class="ri-flask-fill text-primary fs-22"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fs-13"><span class="text-body">List of Services</span></h5>
                        <p class="text-muted text-truncate-two-lines fs-12">Generate and track quotations for lab services requested by customers.</p>
                    </div>
                    <div class="flex-shrink-0"></div>
                </div>
            </div>
            <div class="card bg-white border-bottom shadow-none" no-body>
                 <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light thead-fixed">
                        <tr class="fs-11">
                            <th class="text-center" style="width: 5%;">#</th>
                            <th style="width: 15%;">Test Name</th>
                            <th class="text-center">Method Reference</th>
                            <th class="text-center" style="width: 12%;">Start</th>
                            <th class="text-center" style="width: 12%;">End</th>
                            <th class="text-center" style="width: 15%;">Analyst</th>
                        </tr>
                    </thead>
                    <tbody class="fs-12">
                        <tr v-for="(list,index) in selected.analyses" v-bind:key="index" :class="getRowClass(list, index)">
                            <td class="text-center fs-14">
                                <i v-if="list.status.name == 'Completed'" class="text-success ri-checkbox-circle-fill fs-18"></i>
                                <span v-else class="text-muted">-</span>
                            </td>
                            <td>
                                <h5 class="fs-12 mb-0">{{list.testname}}</h5>
                                <p class="text-muted mb-0 fs-11">{{list.sample}}</p>
                            </td>
                            <td class="text-center">
                                <h5 class="fs-12 mb-0">{{list.method}}</h5>
                                <p class="text-muted fs-11 mb-0">{{list.reference}}</p>
                            </td>
                            <td class="text-center">{{list.start_at}}</td>
                            <td class="text-center">{{list.end_at}}</td>
                            <td class="text-center">{{list.analyst}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
    components : { InputLabel, TextInput, simplebar }, 
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: {
                analyses: [],
                lists: [],
                report: {}
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
        hide(){
            this.showModal = false;
        }
    }
}
</script>