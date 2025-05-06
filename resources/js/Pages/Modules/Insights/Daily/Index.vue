<template>
    <Head title="Daily Insights"/>
    <PageHeader title="Daily Insights" pageTitle="Menu" />
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Request" class="form-control" style="width: 70%;">
                <input type="date" v-model="date" placeholder="Search Request" class="form-control" style="width: 10%;">
                <b-button @click="fetch" type="button" class="" variant="">
                    <i class="bx bx-refresh"></i> 
                </b-button>
                <b-button type="button" variant="primary"> Filter Data </b-button>
            </div>
        </b-col>
    </b-row>
    <hr class="text-muted"/>
    <BRow>
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
                            <h5 class="mb-0 fs-14"><span class="text-body">Daily Accomplishment Insights</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A summary of tasks completed, analyses conducted, and milestones achieved within a specific reporting period, showcasing productivity, efficiency, and performance metrics</p>
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
</template>
<script>
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['info'],
    components: { PageHeader },
    data(){
        return {
            currentUrl: window.location.origin,
            date: this.info.date,
            laboratories: [],
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    created(){
        this.fetch();
    },
    watch: {
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
    }
}
</script>