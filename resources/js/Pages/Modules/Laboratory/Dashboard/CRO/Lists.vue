<template>
    <div class="row g-3">
        <div class="col-md-4 mb-n4" v-for="(item, index) of dropdowns.counts" :key="index"> 
            <div class="card shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i :class="`${item.icon} text-primary fs-24`"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14">
                                <span class="text-body">{{item.total}}</span>
                            </h5>
                            <p class="text-muted text-truncate-two-lines fs-12">{{ item.name }}</p>
                        </div>
                        <div class="flex-shrink-0">
                            <apexchart class="apex-charts" height="40" width="100" type="area" dir="ltr" :series="item.series" :options="chartOptions"></apexchart>
                        </div>
                    </div>
                </div>
                <div class="card-body  bg-white">
                    <p class="mb-0 text-primary fs-12 fw-semibold">Analyst Performance Summary</p>
                </div>
                
            </div>
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
        
    </div>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Multiselect, simplebar },
    props: ['laboratories','dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            name: 'Customer',
            filter: {
                keyword: null,
                overdue: null,
                released: null,
                unclaimed: null,
                laboratory: null,
                status: null,
                reminder: null,
            },
            config: { mode: "range"},
            chartOptions: {
                chart: { type: 'area', height: 40, sparkline: {enabled: true}},
                stroke: { curve: 'smooth', width: 2, },
                dataLabels: {  enabled: false },
                colors: ['#03114B'],
                fill: { type: 'gradient',gradient: {shadeIntensity: 1,inverseColors: false,opacityFrom: 0.45, opacityTo: 0.05,stops: [25, 100, 100, 100] }, },
                tooltip: { fixed: { enabled: false }, x: { show: true },marker: { show: false } }
            },
            date: null,
            laboratories: [],
            total: []
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        },
        "filter.laboratory"(newVal){
            if(newVal){
                this.name = newVal.name;
            }else{
                this.name = 'Customer';
            }
            this.checkSearchStr();
        },
        "date"(newVal){
            this.fetchDaily();
        }
    },
    created(){
        this.fetch();
        this.fetchDaily();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/tsrs';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    count: Math.floor((window.innerHeight-500)/58),
                    laboratory: (this.filter.laboratory) ? this.filter.laboratory.value : null,
                    status: this.filter.status,
                    reminder: this.filter.reminder,
                    sort: 'asc',
                    sortby: 'Requested At',
                    option: 'lists'
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));
        },
        fetchDaily(){
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
        filterStatus(status){
            this.name = status.name+' Request';
            this.filter.reminder = null;
            this.filter.laboratory = null;  
            this.filter.status = status.id;
            this.fetch();
        },
        filterReminder(reminder,status){
            if(status){
                this.name = reminder;
                this.filter.status = null;
                this.filter.laboratory = null;
                this.filter.reminder = reminder;
                this.fetch();
            }else{
                this.refresh();
            }
        },
        refresh(){
            this.name = 'Customer';
            this.filter.status = null;
            this.filter.reminder = null;
            this.filter.laboratory = null;
            this.fetch();
        },
        isDueApproaching(dueDate, status) {
            if (!dueDate || status !== 'Ongoing') return false; // Only check if status is 'Ongoing'
            const today = new Date();
            const due = new Date(dueDate);
            const diffTime = due - today;
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            return diffDays <= 5 && diffDays >= 0; // True if due date is within 5 days
        },
        isOverdue(dueDate,status) {
            if(status != 'Completed'){
                if (!dueDate) return false; // If no due date, return false
                const today = new Date();
                const due = new Date(dueDate);
                return due <= today; // True if the due date is today or earlier (overdue)
            }
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>