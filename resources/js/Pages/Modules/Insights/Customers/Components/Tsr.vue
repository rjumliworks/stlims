<template>
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
                    <h5 class="mb-0 fs-14"><span class="text-body">Top 10 High-Request Customers</span></h5>
                    <p class="text-muted text-truncate-two-lines fs-12">Shows the top 5 customers with the most requests</p>
                </div>
                <div class="flex-shrink-0">
                    <div class="mt-1">
                        <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                            <i class="ri-eye-fill align-bottom"></i>
                        </button>
                        <button class="btn btn-sm btn-soft-info" type="button" data-original-title="View PDF">
                            <i class="ri-printer-fill align-bottom"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="card-body bg-white">
            <div class="table-responsive table-card">
                <simplebar data-simplebar style="height: 270px;">
                    <table class="table align-middle table-centered table-nowrap mb-3">
                        <thead class="bg-white fs-11 thead-fixed">
                            <tr>
                                <th style="cursor: pointer; width: 4%;">#</th>
                                <th scope="col">Name</th>
                                <th class="text-center" style="width: 10%;">#</th>
                                <th class="text-center" style="width: 10%;">%</th>
                            </tr>
                        </thead>
                        <tbody class="bg-light-subtle fs-12">
                            <tr v-for="(list,index) in tsrs" v-bind:key="index">
                                <td>{{index + 1}}</td>
                                <td>{{list.customer_name.name}} {{ (list.name == 'Main') ? '' : ' - '+list.name }}</td>
                                <td class="text-center">{{list.tsrs_count}} </td>
                                <td class="text-center">{{percentage(list.tsrs_count)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </simplebar>
            </div>
        </div>
    </div>
    <Tsr :total="total" ref="tsr"/>
</template>
<script>
import _ from 'lodash';
import Tsr from '../Modals/Tsr.vue';
import simplebar from "simplebar-vue";
export default {
    props: ['total','tsrs'],
    components: { Tsr, simplebar },
    data(){
        return {
            sort: null,
        }
    },
    methods: {
        percentage(data){
            if(data != 0){
                return (_.divide(data, this.total)*100).toFixed(2)+'%';
            }else{ 
                return '0%';
            }
        },
        openView(){
            this.$refs.tsr.show();
        }
    }
}
</script>