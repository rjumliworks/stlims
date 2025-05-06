<template>
    <Head title="Dashboard"/>
    <PageHeader title="Dashboard" pageTitle="Menu" />
    <b-row class="g-3">
        <div class="col-md-3">
            <div class="card shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-account-circle-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">My Task & Reminders</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Highlights urgency and updates</p>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </div>
                <div class="card-body border-bottom bg-white">
                    <p class="mb-0 text-primary fs-12 fw-semibold">Laboratory Task Monitoring</p>
                </div>
                <div class="card bg-white border-bottom shadow-none mb-0" style="height: calc(100vh - 343px); overflow: auto;">
                    <ul class="list-group list-group-flush border-dashed mb-n4 mt-n3 p-3">
                        <li class="list-group-item px-0" v-for="(list,index) in dropdowns.reminders" v-bind:key="index">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <i :class="list.icon+' '+list.color"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0 fs-12">{{list.name}}</h6>
                                    <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mt-2 me-2 fs-12">{{list.count}}</h6>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <hr class="text-muted"/>
                        <p class="ms-3 mb-0 text-primary fs-12 fw-semibold">Collection Summary</p>
                    <hr class="text-muted mb-2"/>

                    <ul class="list-group list-group-flush border-dashed mb-n4 mt-n4 p-3">
                        <li class="list-group-item px-0" @click="filterReminder(list)" v-for="(list,index) in dropdowns.info1" v-bind:key="index" style="cursor: pointer;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <i :class="list.icon+' '+list.color"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0 fs-12" :class="(isActive(list.name)) ? 'text-primary fw-semibold' : ''">{{list.name}}</h6>
                                    <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mt-2 fs-11">{{formatMoney(list.total)}}</h6>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <hr class="text-muted mb-2 mt-2"/>

                    <ul class="list-group list-group-flush border-dashed mb-n3 mt-n4 p-3">
                        <li class="list-group-item px-0" @click="filterReminder(list)" v-for="(list,index) in dropdowns.info2" v-bind:key="index" style="cursor: pointer;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <i :class="list.icon+' '+list.color"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0 fs-12" :class="(isActive(list.name)) ? 'text-primary fw-semibold' : ''">{{list.name}}</h6>
                                    <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mt-2 fs-11">{{formatMoney(list.total)}}</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <Lists :dropdowns="dropdowns" ref="sample"/>
        </div>
    </b-row>
</template>
<script>
import Lists from './Lists.vue';
import flatPickr from "vue-flatpickr-component";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, flatPickr, Lists },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            date: this.dropdowns.info.date,
            config: { mode: "range"},
            chartOptions: {
                chart: { type: 'area', height: 40, sparkline: {enabled: true}},
                stroke: { curve: 'smooth', width: 2, },
                dataLabels: {  enabled: false },
                colors: ['#03114B'],
                fill: { type: 'gradient',gradient: {shadeIntensity: 1,inverseColors: false,opacityFrom: 0.45, opacityTo: 0.05,stops: [25, 100, 100, 100] }, },
                tooltip: { fixed: { enabled: false }, x: { show: true },marker: { show: false } }
            },
            activeList: null
        }
    },
    methods: {
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        filterStatus(status){
            this.$refs.lists.filterStatus(status);
        },
        filterReminder(data){
            if(data == this.activeList){
                this.activeList = null;
            }else{
                this.activeList = data;
            }
            this.$refs.lists.filterReminder(data,this.activeList);
        },
        isActive(name) {
            return this.activeList === name;
        },
    }
    
}
</script>