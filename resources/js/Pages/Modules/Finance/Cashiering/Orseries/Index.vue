<template>
    <Head title="OR Series"/>
    <PageHeader title="List of OR Series" pageTitle="List" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            
            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="filter.keyword" placeholder="Search Collection" class="form-control" style="width: 60%;">
                        <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                            <i class="bx bx-refresh search-icon"></i>
                        </span>
                        <b-button type="button" variant="primary" @click="openCreate()">
                            <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                        </b-button>
                    </div>
                </b-col>
            </b-row>
            <div class="table-responsive">
                <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light">
                        <tr class="fs-11">
                            <th></th>
                            <th style="width: 20%;">Name</th>
                            <th style="width: 11%;" class="text-center">Start</th>
                            <th style="width: 11%;" class="text-center">Next</th>
                            <th style="width: 11%;" class="text-center">End</th>
                            <th style="width: 15%;" class="text-center">Date Created</th>
                            <th style="width: 15%;" class="text-center">Date Updated</th>
                            <th style="width: 10%;" class="text-center">Status</th>
                            <th style="width: 4%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                            <td>
                                {{index+1}}
                            </td>
                            <td>
                                <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                            </td>
                            <td class="text-center">{{list.start}}</td>
                            <td class="text-center">{{list.next}}</td>
                            <td class="text-center">{{list.end}}</td>
                            <td class="text-center">{{list.created_at}}</td>
                            <td class="text-center">{{list.updated_at}}</td>
                            <td class="text-center">
                                <span v-if="list.is_active" class="badge bg-success">Active</span>
                                <span v-else class="badge bg-danger">Inactive</span>
                            </td>
                            <td class="text-end">
                                <b-button v-if="list.is_active" variant="soft-primary" v-b-tooltip.hover title="View" size="sm" class="edit-list">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </b-button>
                                <b-button v-else @click="openEdit(list)" variant="soft-warning" v-b-tooltip.hover title="Edit" size="sm" class="edit-list">
                                    <i class="ri-pencil-fill align-bottom"></i>
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>

        </div>
    </div>
    <Create @update="fetch()" ref="create"/>
</template>
<script>
import _ from 'lodash';
import Create from './Modals/Create.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Create },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
                status: null
            },
            index: null
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "filter.mode"(newVal){
            this.fetch();
        },
        "filter.status"(newVal){
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
            page_url = page_url || '/cashiering';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    status: this.filter.status,
                    count: Math.floor((window.innerHeight-350)/58),
                    option: 'orseries'
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
        openEdit(data){
            this.$refs.create.edit(data);
        }
    }
}
</script>