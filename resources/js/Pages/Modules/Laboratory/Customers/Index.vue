<template>
<Head title="Customers"/>
    <PageHeader title="Customer Management" pageTitle="List" />
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
                            <h5 class="mb-0 fs-14"><span class="text-body">List of Customers</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Manage client profiles, contact details, and their associated lab activities.</p>
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
                                <input type="text" v-model="filter.keyword" placeholder="Search Customer" class="form-control" style="width: 30%;">
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.sexs" v-model="filter.sex" label="name" :searchable="true" placeholder="Select Sex" />
                                <Multiselect v-if="filter.industry == 107" class="white" style="width: 17%;" :options="dropdowns.individuals" v-model="filter.individual" label="name" :searchable="true" placeholder="Select Individual" />
                                <Multiselect class="white" style="width: 17%;" :options="dropdowns.industries" v-model="filter.industry" label="name" :searchable="true" placeholder="Select Industry" />
                                <Multiselect v-if="$page.props.roles.includes('Admnistrator')" class="white" style="width: 15%;" :options="dropdowns.agencies" v-model="filter.agency" label="short" :searchable="true" placeholder="Select Agency" />
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
                                    <BLink @click="viewClass(null,null)" class="nav-link py-3 active" data-bs-toggle="tab" role="tab" aria-selected="true">
                                    <i class="ri-apps-2-fill me-1 align-bottom"></i> All Users
                                    </BLink>
                                </li>
                                <li class="nav-item" v-for="(list,index) in dropdowns.classes" v-bind:key="index">
                                    <BLink @click="viewClass(index,list.value)" class="nav-link py-3" :class="(this.index2 == index) ? list.others+' active' : ''" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <i :class="icons[index]" class="me-1 align-bottom"></i>
                                        {{ list.name }} 
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
                                    <th>Name</th>
                                    <th style="width: 15%;" class="text-center">Class</th>
                                    <th style="width: 15%;" class="text-center">Email</th>
                                    <th style="width: 10%;" class="text-center">Contact No.</th>
                                    <th style="width: 7%;" class="text-center">Status</th>
                                    <th style="width: 7%;" ></th>
                                </tr>
                            </thead>
                            <tbody class="table-white fs-12">
                                <tr v-for="(list,index) in lists" v-bind:key="index">
                                    <td class="text-center"> 
                                        {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                                    </td>
                                    <td>
                                        <h5 class="fs-13 mb-0 text-dark">{{list.customer}}</h5>
                                        <p class="fs-12 text-muted mb-0">{{list.address.name}}</p>
                                    </td>
                                    <!-- <td class="text-center fs-12">{{list.bussiness.name}}</td> -->
                                    <td class="text-center fs-12">{{list.classification.name}}</td>
                                    <!-- <td class="text-center fs-12">{{list.classification.name}}</td> -->
                                    <td class="text-center fs-12">{{list.email}}</td>
                                    <td class="text-center fs-12">{{list.contact_no}}</td>
                                    <td class="text-center">
                                        <span v-if="list.is_active" class="badge bg-success">Active</span>
                                        <span v-else class="badge bg-danger">Inactive</span>
                                    </td>
                                    <td class="text-end">
                                        <Link :href="`/customers/${list.code}`">
                                            <b-button variant="soft-info" class="me-1" v-b-tooltip.hover title="Edit" size="sm">
                                                <i class="ri-eye-fill align-bottom"></i>
                                            </b-button>
                                        </Link>
                                        <b-button @click="openEdit(list,index)" variant="soft-warning" v-b-tooltip.hover title="Edit" size="sm">
                                            <i class="ri-pencil-fill align-bottom"></i>
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
    <Edit :dropdowns="dropdowns" :region="region" @update="fetch()" ref="edit"/>
</template>
<script>
import _ from 'lodash';
import Edit from './Modals/Edit.vue';
import Create from './Modals/Create.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Edit, Create },
    props: ['region','dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
                class: null,
                industry: null,
                sex: null,
                agency: null,
                individual: null,
            },
            index: null,
            index2: null,
            units: [],
            icons: ['ri-building-2-fill','ri-user-fill']
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.agency"(newVal){
            this.fetch();
        },
        "filter.industry"(newVal){
            this.fetch();
        },
        "filter.sex"(newVal){
            this.fetch();
        },
        "filter.individual"(newVal){
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
            page_url = page_url || '/customers';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    agency: this.filter.agency,
                    class: this.filter.class,
                    industry: this.filter.industry,
                    sex: this.filter.sex,
                    individual: this.filter.individual,
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
        viewClass(index,data){
            this.index2 = index;
            this.filter.class = data;
            this.fetch();
        },
    }
}
</script>