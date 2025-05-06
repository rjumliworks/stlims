<template>
    <div class="card bg-light-subtle shadow-none border">
        <div class="card-header bg-light-subtle">
            <div class="d-flex mb-n3">
                <div class="flex-shrink-0 me-3">
                    <div style="height:2.5rem;width:2.5rem;">
                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                            <i class="ri-wallet-3-fill text-primary fs-24"></i>
                        </span>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h5 class="mb-0 fs-14"><span class="text-body">Laboratories with the Highest Earnings</span></h5>
                    <p class="text-muted text-truncate-two-lines fs-12">Shows laboratories with the highest revenue</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-card">
                <simplebar data-simplebar style="height: 270px;">
                    <table class="table align-middle table-centered table-nowrap mb-3">
                        <thead class="bg-white fs-11 thead-fixed">
                            <tr>
                                <th style="cursor: pointer; width: 4%;">#</th>
                                <th scope="col">Name</th>
                                <th class="text-center" style="width: 20%;">#</th>
                                <th class="text-center" style="width: 10%;">%</th>
                            </tr>
                        </thead>
                        <tbody class="fs-12">
                            <tr v-for="(list,index) in earnings" v-bind:key="index">
                            <td>{{index + 1}}</td>
                            <td>{{list.name}}</td>
                            <td class="text-center">{{formatMoney(list.total)}} </td>
                            <td class="text-center">{{percentage(list.total)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </simplebar>
            </div>
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
export default {
    components: { simplebar },
    props: ['earnings'],
    data(){
        return {
            sort: null,
        }
    },
    computed: {
        total() {
            return this.earnings.reduce((sum, item) => sum + parseFloat(item.total), 0);
        }
    },
    methods: {
        percentage(data){
            return (_.divide(data, this.total)*100).toFixed(2)+'%';
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        openView(){
            this.$refs.tsr.show();
        }
    }
}
</script>