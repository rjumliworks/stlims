<template>
    <Head title="Dashboard"/>
    <PageHeader title="Dashboard" pageTitle="Menu" />
    <b-row class="g-3">
        <div class="col-12 mb-3 mt-2">
            <div class="d-flex flex-lg-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-14 mb-0">{{dropdowns.info.year}} Summary View</h4>
                    <p class="text-muted mb-0">Here's what's happening with the laboratory for year of {{dropdowns.info.year}}.</p>
                </div>
                <div class="mt-3 mt-lg-0">
                    <form action="javascript:void(0);">
                        <div class="row g-3 mb-0 align-items-center">
                            <div class="col-sm-auto">
                                <div class="input-group">
                                    <select v-model="laboratory" class="form-select" aria-label="Default select example">
                                        <option :value="null">All Laboratory</option>
                                        <option :value="list" v-for="list in dropdowns.info.laboratories" v-bind:key="list.value">{{list.name}}</option>
                                    </select>
                                    <input type="text" v-model="year" placeholder="Search Request" class="form-control">
                                    <div class="input-group-text bg-primary border-primary text-white">
                                        <i class="ri-calendar-2-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <b-col lg="4" v-for="(item, index) of counts" :key="index" class="mt-0" style="cursor: pointer;" @click="openView(item.name)">
            <b-card no-body :class="item.color" >
                <b-card-body>
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i :class="`bx ${item.icon} ${item.color} fs-24 align-middle`"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                {{ item.name }}
                            </p>
                            <h4 class="mb-0">
                                <span class="counter-value">{{formatMoney(item.info.total)}}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 align-self-end">
                            <apexchart class="apex-charts" height="40" width="100" type="area" dir="ltr" :series="item.info.series" :options="chartOptions"></apexchart>
                        </div>
                    </div>
                </b-card-body>
            </b-card>
        </b-col>
        <b-col lg="12" class="mt-0">
            <div class="card bg-light-subtle shadow-none border">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Technical Service</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A record of all submitted document requests, showing their status and details for easy tracking.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="input-group mb-1">
                                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                <input type="text" placeholder="Search Request" class="form-control" style="width: 40%;">
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
                                    <BLink @click="openView(null)" class="nav-link py-3 active" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-apps-2-line me-1 align-bottom"></i> All Transactions
                                    </BLink>
                                </li>
                                <li class="nav-item">
                                    <BLink @click="openView('Collected Amount')" class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-checkbox-circle-line me-1 align-bottom"></i>Collected Transactions
                                    </BLink>
                                </li>
                                 <li class="nav-item">
                                    <BLink @click="openView('Uncollected Amount')" class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-close-circle-line me-1 align-bottom"></i>Uncollected Transactions
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
                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 550px)" >
                        <table class="table align-middle table-centered mb-0">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <th>Customer</th>
                                    <th style="width: 10%;" class="text-center">Status</th>
                                    <th style="width: 10%;" class="text-center">Total</th>
                                    <!-- <th style="width: 7%;" ></th> -->
                                </tr>
                            </thead>
                            <tbody class="table-white">
                                <tr class="ribbon-box" v-for="(list,index) in lists" v-bind:key="index" @click="selectRow(index)">
                                     
                                    <td class="text-center"> 
                                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 class="fs-13 mb-0 fw-semibold text-primary">{{list.customer}}</h5>
                                        <p class="fs-12 text-muted mb-0">{{list.code}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span :class="'badge '+list.payment.status.color+' '+list.payment.status.others">{{list.payment.status.name}}</span>
                                    </td>
                                    <td class="text-center">{{list.payment.total}}</td>
                                    <!-- <td class="text-end">
                                        <b-button @click="openPrint(list.qr)" variant="success" class="me-1" v-b-tooltip.hover title="Print" size="sm">
                                            <i class="ri-printer-fill align-bottom"></i>
                                        </b-button>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
                </div>
            </div>
        </b-col>
    </b-row>
</template>
<script>
import flatPickr from "vue-flatpickr-component";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, flatPickr },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            config: { mode: "range"},
            chartOptions: {
                chart: { type: 'area', height: 40, sparkline: {enabled: true}},
                stroke: { curve: 'smooth', width: 2, },
                dataLabels: {  enabled: false },
                colors: ['#03114B'],
                fill: { type: 'gradient',gradient: {shadeIntensity: 1,inverseColors: false,opacityFrom: 0.45, opacityTo: 0.05,stops: [25, 100, 100, 100] }, },
                tooltip: { fixed: { enabled: false }, x: { show: true },marker: { show: false } }
            },
            year: this.dropdowns.info.year,
            type: null,
            laboratory: null,
            activeList: null,
            counts: [],
            lists: [],
            meta: {},
            links: {},
        }
    },
    created(){
        this.fetchCount();
        this.fetch();
    },
    watch: {
        laboratory(newVal) {
            this.fetchCount();
            this.fetch();
        },
    },
    methods: {
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        openView(name){
            this.type = name;
            this.fetchCount();
            this.fetch();
        },
        fetchCount(page_url){
            page_url = page_url || '/top';
            axios.get(page_url,{
                params : {
                    type: this.type,
                    year: this.year,
                    laboratory: this.laboratory,
                    option: 'count'
                }
            })
            .then(response => {
                if(response){
                    this.counts = response.data;        
                }
            })
            .catch(err => console.log(err));
        },
        fetch(page_url){
            page_url = page_url || '/top';
            axios.get(page_url,{
                params : {
                    type: this.type,
                    year: this.year,
                    laboratory: this.laboratory,
                    count: 10,
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
    }
    
}
</script>