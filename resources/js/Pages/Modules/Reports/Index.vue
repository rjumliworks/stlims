<template>
    <Head title="Reports"/>
    <PageHeader title="Reports" pageTitle="List" />
   
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Request" class="form-control" style="width: 40%;">
                <Multiselect class="white" style="width: 15%;" :options="types" v-model="laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" />
                <Multiselect class="white" style="width: 15%;" :options="months" v-model="month" label="name" :allow-empty="false" :searchable="true" placeholder="Select Month" />
                <Multiselect class="white" style="width: 15%;" :options="years" v-model="year" label="name" :searchable="true" placeholder="Select Year" />
                <!-- <b-button @click="refresh()" type="button" variant="">
                    <i class="bx bx-refresh"></i> 
                </b-button> -->
                <b-button @click="openReport()" type="button" variant="primary">
                    Reports
                </b-button>
            </div>
        </b-col>
    </b-row>
    <hr class="text-muted"/>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height: 2.5rem; width: 2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="bx bxs-calendar-week text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">List of TSR's, Samples and Analyses</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Extract all TSR data
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="d-flex flex-column">
                        <div class="mt-auto">
                            <div class="d-flex mb-0">
                                <div class="flex-grow-1">
                                    <div class="text-muted fs-13"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{month}} {{year}}</div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-n1 mt-n1">
                                        <b-button @click="openExcel('tsr')" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openView('tsr')" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height: 2.5rem; width: 2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="bx bxs-calendar-week text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">List of OP and OR</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Data Combined from OP and OR
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="d-flex flex-column">
                        <div class="mt-auto">
                            <div class="d-flex mb-0">
                                <div class="flex-grow-1">
                                    <div class="text-muted fs-13"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{info.month}} {{info.year}}</div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-n1 mt-n1">
                                        <b-button @click="openExcel('op')" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openView('op')" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height: 2.5rem; width: 2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="bx bxs-calendar-week text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">RSTL Data</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A document confirming payment received
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="d-flex flex-column">
                        <div class="mt-auto">
                            <div class="d-flex mb-0">
                                <div class="flex-grow-1">
                                    <div class="text-muted fs-13"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{month}} {{year}}</div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-n1 mt-n1">
                                        <b-button @click="openExcel('rstl')" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openView('rstl')" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height: 2.5rem; width: 2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="bx bxs-calendar-week text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Reconciliation of RSTL and Finance</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Identifying and resolving discrepancies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="d-flex flex-column">
                        <div class="mt-auto">
                            <div class="d-flex mb-0">
                                <div class="flex-grow-1">
                                    <div class="text-muted fs-13"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{month}} {{year}}</div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-n1 mt-n1">
                                        <b-button @click="openExcel('recon')" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openView('recon')" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-n4">
            <hr class="text-muted"/>
        </div>

        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-trophy-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Accomplishment Report</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A summary of tasks completed, analyses conducted, and milestones achieved within a specific reporting period, showcasing productivity, efficiency, and performance metrics</p>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white border-bottom">
                    <div class="d-flex flex-column">
                        <div class="mt-auto">
                            <div class="d-flex mb-0">
                                <div class="flex-grow-1">
                                    <div class="text-muted fs-13">
                                        <i class="ri-calendar-event-fill me-1 align-bottom"></i>{{ month }} {{ year }}
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-n1 mt-n1">
                                        <button @click="openTop('samples')" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View Excel">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </button>
                                        <button class="btn btn-sm btn-soft-info" type="button" data-original-title="View PDF">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-bordered align-middle mb-3">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 20%;">Laboratory</th>
                                    <th style="width: 8%;" class="text-center">No. of Requests</th>
                                    <th style="width: 8%;" class="text-center">No. of Samples</th>
                                    <th style="width: 8%;" class="text-center">No. of Analyses</th>
                                    <th style="width: 15%;" class="text-center">Actual Fees Collected</th>
                                    <th style="width: 12%;" class="text-center">Gratis</th>
                                    <th style="width: 12%;" class="text-center">Discount</th>
                                    <th style="width: 12%;" class="text-center">Gross</th>
                                    <th style="width: 4%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in laboratories" v-bind:key="index" >
                                    <td> {{ list[0] }}</td>
                                    <td class="text-center"> {{ list[1] }}</td>
                                    <td class="text-center"> {{ list[2] }}</td>
                                    <td class="text-center"> {{ list[3] }}</td>
                                    <td class="text-center"> {{ list[4] }}</td>
                                    <td class="text-center"> {{ list[5] }}</td>
                                    <td class="text-center"> {{ list[6] }}</td>
                                    <td class="text-center"> {{ list[7] }}</td>
                                    <td class="text-center">
                                        <b-button @click="openAccomplishmentExcel(list[8])" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                            <i class="ri-file-excel-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openAccomplishmentView(list[8])" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="table-light fs-12" v-for="(list,index) in total" v-bind:key="index" >
                                    <th> {{ list[0] }}</th>
                                    <th class="text-center"> {{ list[1] }}</th>
                                    <th class="text-center"> {{ list[2] }}</th>
                                    <th class="text-center"> {{ list[3] }}</th>
                                    <th class="text-center"> {{ list[4] }}</th>
                                    <th class="text-center"> {{ list[5] }}</th>
                                    <th class="text-center"> {{ list[6] }}</th>
                                    <th class="text-center"> {{ list[7] }}</th>
                                    <th class="text-center"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="table-responsive">
                <table class="table table-nowrap table-bordered align-middle mb-0">
                    <thead class="table-light thead-fixed">
                        <tr class="fs-11">
                            <th style="width: 20%;">Laboratory</th>
                            <th style="width: 8%;" class="text-center">No. of Requests</th>
                            <th style="width: 8%;" class="text-center">No. of Samples</th>
                            <th style="width: 8%;" class="text-center">No. of Analyses</th>
                            <th style="width: 15%;" class="text-center">Actual Fees Collected</th>
                            <th style="width: 12%;" class="text-center">Gratis</th>
                            <th style="width: 12%;" class="text-center">Discount</th>
                            <th style="width: 12%;" class="text-center">Gross</th>
                            <th style="width: 4%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in laboratories" v-bind:key="index" >
                            <td> {{ list[0] }}</td>
                            <td class="text-center"> {{ list[1] }}</td>
                            <td class="text-center"> {{ list[2] }}</td>
                            <td class="text-center"> {{ list[3] }}</td>
                            <td class="text-center"> {{ list[4] }}</td>
                            <td class="text-center"> {{ list[5] }}</td>
                            <td class="text-center"> {{ list[6] }}</td>
                            <td class="text-center"> {{ list[7] }}</td>
                            <td class="text-center">
                                <b-button @click="openAccomplishmentExcel(list[8])" variant="soft-success" class="me-1" v-b-tooltip.hover title="View Excel" size="sm">
                                    <i class="ri-file-excel-fill align-bottom"></i>
                                </b-button>
                                <b-button @click="openAccomplishmentView(list[8])" variant="soft-info" v-b-tooltip.hover title="View PDF" size="sm">
                                    <i class="ri-printer-fill align-bottom"></i>
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="table-light fs-12" v-for="(list,index) in total" v-bind:key="index" >
                            <th> {{ list[0] }}</th>
                            <th class="text-center"> {{ list[1] }}</th>
                            <th class="text-center"> {{ list[2] }}</th>
                            <th class="text-center"> {{ list[3] }}</th>
                            <th class="text-center"> {{ list[4] }}</th>
                            <th class="text-center"> {{ list[5] }}</th>
                            <th class="text-center"> {{ list[6] }}</th>
                            <th class="text-center"> {{ list[7] }}</th>
                            <th class="text-center"></th>
                        </tr>
                    </tfoot>
                </table>
            </div> -->
        </div>

        

    </div>
</template>
<script>
import _ from 'lodash';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect },
    props:['years','info','types'],
    data(){
        return {
            currentUrl: window.location.origin,
            month: this.info.month,
            year: this.info.year,
            laboratories: [],
            samples: [],
            analyses: [],
            laboratory: null,
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    watch: {
        "laboratory"(newVal){
            this.fetch();
        },
        "month"(newVal){
            this.fetch();
        },
        "year"(newVal){
            this.fetch();
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        fetch(){
            axios.get('/reports',{
                params : {
                    month: this.month,
                    year: this.year,
                    option: 'lists'
                }
            })
            .then(response => {
                this.laboratories = response.data.laboratories.lists; 
                this.total = response.data.laboratories.footer;         
            })
            .catch(err => console.log(err));
        },
        openView(type){
            window.open('/reports?type='+type+'&month='+this.month+'&year='+this.year+'&option=accounting&subtype=pdf'+'&laboratory='+this.laboratory);
        },
        openExcel(type){
            window.open('/reports?type='+type+'&month='+this.month+'&year='+this.year+'&option=accounting&subtype=excel'+'&laboratory='+this.laboratory);
        },
        openAccomplishmentView(id){
            window.open('/reports?option=pdf&month='+this.month+'&year='+this.year+'&laboratory='+id);
        },
        openAccomplishmentExcel(id){
            window.open('/reports?option=excel&month='+this.month+'&year='+this.year+'&laboratory='+id);
        },
        openReport(){
            window.open('/reports?option=reports&month='+this.month+'&year='+this.year+'&laboratory='+this.laboratory);
        },
        openTop(type){
            window.open('/reports?year='+this.year+'&option='+type+'&laboratory='+this.laboratory);
        },
    }
}
</script>