<template lang="">
    <Head :title="selected.data.name"/>
    <Top :selected="selected"/>
    <b-row class="g-3">
        <Sidebar :laboratories="laboratories" :selected="selected"/>
        <b-col lg="8">
            <b-row>
                <b-col lg="12 ">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-bar-chart-2-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">Profile</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">A comprehensive list of all TSRs (Test Service Requests) and Conformes, including their statuses and associated details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white rounded-bottom shadow-none mb-0">
                            <div class="step-arrow-nav mt-0">
                                <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(menu, index) in menus" v-bind:key="index">
                                        <button class="nav-link fs-12 p-3" :class="(index == 0) ? 'active' : ''" 
                                            :id="menu+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+index" 
                                            type="button" role="tab" :aria-controls="menu" aria-selected="true">
                                            {{menu}}
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      
                        <div class="card-body bg-white rounded-bottom"  style="height: calc(100vh - 408px); overflow: auto;">
                            <div class="tab-content">
                                <div class="tab-pane" :class="(index == 0) ? 'show active' : ''" :id="index" role="tabpanel" :aria-labelledby="menu+'-tab'" v-for="(menu, index) in menus" v-bind:key="index">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <transition mode="out-in">
                                                <div :key="index" class="tab-content">
                                                    <div v-if="menu == 'Reports'">1</div>
                                                    <div v-if="menu == 'Additional Services'">
                                                        <div class="card-header border-0">
                                                            <div class="d-flex align-items-center">
                                                                <h5 class="card-title mb-0 fs-13 flex-grow-1">Additional Services</h5>
                                                                <div class="flex-shrink-0">
                                                                <div class="d-flex flex-wrap gap-2">
                                                                    <button @click="addFee(selected.data.id)" class="btn btn-danger add-btn btn-sm">
                                                                        <i class="ri-add-line align-bottom me-1"></i> Add
                                                                    </button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap align-middle mb-0">
                                                                <thead class="table-light">
                                                                    <tr class="fs-11">
                                                                        <th style="width: 5%;"></th>
                                                                        <th>Name</th>
                                                                        <th style="width: 15%;" class="text-center">Status</th>
                                                                        <th style="width: 15%;" class="text-center">Fee</th>
                                                                        <th style="width: 7%;" ></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody v-if="selected.data.fees.length > 0" class="table-white fs-12">
                                                                    <tr v-for="(list,index) in selected.data.fees" v-bind:key="index">
                                                                        <td class="text-center"> {{ index + 1 }}.</td>
                                                                        <td class="fs-12">
                                                                            <h5 class="fs-12 mb-0">{{list.name}}</h5>
                                                                            <p class="fs-12 text-muted mb-0">{{list.description}}</p>
                                                                        </td>
                                                                        <td class="text-center fs-12">
                                                                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                                                                            <span v-else class="badge bg-danger">Inactive</span>
                                                                        </td>
                                                                        <td class="text-center fs-12">{{list.fee}}</td>
                                                                        <td class="text-end">
                                                                            <b-button variant="info" class="me-1" v-b-tooltip.hover title="View" size="sm">
                                                                                <i class="ri-eye-fill align-bottom"></i>
                                                                            </b-button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody v-else>
                                                                    <tr>
                                                                        <td colspan="5" class="text-center text-muted">No additional fees found</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
    <Fee ref="fee"/>
</template>
<script>
import Top from './Top.vue';
import Sidebar from './Sidebar.vue';
import Fee from './Modals/Fee.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props:['selected','laboratories'],
    components: { PageHeader, Top, Fee, Sidebar },
    data(){
        return {
            menus: [
                'Reports','Additional Services','Activity Logs'
            ],
            index: null,
        }
    },
    methods: {
        addFee(id){
            this.$refs.fee.show(id);
        }
    }
}
</script>