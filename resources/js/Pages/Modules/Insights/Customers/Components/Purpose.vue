<template>
    <div class="card bg-light-subtle shadow-none border">
        <div class="card-header bg-light-subtle">
            <div class="d-flex mb-n3">
                <div class="flex-shrink-0 me-3">
                    <div style="height:2.5rem;width:2.5rem;">
                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                            <i class="ri-group-2-fill text-primary fs-24"></i>
                        </span>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h5 class="mb-0 fs-14"><span class="text-body">Customers by Purpose</span></h5>
                    <p class="text-muted text-truncate-two-lines fs-12">Shows the leading players in each sector</p>
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
        <div class="card-body">
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
                        <tbody class="fs-12">
                            <tr v-for="(list,index) in purposes" v-bind:key="index">
                                <td>{{index + 1}}</td>
                                <td>{{list.name}}</td>
                                <td class="text-center">{{list.customer_purpose_count}} </td>
                                <td class="text-center">{{percentage(list.customer_purpose_count)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </simplebar>
            </div>
        </div>
    </div>
    <Purpose :total="total" :info="info" :years="years" ref="purpose"/>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
import Purpose from '../Modals/Purpose.vue';
export default {
    components: { Purpose, simplebar },
    props: ['years','info','purposes'],
    data(){
        return {
            sort: null,
        }
    },
    computed: {
        total() {
            return this.purposes.reduce((sum, item) => sum + item.customer_purpose_count, 0);
        }
    },
    methods: {
        percentage(data){
            return (_.divide(data, this.total)*100).toFixed(2)+'%';
        },
        openView(){
            this.$refs.purpose.show();
        }
    }
}
</script>