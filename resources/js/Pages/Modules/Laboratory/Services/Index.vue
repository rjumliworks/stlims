<template>
<Head title="Services"/>
    <PageHeader title="Service Management" pageTitle="List" />
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
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Test Services</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Shows all users with access to the application, along with their roles and permissions for managing system features</p>
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
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.agencies" v-model="filter.agency" label="short" :searchable="true" placeholder="Select Agency" />
                                <span @click="openUpload()" class="input-group-text" v-b-tooltip.hover title="Upload" style="cursor: pointer;"> 
                                    <i class="ri-upload-cloud-fill search-icon"></i>
                                </span>
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
                                    <i class="ri-apps-2-fill me-1 align-bottom"></i> All Testservices
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
                            <thead class="table-light">
                                <tr class="fs-11">
                                    <th style="width: 3%;"></th>
                                    <!-- <th style="width: 20%;">Laboratory</th> -->
                                    <th>Sampletype</th>
                                    <th style="width: 15%;" class="text-center">Testname</th>
                                    <th style="width: 30%;" class="text-center">Method</th>
                                    <th style="width: 10%;" class="text-center">Fee</th>
                                    <th style="width: 7%;" class="text-center">Status</th>
                                    <th style="width: 7%;" ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in lists" v-bind:key="index">
                                    <td class="text-center"> 
                                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 class="fs-13 mb-0 text-dark">{{list.sampletype.name}}</h5>
                                        <p class="fs-12 text-muted mb-0"> <span class="text-muted fs-11">{{list.agency.name}} - {{list.laboratory.name}}</span></p>
                                    </td>
                                    <!-- <td class="fs-12">{{list.sampletype.name}}</td> -->
                                    <td class="text-center fs-12">{{list.testname.name}}</td>
                                    <td class="text-center fs-12">{{ (list.method.method.short) ? list.method.method.short: list.method.method.name}}</td>
                                    <td class="text-center fs-12">{{list.method.fee}}</td>
                                    <td class="text-center">
                                        <span v-if="list.is_active" class="badge bg-success">Active</span>
                                        <span v-else class="badge bg-danger">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <b-button @click="openFee(list.id,list.fees,list.agency_id,)" variant="soft-warning" class="me-1" v-b-tooltip.hover title="Add Fee" size="sm">
                                            <i class="ri-add-circle-fill align-bottom"></i>
                                        </b-button>
                                        <b-button @click="openProfile(list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
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
    <Create @message="fetch()" :dropdowns="dropdowns" :region="region" ref="create"/>
    <Fee ref="fee"/>
    <Profile ref="profile"/>
    <Upload :dropdowns="dropdowns"  @update="fetch()" ref="upload"/>
</template>
<script>
import _ from 'lodash';
import Fee from './Modals/Fee.vue';
import Profile from './Modals/Profile.vue';
import Create from './Modals/Create.vue';
import Upload from './Modals/Upload.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Create, Fee, Profile, Upload },
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
                agency: null,
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
            page_url = page_url || '/services';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    laboratory: this.filter.laboratory,
                    agency: this.filter.agency,
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
        openFee(id,fee,lab){
            this.$refs.fee.show(id,fee,lab);
        },
        openProfile(data){
            this.$refs.profile.show(data);
        },
        openUpload(){
            this.$refs.upload.show();
        },
    }
}
</script>