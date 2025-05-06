<template>
    <div class="card-header bg-light-subtle">
        <div class="d-flex mb-n3">
            <div class="flex-shrink-0 me-3">
                <div style="height:2.5rem;width:2.5rem;">
                    <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                        <i class="ri-flask-fill  text-primary fs-24"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1">
                <h5 class="mb-0 fs-14"><span class="text-body">List of Technical Service Requests</span></h5>
                <p class="text-muted text-truncate-two-lines fs-12">A record of all submitted document requests, showing their status and details for easy tracking.</p>
            </div>
            <div class="flex-shrink-0">
                <div class="input-group mb-1">
                    <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                    <input type="text" v-model="filter.keyword" placeholder="Search Request" class="form-control" style="width: 40%;">
                    <b-button type="button" variant="primary">
                        <i class="ri-add-circle-fill align-bottom me-1"></i> Search
                    </b-button>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white border-bottom shadow-none" no-body>
        <div class="d-flex">
            <div class="flex-grow-1">
                <!-- border border-dashed border-end-0 border-start-0 -->
                <ul class="nav nav-tabs nav-tabs-custom nav-success fs-12" role="tablist">
                    <li class="nav-item">
                        <BLink @click="viewStatus(10,null)" class="nav-link py-3 active text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">
                        <i class="ri-apps-2-line me-1 align-bottom"></i> All Requests
                        </BLink>
                    </li>
                </ul>
            </div>
            <div class="flex-shrink-0">
                <!-- <Pagination class="ms-3 me-3" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" /> -->
            </div>
        </div>
    </div>
    <div class="card-body bg-white rounded-bottom">
        <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 545px)" v-if="filter.reminder != 'For Release' && filter.reminder != 'Unclaimed Reports'">
            <table class="table align-middle table-centered mb-0">
                <thead class="table-light thead-fixed">
                    <tr class="fs-11">
                        <th style="width: 3%;"></th>
                        <th>{{name}}</th>
                        <th style="width: 10%;" class="text-center">Progress</th>
                        <th style="width: 10%;" class="text-center">Payment</th>
                        <th style="width: 10%;" class="text-center">Report</th>
                        <th style="width: 15%;" class="text-center">Due At</th>
                        <th style="width: 15%;" class="text-center">Status</th>
                        <th style="width: 7%;" ></th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    <tr v-for="(list,index) in lists" v-bind:key="index" >
                        <td class="text-center"> 
                            {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                        </td>
                        <td>
                            <h5 v-if="list.code" class="fs-13 mb-0 fw-semibold text-primary">{{list.code}}</h5>
                            <h5 v-else class="fs-13 mb-0 text-muted">Not yet available</h5>
                            <p class="fs-12 text-muted mb-0">{{list.customer.name}}</p>
                        </td>
                        <td>
                            <apexchart v-b-tooltip.hover :title="list.analyses+'%'" class="apex-charts" height="30" dir="ltr" :series="[list.analyses]" :options="{ ...chartOptions2 }"></apexchart>
                        </td>
                        <td class="text-center">
                            <i v-if="list.payment && list.payment.is_paid" class="ri-checkbox-circle-fill text-success fs-18" v-b-tooltip.hover :title="list.payment.status.name"></i>
                            <i v-else-if="list.payment && list.payment.is_free" class="ri-checkbox-circle-fill text-info fs-18" v-b-tooltip.hover title="Gratis"></i>
                            <i v-else-if="list.payment && list.payment.status " class="ri-close-circle-fill text-danger fs-18" v-b-tooltip.hover :title="list.payment.status.name"></i>
                        </td>
                        <td class="text-center">
                            <i class="ri-indeterminate-circle-line text-warning fs-18"></i>
                        </td>
                        <td class="text-center fs-12">
                            <span v-if="list.due_at">{{list.due_at}}</span>
                            <span class="text-muted" v-else>Not yet set</span>
                        </td>
                        <td class="text-center">
                            <span :class="'badge '+list.status.color">{{list.status.name}}</span>
                        </td>
                        <td class="text-end">
                            <a :href="`/tsrs/${list.qr}`" target="_blank">
                                <b-button variant="soft-info" class="me-1" v-b-tooltip.hover title="View" size="sm">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </b-button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 545px)" v-else>
            <table class="table table-nowrap align-middle mb-0">
            <thead class="table-light thead-fixed">
                <tr class="fs-11">
                    <th style="width: 3%;"></th>
                    <th>{{name}}</th>
                    <th class="text-center" style="width: 16%;">Conforme</th>
                    <th class="text-center" style="width: 15%;">Contact No.</th>
                    <th class="text-center" style="width: 18%;">Email</th>
                    <th style="width: 15%;" ></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(list,index) in lists" v-bind:key="index" class="fs-12">
                    <td class="text-center"> 
                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                    </td>
                    <td>
                        <h5 v-if="list.code" class="fs-13 mb-0 fw-semibold text-primary">{{list.code}}</h5>
                        <h5 v-else class="fs-13 mb-0 text-muted">Not yet available</h5>
                        <p class="fs-12 text-muted mb-0">{{list.customer}}</p>
                    </td>
                    <td class="text-center">{{ (list.conforme) ? list.conforme.name : '-' }}</td>
                    <td class="text-center">{{list.contact_no }}</td>
                    <td class="text-center">{{list.email }}</td>
                    <td class="text-end text-muted">
                        <!-- <b-button @click="openUpdate(list,index)" variant="primary" v-b-tooltip.hover title="Update" size="sm">
                            Forward to Releasing Officer
                        </b-button> -->
                        For Development
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-footer" v-if="this.filter.reminder != 'For Release' && this.filter.reminder != 'Unclaimed Reports'">
        <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
    </div>
    <div class="card-footer" v-else>
        <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetchRelease" :lists="lists.length" :links="links" :pagination="meta" />
    </div>
    <Release ref="release"/>
    <Update @update="updateData" ref="update"/>
</template>
<script>
import _ from 'lodash';
import Update from './Modals/Update.vue';
import Release from './Modals/Release.vue';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Multiselect, simplebar, Release, Update },
    props: ['laboratories'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            name: 'Customer',
            index: null,
            filter: {
                keyword: null,
                overdue: null,
                released: null,
                unclaimed: null,
                laboratory: this.laboratory,
                status: null,
                reminder: null,
            },
            chartOptions2: {
                chart: {type: "radialBar",sparkline: {enabled: true,},},
                dataLabels: { enabled: false,},
                plotOptions: {radialBar: {hollow: {margin: 0,size: "30%",},track: {margin: 1,},dataLabels: {show: false, },}, },
                colors: ["#099885"],
            },
            labValues: []
        }
    },
    mounted() {
        this.labValues = this.laboratories.map(lab => lab.value);
        this.fetch();
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
        }
    },

    methods: {
        checkSearchStr: _.debounce(function(string) {
            if(this.filter.reminder != 'For Release' && this.filter.reminder != 'Unclaimed Reports'){
                this.fetch();
            }else{
                this.fetchRelease();
            }
        }, 300),
        fetch(page_url){
            if(this.filter.reminder != 'For Release' && this.filter.reminder != 'Unclaimed Reports'){
                page_url = page_url || '/tsrs';
                axios.get(page_url,{
                    params : {
                        keyword: this.filter.keyword,
                        count: 10, //Math.floor((window.innerHeight-500)/58)
                        laboratory: (this.filter.laboratory) ? this.filter.laboratory : this.labValues,
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
            }
        },
        fetchRelease(page_url){
            page_url = page_url || '/release';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    count: 10, //Math.floor((window.innerHeight-500)/58)
                    type: this.filter.reminder,
                    laboratory: (this.filter.laboratory) ? this.filter.laboratory.value : null,
                    option: 'filter'
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
        openRelease(){
            this.$refs.release.show();
        },
        filterStatus(status){
            this.name = status.name+' Request';
            this.filter.reminder = null;
            this.filter.laboratory = null;  
            this.filter.status = status.id;
            this.fetch();
        },
        filterReminder(reminder,status,laboratory){
            if(status){
                this.name = reminder;
                this.filter.status = null;
                this.filter.laboratory = laboratory;
                this.filter.reminder = reminder;
                if(this.filter.reminder != 'For Release' && this.filter.reminder != 'Unclaimed Reports'){
                    this.fetch()
                }else{
                    this.fetchRelease();
                } 
            }else{
                this.refresh();
            }
        },
        updateData(data){
            (data) ? this.filter.laboratory = data : this.filter.laboratory = null;
            this.fetch();
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
        openUpdate(data,index){
            this.index = index;
            this.$refs.update.show(data);
        }
    }
}
</script>