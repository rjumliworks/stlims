<template>
<Head title="Quotations"/>
    <PageHeader title="Quotation Management" pageTitle="Laboratory" />
    <BRow>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-price-tag-3-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Quotations</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Generate and track quotations for lab services requested by customers.</p>
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
                                <input type="text" v-model="filter.keyword" placeholder="Search Quotation" class="form-control" style="width: 30%;">
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :searchable="true" placeholder="Select Laboratory" />
                                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                                    <i class="bx bx-refresh search-icon"></i>
                                </span>
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-add-circle-fill align-bottom me-1"></i> Create
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
                                    <i class="ri-apps-2-fill me-1 align-bottom"></i> All Users
                                    </BLink>
                                </li>
                                <li class="nav-item" v-for="(list,index) in dropdowns.statuses" v-bind:key="index">
                                    <BLink @click="viewStatus(index,list.value)" class="nav-link py-3" :class="(this.index == index) ? list.others+' active' : ''" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <i :class="icons[index]" class="me-1 align-bottom"></i>
                                        {{ list.name }} <BBadge v-if="counts[index] > 0" :class="list.color" class="align-middle ms-1">{{counts[index]}}</BBadge>
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
                                    <th></th>
                                    <th style="width: 25%;">Customer</th>
                                    <th style="width: 15%;" class="text-center">Laboratory</th>
                                    <th style="width: 15%;" class="text-center">Created By</th>
                                    <th style="width: 15%;" class="text-center">Created At</th>
                                    <th style="width: 10%;" class="text-center">Status</th>
                                    <th style="width: 10%;" class="text-center">Total</th>
                                    <th style="width: 10%;" ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in lists" v-bind:key="index" class="fs-12" :class="filter.status === null ? {
                                        'bg-success-subtle': list.status.name === 'Completed',
                                        'bg-warning-subtle': list.status.name === 'Pending',
                                        'bg-danger-subtle': list.status.name === 'Cancelled'
                                    } : ''">
                                    <td class="text-center"> 
                                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 v-if="list.code" class="fs-13 mb-0 fw-semibold text-primary">{{list.code}}</h5>
                                        <h5 v-else class="fs-13 mb-0 text-muted">Not yet available</h5>
                                        <p class="fs-12 text-muted mb-0">{{list.customer.name}}</p>
                                    </td>
                                    <td class="text-center">{{list.laboratory.name}}</td>
                                    <td class="text-center">{{list.received}}</td>
                                    <td class="text-center">{{list.created_at}}</td>
                                    <td class="text-center">
                                        <span :class="'badge '+list.status.color">{{list.status.name}}</span>
                                    </td>
                                    <td class="text-center fs-12">{{list.total}}</td>
                                    <td class="text-end">
                                        <a target="_blank" :href="`/quotations/${list.qr}`">
                                            <b-button :variant="(filter.status) ? 'soft-info' : 'info'" class="me-1" v-b-tooltip.hover title="View" size="sm">
                                                <i class="ri-eye-fill align-bottom"></i>
                                            </b-button>
                                        </a>
                                        <b-button @click="openEdit(list,index)" v-if="list.status.name == 'Pending' || list.status.name == 'Ongoing'" :variant="(filter.status) ? 'soft-warning' : 'warning'" class="me-1" v-b-tooltip.hover title="Update" size="sm">
                                            <i class="ri-pencil-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openCancel(list,index)" v-if="list.status.name == 'Pending'" :variant="(filter.status) ? 'soft-danger' : 'danger'" class="me-1" v-b-tooltip.hover title="Cancel" size="sm">
                                            <i class="ri-delete-bin-fill align-bottom"></i>
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
    <Cancel @update="updateData" ref="cancel"/>
    <Edit @update="updateData" :dropdowns="dropdowns" ref="edit"/>
    <Create @message="fetch()" :dropdowns="dropdowns" :region="region" ref="create"/>
</template>
<script>
import _ from 'lodash';
import Edit from './Modals/Edit.vue';
import Create from './Modals/Create.vue';
import Cancel from './Modals/Cancel.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Create, Cancel, Edit },
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
                'ri-wallet-3-line',
                'ri-indeterminate-circle-line',
                'ri-checkbox-circle-line',
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
            page_url = page_url || '/quotations';
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
        openEdit(data,index){
            this.index = index;
            this.$refs.edit.show(data);
        },
        openCancel(data,index){
            this.index = index;
            this.$refs.cancel.show(data);
        },
        updateData(data){
            this.lists[this.index] = data;
        },
        viewStatus(index,status){
            this.index = index;
            this.filter.status = status;
            this.fetch();
        },
    }
}
</script>