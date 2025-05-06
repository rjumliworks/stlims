<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 650px;" hide-footer title="Customer by Purpose" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered>
        
            <div class="card bg-light-subtle shadow-none border">
                <div class="card-header bg-light-subtle">
                    <b-col lg>
                        <div class="input-group mb-1">
                            <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                            <input type="text" placeholder="Search Name" class="form-control" style="width: 5%;">
                            <!-- <Multiselect class="white" :options="types" style="width: 25%;" v-model="laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" /> -->
                            <Multiselect class="white" :options="months" style="width: 30%;" v-model="month" label="name" :allow-empty="false" :searchable="true" placeholder="Select Month" />
                            <Multiselect class="white" :options="years" style="width: 30%;" v-model="year" label="name" :searchable="true" placeholder="Select Year" />
                            <b-button type="button" variant="primary"> <i class="ri-printer-fill align-bottom"></i> </b-button>
                        </div>
                    </b-col>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <simplebar data-simplebar style="height: 270px;">
                            <table class="table align-middle table-centered table-nowrap mb-3">
                                <thead class="bg-white fs-11 thead-fixed">
                                    <tr>
                                        <th style="cursor: pointer; width: 7%;">#</th>
                                        <th scope="col">Name</th>
                                        <th class="text-center" style="width: 15%;">Consolidated</th>
                                        <th class="text-center" style="width: 15%;">Warm bodies</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-11">
                                    <tr v-for="(list,index) in lists" v-bind:key="index">
                                        <td>{{index + 1}}</td>
                                        <td>{{list.name}}</td>
                                        <td class="text-center">{{list.consolidated}} </td>
                                        <td class="text-center">{{list.warm_bodies}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </simplebar>
                    </div>
                </div>
            </div>
    </b-modal>
</template>
<script>
import _ from 'lodash';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    props: ['total','years','info'],
    components : { Pagination, simplebar, Multiselect },
    data() {
        return {
            currentUrl: window.location.origin,
            lists: [],
            month: (this.info) ? this.info.month : null,
            year: (this.info) ? this.info.year : null,
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
            showModal: false
        }
    },
    watch: {
        "year"(newVal){
            this.fetch();
        },
        "month"(newVal){
            this.fetch();
        },
    },
    methods : {
        show(){
            this.fetch();
            this.showModal = true;
        },
        fetch(page_url) {
            page_url = page_url || '/insights';
            axios.get(page_url, {
                params: { 
                    option: 'customers-info', 
                    year: this.year,
                    month: this.month,
                    type: 'purpose',
                }
            })
            .then(response => {
                this.lists = response.data;
            })
            .catch(err => console.log(err));
        },
        refresh(){
            this.fetch();
        },
    }
}
</script>
