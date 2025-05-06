<template>
    <Head :title="sample.data.code"/>
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="w-100 p-4 pb-0" ref="box">

            <BRow>
                <BCol lg="12">
                    <BCard no-body class="mt-n4 mx-n4">
                        <div class="bg-info-subtle">
                            <BCardBody class="pb-0 px-4">
                                <BRow class="mb-4 mt-2">
                                    <BCol md>
                                        <BRow class="align-items-center g-3">
                                            <BCol md>
                                                <div>
                                                    <h4 class="fw-bold">{{ sample.data.code }} <span class="fw-normal fs-14 text-muted">({{sample.data.name}})</span>
                                                        <!-- <span v-if="sample.data.is_completed" class="fs-11 badge bg-success" style="margin-top: -10px;">Completed</span>
                                                        <span v-else class="mt-n5 fs-11 badge bg-warning">Ongoing</span> -->
                                                    </h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><span class="text-muted">Received Date : </span><span class="fw-medium">{{sample.data.created_at}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div><span class="text-muted">Due Date :</span> <span class="fw-medium">{{sample.data.due_at}}</span></div>
                                                        <div class="vr" style="width: 1px;"></div>
                                                        <div v-if="sample.data.disposal"><span class="text-muted">Disposed Date : </span><span class="fw-medium">{{sample.data.disposal.disposed_at}}</span></div>
                                                        <div v-if="sample.data.disposal" class="vr" style="width: 1px;"></div>
                                                        <div v-if="sample.data.disposal"><span class="text-muted">Manner of Disposal : </span><span class="fw-medium">{{sample.data.disposal.disposal}}</span></div>
                                                        <div v-if="sample.data.disposal" class="vr" style="width: 1px;"></div>
                                                        <div>
                                                            <span v-if="sample.data.is_completed" class="badge bg-success">Completed</span>
                                                            <span v-else class="badge bg-warning">Ongoing</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </BCol>
                                    <BCol md="auto">
                                        <!-- <div class="hstack gap-1 flex-wrap">
                                            <button @click="back()" type="button" class="btn py-0 fs-16 text-body">
                                                <i class="ri-share-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-info me-1" type="button" data-original-title="View"><i class="ri-qr-code-fill align-bottom"></i></button>
                                        </div> -->
                                        <div class="hstack gap-1 mt-n2 mb-n2 flex-wrap">
                                            <div class="row g-1 text-end">
                                                <div class="col-md-12 mt-2">
                                                    <b-button @click="openQrcode(sample.data)" pill variant="primary" class="btn-label btn-sm waves-effect waves-light fs-11" style="width: 180px;">
                                                        <i class="ri-qr-code-fill label-icon align-middle rounded-pill fs-12 me-2"></i> View QR Code
                                                    </b-button>
                                                </div>
                                                <div class="col-md-12">
                                                    <b-button @click="openSample(sample.data)" pill variant="primary" class="btn-label btn-sm waves-effect waves-light fs-11" style="width: 180px;">
                                                        <i class="ri-pages-line label-icon align-middle rounded-pill fs-12 me-2"></i> View Information
                                                    </b-button>
                                                </div>
                                            </div>
                                        </div>
                                    </BCol>
                                </BRow>
                            </BCardBody>
                        </div>
                    </BCard>
                </BCol>
                <BCol lg="12">
                        <BCard no-body class="mt-n4 mx-n4 mb-n1 d-flex flex-column" style="height: calc(100vh - 235px);">
                            <div class="table-responsive mt-0 mb-0">
                                <simplebar data-simplebar style="max-height: calc(100vh - 330px);">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <thead class="table-light thead-fixed">
                                            <tr class="fs-11">
                                                <th class="text-center" style="width: 5%;" v-if="!sample.data.is_completed">
                                                    <input class="form-check-input fs-16" v-model="mark" type="checkbox" value="option" />
                                                </th>
                                                <th class="text-center" style="width: 5%;" v-else>#</th>
                                                <th style="width: 15%;">Test Name</th>
                                                <th class="text-center" style="width: 23%;">Method Reference</th>
                                                <th class="text-center" style="width: 13%;">Start</th>
                                                <th class="text-center" style="width: 13%;">End</th>
                                                <th class="text-center" style="width: 15%;">Analyst</th>
                                                <th class="text-center" style="width: 11%;">Status</th>
                                                <th class="text-end" style="width: 5%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-12">
                                            <tr v-for="(list,index) in analyses" v-bind:key="index" :class="getRowClass(list, index)">
                                                <td class="text-center fs-14" v-if="list.status.name == 'Pending'"> 
                                                    <input v-if="list.status.name !== 'Completed'" type="checkbox" v-model="list.selected" class="form-check-input" />
                                                    <i v-else class="text-success ri-checkbox-circle-fill fs-18"></i>
                                                </td>
                                                <td class="text-center fs-14" v-else>
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
                                                <td class="text-center">
                                                    <span :class="'badge '+list.status.color+' '+list.status.others">{{list.status.name}}</span>
                                                </td>
                                                <td class="text-end">
                                                    <b-button v-if="list.status.name == 'Ongoing'" @click="save(12,'end',list.id)" variant="soft-danger" class="me-1" :disabled="list.analyst_id != $page.props.user.data.id" v-b-tooltip.hover title="End Analysis" size="sm">
                                                        <i class="ri-calendar-check-fill align-bottom"></i>
                                                    </b-button>
                                                    <b-button v-if="list.status.name == 'Completed'" @click="openEdit(list,index)" :variant="(list.status.name != 'Completed') ? 'soft-success' : 'success'" class="me-1" v-b-tooltip.hover title="Update" size="sm">
                                                        <i class="ri-pencil-fill align-bottom"></i>
                                                    </b-button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </simplebar>
                            </div>
                            <div class="mt-auto">
                                <div class="float-end mb-4 me-4">
                                    <b-button v-if="countCompleted" @click="save(11,'start',null)" variant="warning" :disabled="form.processing" block>Start Analysis</b-button>
                                </div>
                            </div>
                        </BCard>
                </BCol>
            </BRow>
        </div>
    </div>
    <Sample ref="sample"/>
    <Save @update="updateData" ref="save"/>
    <Edit @update="updateAnalyst" :analysts="analysts" ref="edit"/>
</template>
<script>
import _ from 'lodash';
import Edit from './Modals/Edit.vue';
import Save from './Modals/Save.vue';
import Sample from './Modals/Sample.vue';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
export default {
    components: { Multiselect, simplebar, Sample, Save, Edit },
    props:['sample','analysts'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: { 
                keyword: null,
                class: null
            },
            form: {},
            analyses: this.sample.data.analyses,
            active: null,
            index: null, 
            mark: false
        }
    },
    watch: {
        mark(){
            if(this.mark){
                this.analyses.forEach(item => {
                    if(item.status.name == 'Ongoing' || item.status.name == 'Completed'){
                        // if (item.analyst_id === this.$page.props.user.data.id) {
                        //     item.selected = true;
                        // }
                    }else{
                        item.selected = true;
                    }
                });
            }else{
                this.analyses.forEach(item => {
                    item.selected = false;
                });
            }
        }
    },
    computed : {
        countCompleted(){
            const pending = this.analyses.filter(item => item.status.name === 'Pending').length;
            return (pending > 0) ? true : false;
        },
        tests() {
            return this.analyses
                .filter(item => item.selected)
                .map(item => item.id);
        }
    },
    methods: {
        save(status,type,id){
            if(id){
                this.tests.push(id);
            }
            this.form = this.$inertia.form({
                sample_id: this.sample.data.id,
                tsr_id: this.sample.data.tsr_id,
                id: this.tests,
                status_id: status,
                start_at: null,
                end_at: null,
                option: type
            });
            this.$refs.save.show(this.form);
        },
        openEdit(data,index){
            this.index = index;
            this.$refs.edit.show(data);
        },
        openSample(data){
            this.$refs.sample.show(data);
        },
        openQrcode(data){
            window.open('/samples?option=qrcode&id='+data.qr);
        },
        updateData(data){
            this.analyses = data.data.analyses;
            this.sample.data.is_completed = data.data.is_completed;
        },
        updateAnalyst(data){
            console.log(data);
            this.analyses[this.index] = data;
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
        back(){
            this.$inertia.visit('/samples');
        }
    }
}
</script>