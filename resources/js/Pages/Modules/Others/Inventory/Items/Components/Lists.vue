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
                    <input type="text" v-model="filter.keyword" placeholder="Search Equipment" class="form-control" style="width: 20%;">
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
                        <BLink @click="viewStatus(null)" class="nav-link py-3 active text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">
                        <i class="ri-apps-2-line me-1 align-bottom"></i> All Items
                        </BLink>
                    </li>
                    <li class="nav-item" v-for="(list,index) in analytics.categories" v-bind:key="index">
                        <BLink @click="viewStatus(list.id)" class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false">
                            <i :class="icons[index]" class="me-1 align-bottom"></i>
                            {{ list.name }} ({{list.inventory_category_count}})
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
                        <th>Name</th>
                        <th style="width: 10%;" class="text-center">Quantity</th>
                        <th style="width: 10%;" class="text-center">Stock</th>
                        <th style="width: 10%;" class="text-center">Reorder</th>
                        <th style="width: 15%;" class="text-center">Category</th>
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
                            <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                            <p class="fs-12 text-muted mb-0">{{list.code}} <span v-if="list.old_code">({{list.old_code}})</span></p>
                        </td>
                        <td class="text-center fs-12">{{list.onhand}} </td>
                        <!-- <span class="fs-11 text-muted">({{ list.onhand }})</span> -->
                        <td class="text-center fs-12">{{ list.stock }} {{list.unit}}</td>
                        <td class="text-center fs-12">{{list.reorder}} {{list.unit}}</td>
                        <td class="text-center fs-12">{{list.category}}</td>
                        <td class="text-center">
                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                            <span v-else class="badge bg-danger">Inactive</span>
                        </td>
                        <td class="text-end">
                            <b-button @click="openEdit(list,index)" variant="soft-warning" class="me-1" v-b-tooltip.hover title="Edit" size="sm">
                                <i class="ri-pencil-fill align-bottom"></i>
                            </b-button>
                            <b-button @click="openView(list,index)" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
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
    <View :dropdowns="dropdowns" @update="updateItem2" ref="view"/>
    <Edit :dropdowns="dropdowns" @update="updateItem" ref="edit"/>
    <Create @message="fetch()" :dropdowns="dropdowns" ref="create"/>
    <Add  @message="pushNew" :dropdowns="dropdowns" ref="add"/>
</template>
<script>
import _ from 'lodash';
import View from '../Modals/View.vue';
import Edit from '../Modals/Edit.vue';
import Create from '../Modals/Create.vue';
import simplebar from "simplebar-vue";
import Add from '../Modals/Add.vue';
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    props: ['dropdowns','suppliers','analytics'],
    components: { Pagination, Create, Add, Edit, simplebar, View, Multiselect },
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            index: null,
            filter: {
                keyword: null,
                laboratory: null,
                category: null
            },
            status: 'default',
            selected: null,
            icons: ['ri-information-line','ri-wallet-3-line','ri-indeterminate-circle-line','ri-checkbox-circle-line','ri-close-circle-line'],
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        }
    },
    created(){
        this.fetch();
    },
    computed: {
        sortedItems() {
            return this.selected.stocks.sort((a, b) => b.onhand - a.onhand);
        }
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/inventory';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    category: this.filter.category,
                    count: ((window.innerHeight-350)/58),
                    option: 'items'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;     
            })
            .catch(err => console.log(err));
        },
        viewStatus(category){
            this.filter.category = category;
            this.fetch();
        },
        openAdd(data){
            this.$refs.add.show(data);
        },
        openView(data,index){
            this.index = index;
            this.$refs.view.show(data);
        },
        openCreate(){
            this.$refs.create.show();
        },
        openEdit(data,index){
            this.index = index;
            this.$refs.edit.show(data);
        },
        pushNew(data){
            this.selected = data;
        },
        updateItem(data){
            this.lists[this.index].category = data.category.name;
            this.lists[this.index].reorder = data.reorder;
        },
        updateItem2(data){
            this.lists[this.index] = data;
        },
        back(){
            this.status = 'default';
            this.selected = null;
        }
    }
}
</script>