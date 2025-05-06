<template>
    <div class="card-header bg-light-subtle">
        <div class="d-flex mb-n3">
            <div class="flex-shrink-0 me-3">
                <div style="height:2.5rem;width:2.5rem;">
                    <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                        <i class="ri-flask-fill  text-primary fs-24"></i>
                    </span>
                </div>
            </div>
            <div class="flex-grow-1">
                <h5 class="mb-0 fs-14"><span class="text-body">List of Disposed Samples</span></h5>
                <p class="text-muted text-truncate-two-lines fs-12">Record of samples that have been disposed of</p>
            </div>
            <div class="flex-shrink-0" style="width: 45%;">
                <div class="input-group mb-1" style="margin-top: -3px;">
                    <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                    <input type="text" v-model="filter.keyword" placeholder="Search Request" class="form-control" style="width: 20%;">
                    <Multiselect class="white" style="width: 40%;" :options="dropdowns.laboratories" v-model="filter.laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" />
                    <b-button type="button" variant="primary" @click="openCreate">
                        <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                    </b-button>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white border-bottom shadow-none" no-body>
        <div class="d-flex">
            <div class="flex-grow-1">
                <!-- border border-dashed border-end-0 border-start-0 -->
                <ul class="nav nav-tabs nav-tabs-custom nav-success fs-12" role="tablist">
                    <li class="nav-item">
                        <BLink @click="viewStatus(10,null)" class="nav-link py-3 active text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">
                        <i class="ri-apps-2-line me-1 align-bottom"></i> All Requests
                        </BLink>
                    </li>
                </ul>
            </div>
            <div class="flex-shrink-0"></div>
        </div>
    </div>
    <div class="card-body bg-white rounded-bottom">
        <div class="table-responsive table-card" style="margin-top: -39px; height: calc(100vh - 400px)" v-if="filter.reminder != 'For Release' && filter.reminder != 'Unclaimed Reports'">
            <table class="table align-middle table-centered mb-0">
                <thead class="table-light thead-fixed">
                    <tr class="fs-11">
                        <th style="width: 4%;"></th>
                        <th style="width: 22%;">Code</th>
                        <th style="width: 20%;" class="text-center">Manner of Disposal</th>
                        <th style="width: 18%;" class="text-center">Disposed By</th>
                        <th style="width: 16%;" class="text-center">Disposed Date</th>
                        <th style="width: 15%;" class="text-center">Status</th>
                        <th style="width: 5%;" ></th>
                    </tr>
                </thead>
                <tbody class="table-white fs-12">
                    <tr v-for="(list,index) in lists" v-bind:key="index">
                        <td class="text-center"> 
                            {{ (meta.current_page - 1) * meta.per_page + index + 1 }}.
                        </td>
                        <td>
                            <h5 class="fs-13 mb-0 fw-semibold text-primary">{{list.sample.code}}</h5>
                            <p class="fs-13 text-muted mb-0">{{list.sample.name}}</p>
                        </td>
                        <td class="text-center">{{list.disposal}}</td>
                        <td class="text-center">{{list.user}}</td>
                        <td class="text-center" v-if="list.status.name == 'Completed'">{{list.disposed_at}}</td>
                        <td class="text-center" v-else>{{timeAgo(list.created_at)}}</td>
                        <td class="text-center">
                            <span :class="'badge '+list.status.color">{{list.status.name}}</span>
                        </td>
                        <td class="text-end">
                            <b-button v-if="list.status.name == 'Pending'" @click="openDispose(list,index)" variant="soft-danger" v-b-tooltip.hover title="Dispose" size="sm">
                                <i class="ri-delete-bin-2-fill align-bottom"></i>
                            </b-button>
                            <b-button v-else @click="openCancel(list,index)" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
                                <i class="ri-eye-fill align-bottom"></i>
                            </b-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <Pagination class="ms-2 me-2 mt-n1" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
    </div>
    <Create @success="updateData" :disposals="dropdowns.disposals" ref="disposal"/>
</template>
<script>
import _ from 'lodash';
import Create from './Modals/Create.vue';
import simplebar from "simplebar-vue";
import Multiselect from "@vueform/multiselect";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Multiselect, simplebar, Create },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            index: null,
            filter: {
                keyword: null,
                laboratory: null
            },
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        },
        "filter.laboratory"(newVal){
            this.fetch();
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/samples';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    count: 15,
                    laboratory: this.filter.laboratory,
                    option: 'disposals'
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));
        },
        timeAgo(date) {
            const createdDate = new Date(date);
            const now = new Date();
            const diffTime = Math.abs(now - createdDate);
            const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));

            if (diffDays === 0) return "Today";
            if (diffDays === 1) return "1 day ago";
            return `${diffDays} days ago`;
        },
        openCreate(){
            this.$refs.disposal.show();
        },
        openDispose(data,index){
            this.index = index;
            this.$refs.disposal.show(data);
        },
        updateData(data){
            this.lists[this.index] = data;
        },
        refresh(){
            this.filter.laboratory = null;
            this.fetch();
        }
    }
}
</script>