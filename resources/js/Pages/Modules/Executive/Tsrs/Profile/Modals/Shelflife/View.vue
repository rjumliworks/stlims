<template>
    <b-modal v-if="selected" v-model="showModal" style="--vz-modal-width: 700px;" header-class="p-3 bg-light" title="View Group" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <template v-for="(items, index) in groupedData" :key="index">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-13 fw-semibold" :class="(selected.status != 'Completed') ? 'mt-1 fs-14' : ''"><span class="text-primary">{{items[0].typeName}}</span></h5>
                        </div>
                        <div class="flex-shrink-0">
                            <b-button v-if="items[0].items.every(item => item.status_id === 23)" type="button" variant="primary" size="sm" @click="openGenerate(items[0],index)">
                                <i class="ri-add-circle-fill align-bottom me-1"></i> Generate
                            </b-button>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="table-responsive table-card">
                        <simplebar data-simplebar style="max-height: 300px;">
                            <table class="table align-middle table-centered table-nowrap">
                                <thead class="bg-dark-subtle fs-11 thead-fixed">
                                    <tr>
                                        <th width="40%">Testname</th>
                                        <th class="text-center" width="20%">Quantity</th>
                                        <th class="text-center" width="20%">Fee</th>
                                        <th class="text-center" width="20%">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-light-subtle fs-12">
                                    <tr v-for="item in items[0].items" :key="item.id">
                                            <td>
                                            <h5 class="fs-12 mb-0">{{item.testservice.testname.name}}</h5>
                                        </td>
                                        <td class="text-center">{{item.quantity}} </td>
                                        <td class="text-center">{{item.fee}} </td>
                                        <td class="text-center">{{item.total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </simplebar>
                    </div>
                </div>
            </div>
        </template>

        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
        </template>
        <Generate @success="updateData" ref="generate"/>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import Generate from './Generate.vue';
import { useForm } from '@inertiajs/vue3';
export default {
    props: ['laboratories'],
    components: { Generate },
    data(){
        return {
            currentUrl: window.location.origin,
            selected: {},
            form: useForm({
                tsr_id: null,
                days: null,
                date: null,
                lists: [],
                option: 'group'
            }),
            id: null,
            index: null,
            customer: null,
            payment: null,
            selected: null,
            showModal: false
        }
    },
    computed: {
       groupedData() {
            return this.selected.items.reduce((acc, item) => {
                // Get the type name and type ID
                const typeId = item.testservice.laboratory.id;
                const typeName = item.testservice.laboratory.name;
                
                // Find the existing group with the same typeId
                let group = acc.find(group => group[0].typeId === typeId);
                
                // If the group doesn't exist, create a new one
                if (!group) {
                    group = [{
                        typeId: typeId,
                        typeName: typeName,
                        customer: this.customer.name,
                        customer_id: this.customer.id,
                        conformes: this.customer.conformes,
                        or_number: this.payment.or_number,
                        discount_id: this.payment.discount_id,
                        payment_id: this.payment.payment_id,
                        collection_id: this.payment.collection_id,
                        status_id: this.payment.status_id,
                        tsr_id: this.id,
                        items: []
                    }];
                    acc.push(group);
                }
                
                // Add the item to the appropriate group's items array
                group[0].items.push(item);
                
                return acc;
            }, []);
        }
    },
    methods: { 
        show(data,customer,payment,id){
            this.id = id;
            this.payment = payment;
            this.customer = customer;
            this.selected = data;
            this.showModal = true;
        }, 
        submit(){
            this.form.tsr_id = this.selected.id;
            this.form.post('/analyses',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.$emit('success',true);
                    this.hide();
                },
            });
        },
        openGenerate(data,index){
            this.index = index;
            this.$refs.generate.show(data);
        },
        updateData(){
            this.groupedData[this.index][0].items.forEach(item => {
                item.status_id = 24;
            });
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        hide(){
            this.form.reset();
            this.showModal = false;
        }
    }
}
</script>