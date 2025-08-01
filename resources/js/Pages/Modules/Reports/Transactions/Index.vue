<template>
    <Head title="Transactions"/>
    <PageHeader title="Transactions" pageTitle="List" />
    <div class="row">

        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-hand-coin-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Laboratory Collections</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Breakdown of Laboratory Collections by payment method, showing daily totals from Monday to Friday</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-bordered align-middle mb-3">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 15%;">Payment Method</th>
                                    <th style="width: 15%;" class="text-center">Monday</th>
                                    <th style="width: 15%;" class="text-center">Tuesday</th>
                                    <th style="width: 15%;" class="text-center">Wednesday</th>
                                    <th style="width: 15%;" class="text-center">Thursday</th>
                                    <th style="width: 15%;" class="text-center">Friday</th>
                                    <th style="width: 10%;" class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in labs" v-bind:key="index" >
                                    <td> {{ list.payment_method }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Monday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Tuesday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Wednesday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Thursday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Friday) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-hand-coin-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">SETUP Collections</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Breakdown of SETUP Collections by payment method, showing daily totals from Monday to Friday</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-bordered align-middle mb-3">
                            <thead class="table-light thead-fixed">
                                <tr class="fs-11">
                                    <th style="width: 15%;">Payment Method</th>
                                    <th style="width: 15%;" class="text-center">Monday</th>
                                    <th style="width: 15%;" class="text-center">Tuesday</th>
                                    <th style="width: 15%;" class="text-center">Wednesday</th>
                                    <th style="width: 15%;" class="text-center">Thursday</th>
                                    <th style="width: 15%;" class="text-center">Friday</th>
                                    <th style="width: 10%;" class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in nonlabs" v-bind:key="index" >
                                    <td> {{ list.payment_method }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Monday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Tuesday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Wednesday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Thursday) }}</td>
                                    <td class="text-center"> {{ formatMoney(list.Friday) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

     </div>
</template>
<script>
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['labs','nonlabs'],
    components: { PageHeader },
    methods: { 
        formatMoney(value) {
            let val = (value / 1).toFixed(2).replace(',', '.');
            return '₱' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
    }
}
</script>