<template>
<Head title="Test Reports"/>
    <PageHeader title="Test Reports" pageTitle="Laboratory" />
    <BRow>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-flask-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Test Reports</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Register incoming samples and monitor their status throughout the testing process.</p>
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
                                <input type="text" v-model="filter.keyword" placeholder="Search Report number, TSR Code, Sample Code" class="form-control" style="width: 30%;">
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.analysts" v-model="filter.analyst" label="name" :searchable="true" placeholder="Select Analyst" />
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :searchable="true" placeholder="Select Laboratory" />
                                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                                    <i class="bx bx-refresh search-icon"></i>
                                </span>
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-add-circle-fill align-bottom me-1"></i> Generate
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
                                    <BLink @click="viewStatus('with')" class="nav-link py-3 active" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-checkbox-circle-line me-1 align-bottom"></i> All Report Numbers
                                    </BLink>
                                </li>
                                <li class="nav-item">
                                    <BLink @click="viewStatus('without')" class="nav-link py-3" :class="(this.index == 1) ? 'text-danger active' : ''" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-close-circle-line me-1 align-bottom"></i> Samples w/out Report No. <BBadge v-if="count > 0" class="bg-danger align-middle ms-1">{{count}}</BBadge>
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
                    <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 465px); overflow: auto;">
                        <table class="table align-middle table-centered mb-0">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <th>Report Number</th>
                                    <th style="width: 15%;" class="text-center">Sample Code</th>
                                    <th style="width: 20%;" class="text-center">TSR Code</th>
                                    <th style="width: 20%;" class="text-center">Analyst</th>
                                    <th style="width: 15%" class="text-center">Report Date</th>
                                    <th style="width: 7%;" ></th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in lists" v-bind:key="index" @click="selectRow(index)">
                                    <td class="text-center"> 
                                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 v-if="list.code" class="fs-12 mb-0 fw-semibold text-primary">{{list.code}}</h5>
                                        <p v-else class="fs-12 mb-0  text-muted">Not yet set</p>
                                    </td>
                                    <td class="text-center">{{list.sample_code}}</td>
                                    <td class="text-center">{{list.tsr_code}}</td>
                                    <td class="text-center">{{list.user}}</td>
                                    <td class="text-center">{{list.created_at}}</td>
                                    <td class="text-end">
                                        <b-button @click="openView(list)" variant="soft-primary" v-b-tooltip.hover title="View" size="sm">
                                            <i class="ri-eye-fill align-bottom"></i>
                                        </b-button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
                </div>
            </div>
        </div>
    </BRow>
    <Create @update="fetch()" ref="create"/>
    <View ref="view"/>
</template>
<script>
import _ from 'lodash';
import View from './Modals/View.vue';
import Create from './Modals/Create.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, View, Create },
    props: ['dropdowns','count'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
                laboratory: null,
                analyst: null,
                status: 'with'
            },
            index: null,
            selectedIndex: null,
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.laboratory"(newVal){
            this.fetch();
        },
        "filter.analyst"(newVal){
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
            page_url = page_url || '/testreports';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    laboratory: this.filter.laboratory,
                    status: this.filter.status,
                    analyst: this.filter.analyst,
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
        openCreate(){
            this.$refs.create.show();
        },
        openView(data){
            this.$refs.view.show(data);
        },
        viewStatus(status){
            this.filter.status = status;
            this.fetch();
        },
        refresh(){
            this.filter.keyword = null;
            this.filter.analyst = null;
            this.filter.laboratory = null;
            this.fetch();
        }
    }
}
</script>