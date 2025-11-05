<template lang="">
    <Head title="Equipments"/>
    <PageHeader title="Equipments" pageTitle="Menu" />
    <b-row class="g-3">
        <div class="col-md-12">
            <div class="row g-3 mb-n4">
                <div class="col-md-3">
                    <div class="card shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2.5rem;width:2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-error-warning-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">Equipment Service Status</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">Tracks calibration and maintenance alerts</p>
                                </div>
                                <div class="flex-shrink-0">
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom bg-white">
                            <p class="mb-0 text-primary fs-12 fw-semibold">Calibration Notice</p>
                        </div>
                        <div class="card bg-white border-bottom shadow-none mb-0" style="height: calc(100vh - 343px); overflow: auto;">
                            
                            <b-list-group flush>
                                <BListGroupItem @click="filterReminder(list.name)" v-for="(list,index) in dropdowns.calibrations" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.name)) ? 'bg-info-subtle' : ''">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded" :class="list.color">
                                                    <i :class="list.icon+' '+list.color"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0 fs-12">{{list.name}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{list.description}}</p>
                                        </div>
                                        <span class="text-muted fs-12">{{list.count}} </span>
                                    </div>
                                </BListGroupItem>
                            </b-list-group>
                            <!-- <hr class="text-muted mt-0"/> -->
                                <p class="ms-3 mb-0 mt-3 text-primary fs-12 fw-semibold">Maintenance Notice</p>
                            <hr class="text-muted"/>
                            <!-- <ul class="list-group list-group-flush border-dashed mb-n3 mt-n4 p-3">
                                <li class="list-group-item px-0" v-for="(list,index) in dropdowns.maintenances" v-bind:key="index">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <span class="avatar-title bg-light p-1 rounded-circle">
                                                <i :class="list.icon+' '+list.color"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0 fs-12">{{list.name}}</h6>
                                            <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mt-2 fs-12">{{list.count}}</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                             <b-list-group flush>
                                <BListGroupItem @click="filterReminder(list.name)"  v-for="(list,index) in dropdowns.maintenances" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.name)) ? 'bg-info-subtle' : ''">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded" :class="list.color">
                                                    <i :class="list.icon+' '+list.color"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0 fs-12">{{list.name}}</h5>
                                            <p class="mb-0 fs-11 text-muted">{{list.description}}</p>
                                        </div>
                                        <span class="text-muted fs-12">{{list.count}} </span>
                                    </div>
                                </BListGroupItem>
                            </b-list-group>
                            <!-- <ul class="list-group list-group-flush border-dashed mb-n3 mt-n1 p-3">
                                <li class="list-group-item px-0" v-for="(list,index) in dropdowns.lists" v-bind:key="index">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <span class="avatar-title bg-light p-1 rounded-circle">
                                                <i :class="list.icon+' '+list.color"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0 fs-12">{{list.name}}</h6>
                                            <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mt-2">{{list.count}}</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <hr class="text-muted"/>
                                <p class="ms-3 mb-0 text-primary fs-12 fw-semibold">Release Progress by Age</p>
                            <hr class="text-muted"/>

                            <ul class="list-group list-group-flush border-dashed mb-n3 mt-n3 p-3">
                                <li class="list-group-item px-0" v-for="(list,index) in dropdowns.age" v-bind:key="index">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <span class="avatar-title bg-light p-1 rounded-circle">
                                                <i :class="list.icon+' '+list.color"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0 fs-12">{{list.name}}</h6>
                                            <p class="fs-11 mb-0 text-muted">{{ list.description }}</p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mt-2">{{list.count}}</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card bg-light-subtle shadow-none border">
                        <Lists :dropdowns="dropdowns" ref="lists"/>
                    </div>
                </div>
            </div>
        </div>
    </b-row>
</template>
<script>
import Lists from './Components/Lists.vue';
import Sidebar from './Components/Sidebar.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    components: { PageHeader, Lists, Sidebar },
    props: ['dropdowns'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
            },
             activeList: null,
        }
    },   
    methods: {
        handleResponse(data, activeList) {
            // console.log(data); // First argument
            // console.log(activeList); // Second argument
            this.$refs.lists.filterReminder(data,activeList);
        },
        filterReminder(data){
            if(data == this.activeList){
                this.activeList = null;
            }else{
                this.activeList = data;
            }
            this.$refs.lists.filterReminder(data,this.activeList,this.laboratory);
        },
        isActive(name) {
            return this.activeList === name;
        },
    }
}
</script>