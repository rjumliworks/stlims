<template>
    <Head title="Users"/>
        <PageHeader title="User Management" pageTitle="List" />
        <BRow>
            <div class="col-md-12">
                <div class="card bg-light-subtle shadow-none border">
                    <div class="card-header bg-light-subtle">
                        <div class="d-flex mb-n3">
                            <div class="flex-shrink-0 me-3">
                                <div style="height:2.5rem;width:2.5rem;">
                                    <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                        <i class="ri-team-fill text-primary fs-24"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fs-14"><span class="text-body">List of Users</span></h5>
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
                                    <input type="text" v-model="filter.keyword" placeholder="Search User" class="form-control" style="width: 30%;">
                                    <Multiselect class="white" style="width: 17%;" :options="dropdowns.roles" v-model="filter.role" label="name" :searchable="true" placeholder="Select Role" />
                                    <Multiselect class="white" style="width: 17%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :searchable="true" placeholder="Select Laboratory" />
                                    <Multiselect class="white" style="width: 15%;" :options="dropdowns.agencies" v-model="filter.agency" label="short" :searchable="true" placeholder="Select Agency" />
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
                                        <i class="ri-apps-2-line me-1 align-bottom"></i> All Users
                                        </BLink>
                                    </li>
                                    <li class="nav-item">
                                        <BLink @click="viewStatus(null,null)" class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Active Users
                                        </BLink>
                                    </li>
                                    <li class="nav-item">
                                        <BLink @click="viewStatus(null,null)" class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ri-close-circle-line me-1 align-bottom"></i> Inactive Users
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
                                        <th style="width: 4%;"></th>
                                        <th>Name</th>
                                        <th style="width: 15%;" class="text-center">Laboratory</th>
                                        <th style="width: 15%;" class="text-center">Agency</th>
                                        <th style="width: 15%;" class="text-center">Email</th>
                                        <th style="width: 15%;" class="text-center">Status</th>
                                        <th style="width: 10%;"></th>
                                    </tr>
                                </thead>
                                <tbody class="table-white fs-12">
                                    <tr v-for="(list,index) in lists" v-bind:key="index" >
                                        <td>
                                            <div class="avatar-xs chat-user-img online">
                                                <img :src="list.avatar" alt="-" @error="setDefaultImage($event)" class="avatar-xs rounded-circle">
                                                <span v-if="list.is_active" class="user-status text-success"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                                            <p class="fs-12 text-muted mb-0">{{list.roles[0].role}}</p>
                                        </td>
                                        <td class="text-center fs-12">{{list.roles[0].laboratory}}</td>
                                        <td class="text-center fs-12">{{list.roles[0].agency}}</td>
                                        <td class="text-center fs-12">{{list.email}}</td>
                                        <td class="text-center fs-12">
                                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                                            <span v-else class="badge bg-danger">Inactive</span>
                                        </td>
                                        <td class="text-end">
                                            <b-button variant="soft-success" @click="openActivation('activation',list,index)" v-b-tooltip.hover title="Lock" size="sm" class="remove-list me-1">
                                                <i class="ri-lock-2-fill align-bottom"></i>
                                            </b-button>
                                            <b-button variant="soft-warning" @click="openActivation('verification',list,index)" v-b-tooltip.hover title="Verify" size="sm" class="remove-list me-1">
                                                <i class="ri-mail-send-fill align-bottom"></i>
                                            </b-button>
                                            <b-button variant="soft-primary" @click="openView(list,index)" v-b-tooltip.hover title="View" size="sm" class="edit-list">
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
        <Create :dropdowns="dropdowns" ref="create"/>
        <Activation @update="updateData" ref="activation"/>
    </template>
    <script>
    import _ from 'lodash';
    import Create from './Modals/Create.vue';
    import Activation from './Modals/Activation.vue';
    import Multiselect from "@vueform/multiselect";
    import PageHeader from '@/Shared/Components/PageHeader.vue';
    import Pagination from "@/Shared/Components/Pagination.vue";
    export default {
        components: { PageHeader, Pagination, Multiselect, Create, Activation },
        props: ['counts','dropdowns'],
        data(){
            return {
                currentUrl: window.location.origin,
                lists: [],
                meta: {},
                links: {},
                filter: {
                    keyword: null,
                    role: null,
                    agency: null,
                    laboratory: null
                },
                index: null,
                units: []
            }
        },
        watch: {
            "filter.role"(newVal){
                this.fetch();
            },
            "filter.agency"(newVal){
                this.fetch();
            },
            "filter.keyword"(newVal){
                this.checkSearchStr(newVal);
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
                page_url = page_url || '/users';
                axios.get(page_url,{
                    params : {
                        agency: this.filter.agency,
                        role: this.filter.role,
                        keyword: this.filter.keyword,
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
            openActivation(type,data,index){
                this.index = index;
                this.$refs.activation.show(type,data);
            },
            setDefaultImage(event) {
                event.target.src = '/images/avatars/avatar.jpg'; 
            },
            openCreate(){
                this.$refs.create.show();
            },
            updateData(data){
                this.lists[this.index] = data;
            }
        }
    }
    </script>