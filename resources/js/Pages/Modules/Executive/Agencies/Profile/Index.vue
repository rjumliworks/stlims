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
                                    <h5 class="mb-0 fs-14"><span class="text-body">Reports</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">A comprehensive list of all TSRs (Test Service Requests) and Conformes, including their statuses and associated details.</p>
                                </div>
                            </div>
                        </div>
                        
                      
                        <div class="card-body bg-white rounded-bottom"  style="height: calc(100vh - 354px); overflow: auto;">
                            
                        </div>
                    </div>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
</template>
<script>
import Top from './Top.vue';
import Sidebar from './Sidebar.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props:['selected','laboratories'],
    components: { PageHeader, Top, Sidebar },
    data(){
        return {
            menus: [
                'TSRs','Conformes','Activity Logs'
            ],
            index: null,
        }
    }
}
</script>