<template>
    <Head title="Top Insights"/>
    <PageHeader title="Top Insights" pageTitle="Menu" />
    <BRow>
        <div class="col-md-12 mb-n4">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Daily Accomplishment Insights</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A summary of tasks completed, analyses conducted, and milestones achieved within a specific reporting period, showcasing productivity, efficiency, and performance metrics</p>
                        </div>
                        <div class="flex-shrink-0">
                            <input type="date" v-model="date" placeholder="Search Request" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white border-bottom">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-bordered align-middle mb-0">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 20%;">Laboratory</th>
                                    <th style="width: 9%;" class="text-center">No. of Requests</th>
                                    <th style="width: 9%;" class="text-center">No. of Samples</th>
                                    <th style="width: 9%;" class="text-center">No. of Analyses</th>
                                    <th style="width: 15%;" class="text-center">Actual Fees Collected</th>
                                    <th style="width: 12%;" class="text-center">Gratis</th>
                                    <th style="width: 12%;" class="text-center">Discount</th>
                                    <th style="width: 13%;" class="text-center">Gross</th>
                                </tr>
                            </thead>
                            <tbody class="fs-11">
                                <tr v-for="(list,index) in laboratories" v-bind:key="index" >
                                    <td> {{ list[0] }}</td>
                                    <td class="text-center"> {{ list[1] }}</td>
                                    <td class="text-center"> {{ list[2] }}</td>
                                    <td class="text-center"> {{ list[3] }}</td>
                                    <td class="text-center"> {{ list[4] }}</td>
                                    <td class="text-center"> {{ list[5] }}</td>
                                    <td class="text-center"> {{ list[6] }}</td>
                                    <td class="text-center"> {{ list[7] }}</td>
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
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </BRow>
    <hr class="text-muted"/>
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
                <b-button type="button" variant="primary"> Filter Data </b-button>
            </div>
        </b-col>
    </b-row>
    <hr class="text-muted"/>
    <BRow style="height: calc(100vh - 650px); overflow: auto;">
        <div class="col-md-4">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Top 10 Samples</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Showcasing our top 10 cumulative samples!</p>
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
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="text-muted table-light fs-11">
                                <tr>
                                    <th width="5%;"> #</th>
                                    <th width="80%;">Name</th>
                                    <th width="15%;" class="text-center" scope="col">Count</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in samples" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.name }}</td>
                                    <td class="text-center">{{list.count}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Top 10 Analysis</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Showcasing our top 10 cumulative analyses!</p>
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
                                        <button @click="openTop('analyses')" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View Excel">
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
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="text-muted table-light fs-11">
                                <tr>
                                    <th width="5%;"> #</th>
                                    <th width="80%;">Name</th>
                                    <th width="15%;" class="text-center" scope="col">Count</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in analyses" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.testservice.testname.name  }}</td>
                                    <td class="text-center">{{list.count}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Top 10 Customer Served</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Showcasing our top 10 cumulative customer served!</p>
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
                                        <button class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View Excel">
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
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="text-muted table-light fs-11">
                                <tr>
                                    <th width="5%;"> #</th>
                                    <th width="80%;">Name</th>
                                    <th width="15%;" class="text-center" scope="col">Count</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in customers" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.customer_name.name}} {{ (list.name == 'Main') ? '' : ' - '+list.name }}</td>
                                    <td class="text-center">{{list.tsrs_count}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BRow>
</template>
<script>
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['info','years','types'],
    components: { PageHeader, Multiselect },
    data(){
        return {
            currentUrl: window.location.origin,
            month: this.info.month,
            year: this.info.year,
            laboratories: [],
            samples: [],
            analyses: [],
            customers: [],
            laboratory: null,
            date: null,
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    created(){
        this.fetchTop();
        this.fetch();
    },
    watch: {
        "laboratory"(newVal){
            this.fetchTop();
        },
        "month"(newVal){
            this.fetchTop();
        },
        "year"(newVal){
            this.fetchTop();
        },
        "date"(newVal){
            this.fetch();
        }
    },
    methods: {
        fetch(){
            axios.get('/insights',{
                params : {
                    date: this.date,
                    option: 'daily'
                }
            })
            .then(response => {
                this.laboratories = response.data.lists; 
                this.total = response.data.footer;         
            })
            .catch(err => console.log(err));
        },
        fetchTop(){
            axios.get('/insights',{
                params : {
                    laboratory: this.laboratory,
                    month: this.month,
                    year: this.year,
                    option: 'tops'
                }
            })
            .then(response => {
                this.samples = response.data.samples; 
                this.analyses = response.data.analyses;   
                this.customers = response.data.customers; 
            })
            .catch(err => console.log(err));
        },
        openTop(type){
            window.open('/reports?year='+this.year+'&option='+type+'&laboratory='+this.laboratory);
        },
    }
}
</script>