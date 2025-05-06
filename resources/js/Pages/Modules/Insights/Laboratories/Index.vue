<template>
    <Head title="Laboratory Insights"/>
    <PageHeader title="Laboratory Insights" pageTitle="Menu" />
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg="12">
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" placeholder="Search Request" class="form-control" style="width: 20%;">
                <Multiselect class="white" style="width: 15%;" :options="types" v-model="laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" />
                <Multiselect class="white" style="width: 15%;" :options="years" v-model="year" label="name" :searchable="true" placeholder="Select Year" />
                <b-button type="button" variant="primary"> Filter Data </b-button>
            </div>
        </b-col>
    </b-row>
    <hr class="text-muted"/>
    <BRow class="g-3" style="height: calc(100vh - 300px); overflow: auto;">
        <BCol xl="8">
            <Bar :y="y" ref="bar"/>
        </BCol>
        <BCol xl="4">
            <Info :lists="info" :lists2="info2"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Tsr :tsrs="tsrs"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Sample :samples="samples"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Analysis :analyses="analyses"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Earning :earnings="earnings"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Gratis :gratis="gratis"/>
        </BCol>
        <BCol xl="4"  class="mt-n1">
            <Discount :discounts="discounts"/>
        </BCol>
    </BRow>
</template>
<script>
import Tsr from './Components/Tsr.vue';
import Bar from './Components/Bar.vue';
import Info from './Components/Info.vue';
import Analysis from './Components/Analysis.vue';
import Discount from './Components/Discount.vue';
import Sample from './Components/Sample.vue';
import Gratis from './Components/Gratis.vue';
import Earning from './Components/Earning.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['types','y','years'],
    components: { PageHeader, Tsr, Earning, Bar, Sample, Gratis, Multiselect, Analysis, Info, Discount },
    data(){
        return {
            currentUrl: window.location.origin,
            year: this.y,
            laboratory: null,
            tsrs: [],
            samples:[],
            earnings: [],
            gratis: [],
            total: [],
            analyses: [],
            discounts: [],
            info: [],
            info2: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    watch: {
        "year"(newVal){
            this.fetch();
        },
        "laboratory"(newVal){
            this.fetch();
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        fetch(){
            axios.get('/insights',{
                params : {
                    laboratory: this.laboratory,
                    month: this.month,
                    year: this.year,
                    option: 'laboratories'
                }
            })
            .then(response => {
                this.tsrs = response.data.tsrs; 
                this.samples = response.data.samples;
                this.gratis = response.data.gratis;
                this.earnings = response.data.earnings;
                this.analyses = response.data.analyses;
                this.info = response.data.info;
                this.info2 = response.data.info2;
                this.discounts = response.data.discounts;
            })
            .catch(err => console.log(err));
        }
    }
}
</script>