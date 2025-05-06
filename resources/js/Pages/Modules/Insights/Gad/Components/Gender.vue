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
                    <h5 class="mb-0 fs-14"><span class="text-body">Customers by Gender</span></h5>
                    <p class="text-muted text-truncate-two-lines fs-12">Shows the customer by gender</p>
                </div>
                <div class="flex-shrink-0">
                    <div class="mt-1">
                        <!-- <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                            <i class="ri-eye-fill align-bottom"></i>
                        </button>
                        <button class="btn btn-sm btn-soft-info" type="button" data-original-title="View PDF">
                            <i class="ri-printer-fill align-bottom"></i>
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body" style="height: 712px; overflow-y: auto; overflow-x: hidden;">
            <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="270" :series="g"
                :options="chartOptions">
            </apexchart>

            <table class="table mb-1 mt-4" v-if="genders.length > 0">
                <tbody>
                    <tr>
                        <td>Male :</td>
                        <td class="text-end">{{genders[0]['total']}}</td>
                    </tr>
                    <tr>
                        <td>Female :</td>
                        <td class="text-end">{{genders[1]['total']}}</td>
                    </tr>
                    <tr>
                        <td>Not Applicable :</td>
                        <td class="text-end">{{genders[2]['total']}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="table-responsive table-card mt-2">
                <simplebar data-simplebar>
                    <table class="table align-middle table-centered table-nowrap mb-3">
                        <thead class="bg-white fs-11 thead-fixed">
                            <tr>
                                <th style="cursor: pointer; width: 4%;">#</th>
                                <th scope="col">Discount</th>
                                <th class="text-center" style="width: 20%;">Count</th>
                                <th class="text-center" style="width: 20%;">Total</th>
                            </tr>
                        </thead>
                        <tbody class="fs-12">
                            <tr v-for="(list,index) in discounts" v-bind:key="index">
                                <td>{{index + 1}}</td>
                                <td>{{list.name}}</td>
                                <td class="text-center">{{list.count}}</td>
                                <td class="text-center">{{formatMoney(list.total)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </simplebar>
            </div>
            <div class="d-grid gap-2 mt-3" >
                <b-button @click="openExcel()" variant="primary">Download Excel</b-button>
            </div>
        </div>
    </div>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
export default {
    components: { simplebar },
    props: ['years','info','genders','discounts'],
    data(){
        return {
            colors: ['bg-primary', 'bg-danger', 'bg-success', 'bg-warning', 'bg-info', 'bg-seconday'],
            series: [],
            chartOptions: {
                chart: {
                    type: 'pie',
                    height: 100,
                },
                labels: ['Male', 'Female','Not Applicable'],
                colors: ['#0d68e3', '#e21673','#c2c2c2'],
                legend: {
                    show: false,
                }
            },
        }
    },
    computed : {
        g(){
            if(this.genders.length > 0){
                return [this.genders[0]['total'],this.genders[1]['total'],this.genders[2]['total']];
            }else{
                return []
            }
        }
    },
    methods: {
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        openExcel(){
            window.open('/insights?option=gad-excel');
        }
    }
}
</script>