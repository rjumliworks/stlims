<template>
<Head title="Personnels"/>
    <PageHeader title="Personnel Management" pageTitle="List" />
    <BRow>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
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
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Analysts</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">A comprehensive overview of each analyst’s activity within the system, including test counts, completed analyses, and total test costs.</p>
                        </div>
                        <div class="flex-shrink-0" style="width: 45%;">
                        </div>
                    </div>
                </div>
                <div class="car-body bg-white border-bottom shadow-none">
                    <b-row class="mb-2 ms-1 me-1" style="margin-top: 12px;">
                        <b-col lg>
                            <div class="input-group mb-1">
                                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                <input type="text" v-model="filter.keyword" placeholder="Search sampletype, testname, method or fee" class="form-control" style="width: 30%;">
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :searchable="true" placeholder="Select Laboratory" />
                                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                                    <i class="bx bx-refresh search-icon"></i>
                                </span>
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-add-circle-fill align-bottom me-1"></i> Request
                                </b-button>
                            </div>
                        </b-col>
                    </b-row>
                </div>
                <div class="card bg-white border-bottom shadow-none" no-body>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <ul class="nav nav-tabs nav-tabs-custom nav-primary fs-12" role="tablist">
                                <li class="nav-item">
                                    <BLink @click="viewStatus(null,null)" class="nav-link py-3 active" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-apps-2-fill me-1 align-bottom"></i> All Personnels
                                    </BLink>
                                </li>
                                <!-- <li class="nav-item">
                                    <BLink @click="viewStatus(1,33)" class="nav-link py-3" :class="(this.index == 1) ? 'text-danger active' : ''" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-lock-2-fill me-1 align-bottom"></i> Suspended Testservices <BBadge v-if="counts[index] > 0" :class="list.color" class="align-middle ms-1">{{counts[index]}}</BBadge>
                                    </BLink>
                                </li>
                                <li class="nav-item">
                                    <BLink @click="viewStatus(2,31)" class="nav-link py-3" :class="(this.index == 2) ? 'text-warning active' : ''" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-time-fill me-1 align-bottom"></i> Pending Testservices <BBadge v-if="counts[index] > 0" :class="list.color" class="align-middle ms-1">{{counts[index]}}</BBadge>
                                    </BLink>
                                </li> -->
                                <li class="nav-item" v-for="(list,index) in dropdowns.laboratories" v-bind:key="index">
                                    <BLink @click="viewLaboratory(index,list.value)" class="nav-link py-3" :class="(this.index == index) ? list.others+' active' : ''" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        {{ list.name }}
                                        <!-- <i :class="icons[index]" class="me-1 align-bottom"></i>
                                        {{ list.name }} <BBadge v-if="counts[index] > 0" :class="list.color" class="align-middle ms-1">{{counts[index]}}</BBadge> -->
                                    </BLink>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white rounded-bottom">
                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 409px); overflow: auto;">
                        <table class="table align-middle table-centered mb-0">
                            <thead class="table-light">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <!-- <th style="width: 20%;">Laboratory</th> -->
                                    <th>Name</th>
                                    <th style="width: 15%;" class="text-center">Ongoing Test</th>
                                    <th style="width: 15%;" class="text-center">Tests Performed</th>
                                    <th style="width: 15%;" class="text-center">Total Test Cost</th>
                                    <th style="width: 15%;" class="text-center">Status</th>
                                    <th style="width: 5%;" ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in lists" v-bind:key="index">
                                    <td class="text-center"> 
                                        {{ index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                                        <p class="fs-12 text-muted mb-0"> <span class="text-muted fs-11">{{list.laboratory.name}}</span></p>
                                    </td>
                                    <td class="text-center fs-12">{{list.ongoing_test}}</td>
                                    <td class="text-center fs-12">{{list.tests_performed}}</td>
                                    <td class="text-center fs-12">{{formatMoney(list.total_cost)}}</td>
                                    <td class="text-center fs-12">
                                        <span v-if="list.is_active" class="badge bg-success">Active</span>
                                        <span v-else class="badge bg-danger">Inactive</span>
                                    </td>
                                    <td class="text-end">
                               
                                        <b-button @click="openView(list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
                                            <i class="ri-eye-fill align-bottom"></i>
                                        </b-button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BRow>
    <Performance ref="performance"/>
</template>
<script>
import _ from 'lodash';
import Performance from './Modals/Performance.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Multiselect, Performance },
    props: ['counts','dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
                laboratory: null,
                status: null
            },
            index: null,
            icons: [
                'ri-information-line',
                'ri-checkbox-circle-line',
                'ri-indeterminate-circle-line',
                'ri-close-circle-line'
            ],
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.laboratory"(newVal){
            this.fetch();
        },
        "filter.agency"(newVal){
            this.fetch();
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/personnels';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    laboratory: this.filter.laboratory,
                    status: this.filter.status,
                    count: 10,
                    option: 'lists'
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data;        
                }
            })
            .catch(err => console.log(err));
        },
        openView(data){
            this.$refs.performance.show(data);
        },
        viewLaboratory(index,id){
            this.index = index;
            this.filter.laboratory = id;
        },
        formatMoney(value) {
            let val = (value / 1).toFixed(2).replace(',', '.');
            return '₱' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
    }
}
</script>