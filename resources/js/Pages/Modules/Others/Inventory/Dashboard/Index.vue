<template>
    <Head title="Inventory"/>
    <PageHeader title="Inventory" pageTitle="Menu" />
     <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <b-row>
                <b-col lg="4" md="6" v-for="(item, index) of dropdowns.statistics" :key="index">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;"><span
                                            class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i :class="`bx ${item.icon} ${item.color} fs-24`"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">{{item.total}}</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">{{item.name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="d-flex flex-column">
                                <div class="mt-auto">
                                    <div class="d-flex mb-0">
                                        <div class="flex-grow-1">
                                            <div class="text-muted fs-13">
                                                <i class="ri-file-list-fill me-1 align-bottom"></i>{{item.name}}
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="mb-n1 mt-n1">
                                                <Link :href="`/inventory/items`">
                                                    <!-- <button class="btn btn-sm btn-light me-n1" type="button" data-original-title="View Excel">
                                                        <i class="ri-file-excel-fill align-bottom"></i> View {{item.name}}
                                                    </button> -->
                                                    <!-- Buttons with Label -->
                                                    <b-button variant="light" class="btn-label btn-sm waves-effect waves-light">
                                                        <i class="ri-file-copy-2-line label-icon align-middle fs-12 me-2"></i> View
                                                    </b-button>
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </b-col>
            </b-row>
          
            <Search @set="setData"/>
            <b-col lg="12" v-if="selected">
                <div class="card p-3 bg-light-subtle shadow-none border">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row align-items-center g-3">
                                <div class="col-md">
                                    <div>
                                        <h6><span class="fw-semibold text-primary fs-15">{{ selected.name }}</span> <span class="text-muted fs-12"> - ({{ selected.code }})</span></h6>
                                        <div class="hstack gap-3  fs-13 flex-wrap">
                                            <div><i class="ri-qr-code-fill align-bottom me-1"></i> {{selected.code }} </div>
                                            <div class="vr" style="width: 1px;"></div>
                                            <div>Available Stock : 
                                                <span v-if="selected.stock" class="fw-medium"> {{ selected.stock }} {{ selected.unit }}</span>
                                                <span v-else class="text-muted">Not Available</span>
                                            </div>
                                            <div class="vr" style="width: 1px;"></div>
                                            <div>Reorder Point : 
                                                <span v-if="selected.reorder" class="fw-medium">{{selected.reorder}} {{ selected.unit }}</span>
                                                <span v-else class="text-muted">Not Available</span>
                                            </div>
                                            <div class="vr" style="width: 1px;"></div>
                                            <div>Quantity. : 
                                                <span v-if="selected.onhand" class="fw-medium">{{selected.onhand}}</span>
                                                <span v-else class="text-muted">Not Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="hstack gap-1 mt-n2 mb-n2 flex-wrap">
                                <div class="row g-1 text-end">
                                    <!-- <div class="col-md-12">
                                        <b-button @click="openAdd(selected)" pill variant="primary" class="btn-label btn-sm waves-effect waves-light fs-11" style="width: 100px;">
                                            <i class="ri-add-circle-fill label-icon align-middle rounded-pill fs-12 me-2"></i> Restock
                                        </b-button>
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <b-button @click="back()" pill variant="primary" class="btn-label btn-sm waves-effect waves-light fs-11" style="width: 100px;">
                                            <i class="ri-delete-back-2-fill label-icon align-middle rounded-pill fs-12 me-2"></i> Back
                                        </b-button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </b-col>
            
            <div v-if="selected" class="table-responsive mt-n2 mb-0">
                <table class="table table-nowrap align-middle mb-0">
                    <thead class="table-light">
                        <tr class="fs-11">
                            <th class="text-center" width="5%">#</th>
                            <th width="30%">Supplier</th>
                            <th class="text-center" width="15%">PO Number</th>
                            <th class="text-center" width="15%">Onhand</th>
                            <th class="text-center" width="15%">Content</th>
                            <th class="text-center" width="15%">Price</th>
                            <th class="text-center" width="15%"></th>
                        </tr>
                    </thead>
                </table>
                <simplebar data-simplebar style="max-height: calc(100vh - 520px);">
                    <table class="table table-nowrap align-middle mb-0">
                        <tbody>
                            <tr v-for="(list,index) in sortedItems" v-bind:key="index" class="fs-12" :class="(list.selected) ? 'table-info' : ''">
                                <td  width="5%" class="text-center fs-12"> 
                                    {{index+1}}
                                </td>
                                <td  width="30%">
                                    <h5 class="fs-13 mb-0">{{list.supplier}}</h5>
                                    <p class="text-muted mb-0">{{list.code}}</p>
                                </td>
                                <td  width="15%" class="text-center">{{list.number}}</td>
                                <td  width="15%" class="text-center">{{list.onhand}}</td>
                                <td  width="15%" class="text-center">{{list.unit}} {{list.type}}</td>
                                <td  width="15%" class="text-center">{{list.price}}</td>
                                <td  width="15%" class="text-center">
                                    <b-button @click="openView(list,selected.name)" variant="primary" v-b-tooltip.hover title="Add to cart" size="sm" :disabled="(list.outofstock || list.expired) ? true : false">
                                        <i class="ri-logout-circle-r-fill align-bottom"></i>
                                    </b-button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </simplebar>
             </div>
        </div>
        <div class="file-manager-sidebar" style="max-width: 500px; min-width: 500px;">  
            <div class="p-3 d-flex flex-column h-100">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle mb-0">
                        <thead class="table-light">
                            <tr class="fs-11">
                                <th style="width: 85%;">Item</th>
                                <th class="text-end"></th>
                            </tr>
                        </thead>
                        <tbody v-if="carts.length > 0">
                            <tr v-for="(list,index) in carts" v-bind:key="index" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                                <td class="fs-12">
                                    <h5 class="fs-12 mb-0 text-dark">{{list.name}}</h5>
                                    <p class="fs-12 text-muted mb-0">{{list.number}}</p>
                                </td>
                                <td class="text-end">
                                    <div class="input-step">
                                        <input type="number" @keydown="handleKeydown" v-maska data-maska="##" class="product-quantity" v-model="list.quantity" value="1" min="0" :max="list.onhand"/>
                                    </div>
                                    <b-button @click="removeCart(index)" variant="light" v-b-tooltip.hover title="Remove" class="remove-list ms-1 me-n2">
                                        <i class="ri-delete-bin-fill align-bottom"></i>
                                    </b-button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="2" class="text-center text-muted">No items added</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-auto">
                    <div class="d-grid gap-2" >
                        <b-button @click="openWithdraw" variant="primary" :disabled="(carts.length == 0) ? true : false">Withdraw</b-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <View @add="addNow" ref="view"/>
    <Add @update="updateList" :dropdowns="dropdowns" ref="add"/>
    <Withdraw @message="clear()" ref="withdraw"/>
</template>
<script>
import _ from 'lodash';
import Add from '../Dashboard/Modals/Add.vue';
import View from './Modals/View.vue';
import Search from './Components/Search.vue';
import Withdraw from './Modals/Withdraw.vue';
import simplebar from "simplebar-vue";
import { vMaska } from "maska/vue"
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['dropdowns'],
    directives: { maska: vMaska },
    components: { PageHeader, Add, Withdraw, View, Search, simplebar },
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            carts: [],
            filter: {
                keyword: null,
                type: null,
            },
            selected: null
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
        setData(data) {
            this.selected = data;
        },
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/inventory';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    type: this.filter.type,
                    count: ((window.innerHeight-350)/58),
                    option: 'lists'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;     
            })
            .catch(err => console.log(err));
        },
        search(data){
            this.filter.type = data;
            this.fetch();
        },
        add(data){
            this.$refs.add.show(data);
        },
        addNow(data){
            this.addCart(data);
        },
        addCart(data){
            const exst = this.carts.some(item => item.id === data.id);
            if(!exst){
                const item = {
                    id: data.id,
                    name: data.name,
                    number: data.number,
                    quantity: 1,
                    onhand: data.onhand
                }
                this.carts.push(item);
            }else{
                
            }
        },
        removeCart(index){
            this.carts.splice(this.carts.indexOf(index), 1);
        },
        openWithdraw(){
            this.$refs.withdraw.show(this.carts);
        },
        openView(data,name){
            this.$refs.view.show(data,name);
        },
        updateList(data){
            this.selected.stocks.push(data);
        },
        clear(){
            this.fetch();
            this.carts = [];
        },
        handleKeydown(event) {
      const allowedKeys = ["ArrowUp", "ArrowDown", "Tab", "Backspace", "Delete"];
      if (!allowedKeys.includes(event.key)) {
        event.preventDefault();
      }
    }
    }
}
</script>