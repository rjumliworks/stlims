<template>
    <Head title="Province Insights"/>
    <PageHeader title="Province Insights" pageTitle="Menu" />
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg="12">
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Request" class="form-control" style="width: 20%;">
                <Multiselect class="white" style="width: 15%;" :options="years" v-model="year" label="name" :searchable="true" placeholder="Select Year" />
                <b-button type="button" variant="primary"> Filter Data </b-button>
            </div>
        </b-col>
    </b-row>
    <hr class="text-muted"/>
    <BRow class="g-3" style="height: calc(100vh - 300px); overflow: auto;">
        <BCol xl="12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-map-pin-user-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Customers Distribution in Zamboanga City by District</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Shows customers in ZC</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="mt-1">
                                <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="bg-white fs-11 thead-fixed">
                                <tr>
                                    <th style="cursor: pointer; width: 4%;">#</th>
                                    <th style="width: 10%;">District</th>
                                    <th class="text-center align-middle" v-for="(list,index) in months" v-bind:key="index">{{list}}</th>
                                    <th class="text-center" style="width: 10%;">Total</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in zc" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.district}}</td>
                                    <td class="text-center" v-for="(month,index) in list.months" v-bind:key="index">{{month}} </td>
                                    <td class="text-center">{{list.total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </BCol>
        <BCol xl="12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-map-pin-user-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Customer Distribution by Province</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Shows customer distribution across provinces</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="mt-1">
                                <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="bg-white fs-11 thead-fixed">
                                <tr>
                                    <th style="cursor: pointer; width: 4%;">#</th>
                                    <th style="width: 10%;">Province</th>
                                    <th class="text-center align-middle" v-for="(list,index) in months" v-bind:key="index">{{list}}</th>
                                    <th class="text-center" style="width: 10%;">Total</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in customers" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.province}}</td>
                                    <td class="text-center" v-for="(month,index) in list.months" v-bind:key="index">{{month}} </td>
                                    <td class="text-center">{{list.total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </BCol>
        <BCol xl="12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-map-pin-user-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Firms Distribution in Zamboanga City by District</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Shows customers in ZC</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="mt-1">
                                <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="bg-white fs-11 thead-fixed">
                                <tr>
                                    <th style="cursor: pointer; width: 4%;">#</th>
                                    <th style="width: 10%;">District</th>
                                    <th class="text-center align-middle" v-for="(list,index) in months" v-bind:key="index">{{list}}</th>
                                    <th class="text-center" style="width: 10%;">Total</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in zcfirm" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.district}}</td>
                                    <td class="text-center" v-for="(month,index) in list.months" v-bind:key="index">{{month}} </td>
                                    <td class="text-center">{{list.total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </BCol>
        <BCol xl="12">
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-map-pin-user-fill text-primary fs-24"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Firms Distribution by Province</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Shows customer distribution across provinces</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="mt-1">
                                <button @click="openView()" class="btn btn-sm btn-soft-success me-1" type="button" data-original-title="View All">
                                    <i class="ri-eye-fill align-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-centered table-nowrap mb-3">
                            <thead class="bg-white fs-11 thead-fixed">
                                <tr>
                                    <th style="cursor: pointer; width: 4%;">#</th>
                                    <th style="width: 10%;">Province</th>
                                    <th class="text-center align-middle" v-for="(list,index) in months" v-bind:key="index">{{list}}</th>
                                    <th class="text-center" style="width: 10%;">Total</th>
                                </tr>
                            </thead>
                            <tbody class="fs-12">
                                <tr v-for="(list,index) in firms" v-bind:key="index">
                                    <td>{{index + 1}}</td>
                                    <td>{{list.province}}</td>
                                    <td class="text-center" v-for="(month,index) in list.months" v-bind:key="index">{{month}} </td>
                                    <td class="text-center">{{list.total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </BCol>
    </BRow>
</template>
<script>
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { Multiselect, PageHeader },
    props: ['customers','firms','zc','zcfirm'],
    data(){
        return {
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
        }
    }
    
}
</script>