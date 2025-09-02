<template>
    <b-modal  v-if="selected" v-model="showModal"  style="--vz-modal-width: 1000px;" header-class="p-3 bg-light" title="View Item" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="row mb-3">
            <div class="col-md-9">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            <h6><span class="fw-semibold text-primary fs-15">{{ selected.name }}</span> </h6>
                            <div class="hstack gap-3  fs-12 flex-wrap">
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
            <div class="col-md-3">
                <div class="hstack gap-1 mt-n2 mb-n2 flex-wrap">
                    <div class="row g-1 text-end">
                
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="text-muted"/>
            </div>
            <div class="col-md-12 mb-n4">
                <div class="card bg-light-subtle shadow-none border">
                    <div class="card-header bg-light-subtle">
                        <div class="d-flex mb-n3">
                            <div class="flex-shrink-0 me-3">
                                <div style="height:2.2rem;width:2.2rem;">
                                    <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                        <i v-if="info" :class="info.icon+' text-primary fs-24'"></i>
                                        <i v-else class="ri-file-list-fill text-primary fs-24"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fs-13">
                                    <span class="text-body">Stock Details</span>
                                </h5>
                                <p class="text-muted text-truncate-two-lines fs-11"> Displays available stock for each item</p>
                            </div>
                            <div class="flex-shrink-0">
                                <BButton @click="openAdd(selected)" variant="danger" class="btn-sm waves-effect waves-light">
                                   Add Stock
                                </BButton>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive table-card">
                            <simplebar data-simplebar style="max-height: 280px;">
                                <table class="table table-nowrap align-middle mb-0">
                                    <thead class="table-light thead-fixed">
                                        <tr class="fs-11">
                                            <th class="text-center" style="width: 4%;">#</th>
                                            <th>Supplier</th>
                                            <th class="text-center" style="width: 13%;">S.N. / B.N.</th>
                                            <th class="text-center" style="width: 13%;">Quantity</th>
                                            <th class="text-center" style="width: 13%;">Content</th>
                                            <th class="text-center" style="width: 13%;">Price</th>
                                            <th class="text-center" style="width: 7%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-12">
                                        <tr v-for="(list,index) in sortedItems" v-bind:key="index" class="fs-12" :class="(list.onhand == 0) ? 'table-danger' : ''">
                                            <td  width="5%" class="text-center fs-12"> 
                                                {{index+1}}
                                            </td>
                                            <td  width="30%">
                                                <h5 class="fs-11 mb-0">{{list.supplier}}</h5>
                                                <!-- <p class="text-muted mb-0">{{list.code}}</p> -->
                                            </td>
                                            <td class="text-center">{{list.number}}</td>
                                            <td class="text-center">{{list.onhand}}</td>
                                            <td class="text-center">{{list.unit}} {{list.type}}</td>
                                            <td class="text-center">{{list.price}}</td>
                                            <td class="text-center">
                                                <b-button @click="openEdit(list,index)" variant="soft-warning" class="me-1" v-b-tooltip.hover title="Edit" size="sm">
                                                    <i class="ri-pencil-fill align-bottom"></i>
                                                </b-button>
                                                <b-button class="mt-n1 mb-n1" @click="openView(selected.name,list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
                                                    <i class="ri-eye-fill align-bottom"></i>
                                                </b-button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </simplebar>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
        </template>
    </b-modal>
    <Add @update="updateSelected" @updatestock="updateStocks" :dropdowns="dropdowns" ref="add"/>
    <Show ref="show"/>
</template>
<script>
import simplebar from "simplebar-vue";
import Add from '../Modals/Add.vue';
import Show from '../Modals/Show.vue';
export default {
    components : { simplebar, Add, Show }, 
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: null
        }
    },
    computed: {
        sortedItems() {
            return this.selected.stocks.sort((a, b) => b.onhand - a.onhand);
        }
    },
    methods: { 
        show(data){
            this.selected = data;
            this.showModal = true;
        },
        openView(selected,item){
            this.$refs.show.show(selected,item);
        },
        updateSelected(data){
            this.selected = data;
            this.$emit('update',data);
        },
        updateStocks(data){
            this.selected = data;
        },
        openEdit(data,index){
            this.index = index;
            this.$refs.add.edit(data);
        },
        openAdd(data){
            this.$refs.add.show(data);
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>