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
                <p class="text-muted text-truncate-two-lines fs-12">TSRs reviewed, reports completed, and approved—ready for customer release.</p>
            </div>
            <div class="flex-shrink-0" style="width: 45%;">
                <div class="input-group mb-1" style="margin-top: -3px;">
                    <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                    <input type="text" v-model="filter.keyword" placeholder="Search Request" class="form-control" style="width: 20%;">
                    <Multiselect class="white" style="width: 40%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" />
                    <b-button type="button" variant="primary" @click="openCreate">
                        <i class="ri-add-circle-fill align-bottom me-1"></i> Create
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
            <div class="flex-shrink-0"></div>
        </div>
    </div>
    <div class="card-body bg-white rounded-bottom">
        <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 400px)" v-if="filter.reminder != 'For Release' && filter.reminder != 'Unclaimed Reports'">
            <table class="table align-middle table-centered mb-0">
                <thead class="table-light thead-fixed">
                    <tr class="fs-11">
                        <th style="width: 4%;"></th>
                        <th>Customer</th>
                        <th style="width: 13%;" class="text-center">Due Date</th>
                        <th style="width: 13%;" class="text-center">Released Date</th>
                        <th style="width: 15%;" class="text-center">Released By</th>
                        <th style="width: 10%;" class="text-center">Status</th>
                        <th style="width: 10%;" ></th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    <tr v-for="(list,index) in lists" v-bind:key="index">
                        <td class="text-center"> 
                            {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                        </td>
                        <td>
                            <h5 class="fs-13 mb-0 fw-semibold text-primary">{{list.code}}</h5>
                            <p class="fs-12 text-muted mb-0">{{list.customer}}</p>
                        </td>
                        <td class="text-center fs-12">
                            <span>{{list.due_at}}</span>
                        </td>
                        <td class="text-center fs-12">
                            <span>{{list.released_at}}</span>
                        </td>
                        <td class="text-center">
                            <span>{{list.user}}</span>
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
                            <b-button @click="openUpdate(list,index)" variant="soft-danger" v-b-tooltip.hover title="Release" size="sm">
                                <i class="bx bxs-hand"></i>
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
    <Create @success="fetch()" ref="create"/>
    <Update @update="updateData" ref="update"/>
</template>
<script>
import _ from 'lodash';
import Create from './Modals/Create.vue';
import Update from './Modals/Update.vue';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Multiselect, simplebar, Create, Update },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
                status: null,
                laboratory: null
            },
            index: null
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        },
        "filter.laboratory"(newVal){
            this.checkSearchStr(newVal)
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
            page_url = page_url || '/release';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    count: 15, //Math.floor((window.innerHeight-500)/58)
                    laboratory: this.filter.laboratory,
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
        openUpdate(data,index){
            this.index = index;
            this.$refs.update.show(data);
        },
        updateData(data){
            this.lists[this.index] = data;
        },
        refresh(){
            this.fetch();
        }
    }
}
</script>