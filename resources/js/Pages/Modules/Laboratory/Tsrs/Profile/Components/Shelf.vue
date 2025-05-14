<template>
    <BRow>
        <div class="col-md-12">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Shelf-life Testing</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Generate and track quotations for lab services requested by customers.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md mt-2">
                                <label for="navbarscrollspy-showcode" class="form-label text-muted">Show Analyses</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="navbarscrollspy-showcode">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-bottom shadow-none mb-0">
                    <div class="step-arrow-nav mt-0">
                        <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                            <li class="nav-item" role="presentation" v-for="(menu, index) in menus" v-bind:key="index">
                                <button class="nav-link fs-12 p-3" :class="(index == 0) ? 'active' : ''" 
                                    :id="menu+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+menu" 
                                    type="button" role="tab" :aria-controls="menu" aria-selected="true">
                                    {{menu}}
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body bg-white rounded-bottom">
                    <div class="tab-content">
                        <div class="tab-pane" :class="(index == 0) ? 'show active' : ''" :id="menu" role="tabpanel" :aria-labelledby="menu+'-tab'" v-for="(menu, index) in menus" v-bind:key="index">
                            
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <transition mode="out-in">
                                        <div :key="index" class="tab-content">
                                            <div v-if="menu == 'Sample'">
                                                <div class="table-responsive table-card" style="height: calc(100vh - 443px);">
                                                    <table class="table table-nowrap align-middle mb-0">
                                                        <thead class="bg-primary text-white">
                                                             <tr class="fs-11">
                                                                <th v-if="selected.status.name == 'Pending'" width="4%" class="text-center">
                                                                    <input class="form-check-input fs-16" v-model="mark" type="checkbox" value="option" />
                                                                </th>
                                                                <th :class="(selected.status.name == 'Pending') ? '' : 'text-center'" width="5%">#</th>
                                                                <th width="20%">Sample Name</th>
                                                                <th width="63%">Description</th>
                                                                <th v-if="selected.status.name != 'Pending'" width="4%" class="text-center">Status</th>
                                                                <th width="7%"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody v-if="selected.samples.length > 0">
                                                            <template  v-for="(list,index) in selected.samples" v-bind:key="index">
                                                            <tr>
                                                                <td v-if="selected.status.name == 'Pending'"  width="4%" class="text-center">
                                                                    <input type="checkbox" v-model="list.selected" class="form-check-input" />
                                                                </td>
                                                                <td :class="(selected.status.name == 'Pending') ? '' : 'text-center'" width="3%">{{index+1}}</td>
                                                                <td width="20%">
                                                                    <h5 class="fs-13 mb-0 fw-semibold text-primary">{{(list.code) ? list.code : 'Not yet available'}}</h5>
                                                                    <p class="fs-13 text-muted mb-0">{{list.name}}</p>
                                                                </td>
                                                                <td width="63%" class="fs-12" style=" white-space: normal;overflow: hidden; text-overflow: ellipsis; max-width: 150px;">
                                                                    <i>{{list.customer_description}}</i>, {{list.description}}
                                                                </td>
                                                                <td v-if="selected.status.name != 'Pending'" width="4%" class="text-center">
                                                                    <span class="fs-12" v-if="list.analyses.filter(item => item.status.name == 'Completed').length != list.analyses.length">{{list.analyses.filter(item => item.status.name == "Completed").length}} / {{list.analyses.length}}</span>
                                                                    <span v-else><i class="ri-checkbox-circle-fill text-success fs-18" v-b-tooltip.hover :title="list.analyses.filter(item => item.status.name == 'Completed').length+'/'+list.analyses.length"></i></span>
                                                                </td>
                                                                <td width="7%" class="text-end">
                                                                    <b-button v-if="selected.status.name == 'Pending'" @click="openDeleteSample(list)" variant="soft-danger" v-b-tooltip.hover title="Delete" size="sm">
                                                                        <i class="ri-delete-bin-fill align-bottom"></i>
                                                                    </b-button>
                                                                    <b-button v-if="selected.status.name == 'Completed'" @click="openCertificate(list)" variant="soft-primary" v-b-tooltip.hover title="Certificate" size="sm">
                                                                            <i class="ri-file-paper-2-fill align-bottom"></i>
                                                                        </b-button>
                                                                </td>
                                                            </tr>
                                                            <tr v-if="list.analyses.length > 0" class="bg-info-subtle">
                                                                    <td colspan="5">
                                                                        <table class="table table-nowrap border align-middle mb-0">
                                                                            <thead class="table-light thead-fixed">
                                                                                <tr class="fs-10">
                                                                                    <th class="text-center" width="5%">#</th>
                                                                                    <th width="20%">Test Name</th>
                                                                                    <th class="text-center" width="50%">Method Reference</th>
                                                                                    <th class="text-center" width="12%">Fee</th>
                                                                                    <th class="text-center" width="13%">Status</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody v-if="list.analyses.length > 0">
                                                                                <tr v-for="(list,index) in list.analyses" v-bind:key="index" class="bg-light-subtle">
                                                                                    <td class="text-center"> 
                                                                                        {{index + 1}}
                                                                                    </td>
                                                                                    <td>
                                                                                        <h5 class="fs-12 mb-0">{{list.testname}}</h5>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <h5 class="fs-12 mb-0">{{list.method}}</h5>
                                                                                        <p class="fs-11 text-muted mb-0">{{list.reference}}</p>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <h5 class="fs-12 mb-0">{{list.fee}}</h5>
                                                                                        <span v-if="list.addfee" class="text-muted fs-11">(+ {{list.addfee.total}} fee)</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <span :class="'badge '+list.status.color+' '+list.status.others">{{list.status.name}}</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <b-button @click="openAdditional(list.additional,list.id)" v-if="list.additional != null && list.addfee == null" variant="soft-success" class="me-1" v-b-tooltip.hover title="Add" size="sm">
                                                                                            <i class="ri-add-circle-fill align-bottom"></i>
                                                                                        </b-button>
                                                                                        <b-button @click="openViewAnalysis(list)" variant="soft-info" class="me-1" v-b-tooltip.hover title="View" size="sm">
                                                                                            <i class="ri-eye-fill align-bottom"></i>
                                                                                        </b-button>
                                                                                        <b-button v-if="selected.status.name == 'Pending' || selected.status.name == 'For Payment' && analyses.length > 1" @click="openDeleteAnalysis(list)" variant="soft-danger" v-b-tooltip.hover title="Delete" size="sm">
                                                                                            <i class="ri-delete-bin-fill align-bottom"></i>
                                                                                        </b-button>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tbody v-else>
                                                                                <tr>
                                                                                    <td colspan="5" class="text-center">No analysis found</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </template>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div v-if="menu == 'TSRs'">t</div>
                                            <div v-if="menu == 'Cycles'">c</div>
                                        </div>
                                    </transition>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </BRow>
</template>
<Delete ref="delete"/>
<Sample ref="sample"/>
<Additional ref="additional"/>
<Analysis @success="mark = false" ref="analysis"/>
<Service :services="services" ref="service"/>
<script>
import Delete from '../Modals/Main/Delete.vue';
import Sample from '../Modals/Main/Sample.vue';
import Service from '../Modals/Main/Service.vue';
import Analysis from '../Modals/Main/Analysis.vue';
import Additional from '../Modals/Main/Additional.vue';
export default {
    components: { Sample, Service, Delete, Analysis, Additional },
    props:['selected','services','analyses','laboratories'],
    data(){
        return {
            currentUrl: window.location.origin,
            samples : [],
            sample: {},
            showAnalyses: true,
            view: false,
            mark: false,
            menus: ['Sample','Cycles','TSRs'],
            index: null,
        }
    },
    watch: {
        mark(){
            if(this.mark){
                this.selected.samples.forEach(item => {
                    item.selected = true;
                    this.samples.push(item.id);
                });
            }else{
                this.selected.samples.forEach(item => {
                    item.selected = false;
                });
                this.samples = [];
            }
        },
        'selected.samples': {
            deep: true,
            handler() {
                this.samples = this.selected.samples
                .filter(item => item.selected)
                .map(selectedItem => selectedItem.id);
            }
        }
    },
    methods: { 
        openService(){
            this.$refs.service.show(this.selected.id);
        }, 
        openAdditional(data,id){
            this.$refs.additional.show(data,id,this.selected.id);
        },       
        openSample(){
            this.mark = false;
            this.$refs.sample.show(this.selected.id,this.selected.laboratory.id);
        },
        openSampleEdit(data){
            this.$refs.sample.edit(this.selected.id,this.selected.laboratory.id,data);
        },        
        openSampleCopy(sample){
            this.mark = false;
            this.$refs.sample.copy(this.selected.id,this.selected.laboratory.id,sample);
        },
        openSampleDelete(data){
            this.$refs.delete.show(data,this.selected.id,'sample');
        },
        openAnalysis(){
            (this.samples.length > 0) ? this.$refs.analysis.show(this.samples,this.selected.laboratory.id) : '';
        },
        openAnalysisDelete(data){
            this.$refs.delete.show(data,this.selected.id,'analysis');
        },
        openQr(data){
            window.open('/samples?option=qrcode&id='+data.qr);
        },
    }
}
</script>