<template>
    <div class="row g-3">
        <div class="col-md-12 mb-n4">
            <div class="card shadow-none border">
                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="fs-24" :class="(name) ? name.icon+' '+name.color : 'ri-gps-fill text-primary'"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">{{(name) ? name.name : 'Testing Progress Tracker'}}</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">{{ (name) ? name.description : 'Monitoring the status of tests from pending to completion'}}</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="input-group mb-0">
                                    <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                    <input type="text"  placeholder="Search Sample Code/Name" v-model="filter.keyword" class="form-control" style="width: 30%;">
                                    <select v-model="filter.month" class="form-select" id="inputGroupSelect01" style="width: 30%;">
                                        <option :value="null" selected>Filter by month</option>
                                        <option v-for="month in months" :key="month.value" :value="month.value"> {{ month.name }}</option>
                                    </select>
                                      <b-button type="button" variant="primary"  @click="(checked1.length > 0 || checked2.length > 0) ? openUpdate() : '' ">
                                        <i class="ri-timer-line search-icon"></i> Update
                                    </b-button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-body  bg-white">
                    <p class="mb-0 text-primary fs-12 fw-semibold">Analyst Performance Summary</p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-none border">
                <div class="card-header bg-warning-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2rem;width:2rem;">
                                <span class="avatar-title bg-warning text-primary rounded-circle fs-4">
                                    <i class="ri-add-circle-fill text-light align-middle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Pending Tests</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Tests awaiting action or completion</p>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </div>
                <div class="card-body bg-light-subtle border-bottom">
                    <p class="mb-0 text-primary text-center fw-semibold fs-12">
                        <input v-if="filter.keyword" class="form-check-input float-start fs-16 mt-0" v-model="mark1" type="checkbox" value="option" />
                         {{pendings.length}} Sample ready for test
                    </p>
                </div>
                <div class="card shadow-none" no-body style="height: calc(100vh - 505px)">
                    <simplebar data-simplebar style="height: calc(100vh - 500px);">
                        <BRow v-if="pendings.length > 0">
                            <BCol lg="12" class="project-card mb-n3" v-for="(item, index) of pendings" :key="index">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center"> 
                                            <input type="checkbox" v-model="item.selected" @change="toggleChecked($event, item, index)"  class="form-check-input me-2" />
                                            <div class="flex-grow-1 text-muted" style="cursor: pointer;"  @click="openShow(item,'Pending')">
                                                <h6 class="card-title mb-n1 fs-14 fw-semibold"><span class="text-primary">{{item.code}}</span></h6>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="text-muted"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{formatShortMonth(item.tsr.due_at)}}</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column h-100 mt-1" style="cursor: pointer;"  @click="openShow(item,'Pending')">
                                            <div class="mt-auto">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">{{item.name}}</div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div>
                                                            <i class="ri-list-check align-bottom me-1 text-muted"></i>
                                                            {{(item.ongoing)}}/{{(item.count-item.completed)}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress progress-sm animated-progess">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" :style="`width: ${item.progressBar};`"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </BCol>
                        </BRow>
                        <div v-else class="alert alert-light mb-0 text-center" role="alert"><span class="fs-12 text-muted">No test available</span></div>
                    </simplebar>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-none border">
                <div class="card-header bg-info-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2rem;width:2rem;">
                                <span class="avatar-title bg-info text-primary rounded-circle fs-4">
                                    <i class="ri-record-circle-fill text-light align-middle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Ongoing Tests</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Tests currently in progress or under review</p>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </div>
                <div class="card-body bg-light-subtle border-bottom bg-white">
                     <input v-if="filter.keyword" class="form-check-input float-start fs-16 mt-0" v-model="mark2" type="checkbox" value="option" />
                    <p class="mb-0 text-primary fs-12 fw-semibold text-center">{{ongoings.length}} ongoing test</p>
                </div>
                <div class="card bg-white shadow-none" no-body style="height: calc(100vh - 505px)">
                    <simplebar data-simplebar style="height: calc(100vh - 500px);">
                        <BRow v-if="ongoings.length > 0">
                            <BCol lg="12" class="project-card mb-n3" v-for="(item, index) of ongoings" :key="index">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                             <input type="checkbox" v-model="item.selected" @change="toggleChecked1($event, item, index)" class="form-check-input me-2" />    
                                            <div class="flex-grow-1 text-muted" style="cursor: pointer;" @click="openShow(item,'Ongoing')">
                                                <h6 class="card-title mb-n1 fs-14 fw-semibold"><span class="text-primary">{{item.code}}</span></h6>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="text-muted"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{formatShortMonth(item.tsr.due_at)}}</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column h-100 mt-1" style="cursor: pointer;" @click="openShow(item,'Ongoing')">
                                            <div class="mt-auto">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">{{item.name}}</div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div>
                                                            <i class="ri-list-check align-bottom me-1 text-muted"></i>{{item.ongoing}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress progress-sm animated-progess">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" :style="`width: ${item.progressBar};`"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </BCol>
                        </BRow>
                        <div v-else class="alert alert-light mb-0 text-center" role="alert"><span class="fs-12 text-muted">No test available</span></div>
                        </simplebar>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-none border">
                <div class="card-header bg-success-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2rem;width:2rem;">
                                <span class="avatar-title bg-success text-primary rounded-circle fs-4">
                                    <i class="ri-checkbox-circle-fill text-light align-middle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Completed Tests</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Tests finalized and ready for reporting</p>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </div>
                <div class="card-body bg-light-subtle border-bottom bg-white">
                    <p class="mb-0 text-primary fs-12 fw-semibold text-center">{{completeds.length}} samples completed</p>
                </div>
                <div class="card bg-white shadow-none" no-body style="height: calc(100vh - 505px)">
                    <simplebar data-simplebar style="height: calc(100vh - 500px);">
                        <BRow v-if="completeds.length > 0">
                        <BCol lg="12" class="project-card mb-n3" v-for="(item, index) of completeds" :key="index">
                            <div class="card" style="cursor: pointer;" @click="openShow(item,'Completed')">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 text-muted">
                                            <h6 class="card-title mb-n1 fs-14 fw-semibold"><span class="text-primary">{{item.code}}</span></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="text-muted"><i class="ri-calendar-event-fill me-1 align-bottom"></i>{{formatShortMonth(item.tsr.due_at)}}</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column h-100 mt-1">
                                        <div class="mt-auto">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1">
                                                    <div class="text-muted">{{item.name}}</div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div>
                                                        <i class="ri-list-check align-bottom me-1 text-muted"></i>{{item.completed}}/{{item.count}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress progress-sm animated-progess">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" :style="`width: ${(item.completed/item.count)*100}%;`"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </BCol>
                    </BRow>
                    <div v-else class="alert alert-light mb-0 text-center" role="alert"><span class="fs-12 text-muted">No test available</span></div>
                    </simplebar>
                </div>
            </div>
        </div>
    </div>
    <Show @update="fetch()" ref="show"/>
    <Update @update="updateList" ref="update"/>
</template>
<script>
import _ from 'lodash';
import Show from '../Modals/Show.vue';
import Update from '../Modals/Update.vue';
import simplebar from "simplebar-vue";
export default {
    components: { simplebar, Show, Update },
    props: ['searchQuery'],
    data() {
        return {
            pendings: [],
            ongoings: [],
            completeds: [],
            name: null,
            showSoon: false,
            showDueToday: false,
            showOverdue: false,
            filter: {
                keyword: null,
                month: null,
                reminder: null
            },
            mark1: null,
            mark2: null,
            checked1: [],
            checked2: [],
            months: [
                { value: '1', name: 'January' },
                { value: '2', name: 'February' },
                { value: '3', name: 'March' },
                { value: '4', name: 'April' },
                { value: '5', name: 'May' },
                { value: '6', name: 'June' },
                { value: '7', name: 'July' },
                { value: '8', name: 'August' },
                { value: '9', name: 'September' },
                { value: '10', name: 'October' },
                { value: '11', name: 'November' },
                { value: '12', name: 'December' }
            ]
        };
    },
    created(){
        this.fetch();
    }, 
    watch: {
        "filter.month"(newVal){
            this.setMonth(newVal);
        },
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        },
        "mark1"(){
            if(this.mark1){
                this.pendings.forEach(item => {
                    item.selected = true;
                    this.checked1.push(item);
                });
            }else{
                this.pendings.forEach(item => {
                    item.selected = false;
                });
                this.checked1 = [];
            }
            this.mark2 = null;
            this.checked2 = [];
        },
         "mark2"(){
            if(this.mark2){
                this.ongoings.forEach(item => {
                    item.selected = true;
                    this.checked2.push(item);
                });
            }else{
                this.ongoings.forEach(item => {
                    item.selected = false;
                });
                this.checked2 = [];
            }
            this.mark1 = null;
            this.checked1 = [];
        },
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
                    month: this.filter.month,
                    reminder: this.filter.reminder,
                    option: 'tagging'
                }
            })
            .then(response => {
                if(response){
                    this.pendings = response.data.pendings;
                    this.ongoings = response.data.ongoings;
                    this.completeds = response.data.completeds;          
                }
            })
            .catch(err => console.log(err));
        },
        filterReminder(data,status){
            if(status){
                this.name = data;
                this.filter.reminder = data.name;
                this.fetch();
            }else{
                this.name = null;
                this.refresh();
            }
        },
        toggleChecked(event, item, index) {
            this.checked2 = [];
            this.ongoings.forEach(i => i.selected = false);
            const isChecked = event.target.checked;
            this.pendings[index].selected = isChecked;
            if (isChecked) {
                this.pendings[index].selected = true;
                this.checked1.push(item);
            }else{
                this.pendings[index].selected = false;
            }
        },
        toggleChecked1(event, item, index) {
            this.checked1 = [];
            this.pendings.forEach(i => i.selected = false);
            const isChecked = event.target.checked;
            this.ongoings[index].selected = isChecked;
            if (isChecked) {
                this.ongoings[index].selected = true;
                this.checked2.push(item);
            }else{
                this.pendings[index].selected = false;
            }
        },
        setMonth(data){
            this.filter.month = data;
            this.fetch();
        },
        setKeyword(data){
            this.filter.keyword = data;
            this.fetch();
        },
        openShow(data,status){
            this.$refs.show.show(data,status);
        }, 
        openUpdate(){
            if(this.mark1){
                this.$refs.update.show(this.checked1);
            }else{
                if(this.checked1.length > 0){
                    this.$refs.update.show(this.checked1);
                }else{
                    this.$refs.update.show(this.checked2);
                }
            }
        },
        updateList(){
            this.fetch();
            this.checked1 = [];
            this.checked2 = [];
            this.mark1 = null;
            this.mark2 = null;
        },
        refresh(){
            this.filter.reminder = null;
            this.fetch();
        },
        formatShortMonth(date) {
            return new Date(date).toLocaleDateString('en-US', {
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            });
        }
    }
}
</script>