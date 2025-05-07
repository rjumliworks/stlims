<template>
    <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Calibration Notice</p>
    <b-list-group>
        <BListGroupItem @click="filterReminder(list.name)" v-for="(list,index) in calibrations" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.name)) ? 'bg-info-subtle' : ''">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="avatar-xs">
                        <div class="avatar-title rounded" :class="list.color">
                        <i class="fs-15" :class="list.icon"></i>
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
    <p class="text-muted text-uppercase fs-12 fw-medium mb-2 mt-4">Maintenance Notice</p>
    <b-list-group>
        <BListGroupItem @click="filterReminder(list.name)" v-for="(list,index) in maintenances" v-bind:key="index" style="cursor: pointer;" :class="(isActive(list.name)) ? 'bg-info-subtle' : ''">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="avatar-xs">
                        <div class="avatar-title rounded" :class="list.color">
                        <i class="fs-15" :class="list.icon"></i>
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
 </template>
 <script>
 export default {
    props: ['calibrations','maintenances'],
    data(){
        return {
            activeList: null
        }
    },  
    methods: {
        filterReminder(data){
            if(data == this.activeList){
                this.activeList = null;
            }else{
                this.activeList = data;
            }
            // this.$refs.lists.filterReminder(data,this.activeList);
            this.$emit('response',data,this.activeList)
        },
        isActive(name) {
            return this.activeList === name;
        },
    }
 }
 </script>