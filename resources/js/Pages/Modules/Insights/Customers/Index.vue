<template>
    <Head title="Customer Insights"/>
    <PageHeader title="Customer Insights" pageTitle="Menu" />
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
            <Bar/>
        </BCol>
        <BCol xl="4">
            <Info :lists="info1" :lists2="info2"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Tsr :tsrs="tsrs" :total="total_tsrs"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Spender :spenders="spenders"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Location :location="location" :total="100"/>
        </BCol>
        <!-- <BCol xl="4" class="mt-n1">
            <Location :location="location" :total="customer.total"/>
        </BCol> -->
        <BCol xl="4" class="mt-n1">
            <Industry :years="years" :info="info" :industries="industries"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Purpose :years="years" :info="info" :purposes="purposes"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Discount :years="years" :info="info" :discounts="discounts"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <IndustryFirm :years="years" :info="info" :industriesfirm="industriesfirm"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <PurposeFirm :years="years" :info="info" :purposesfirm="purposesfirm"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Breakdown :years="years" :info="info" :breakdowns="breakdowns"/>
        </BCol>
        <!-- <BCol xl="4" class="mt-n1">
            <Gender :years="years" :info="info" :genders="genders"/>
        </BCol> -->
    </BRow>
</template>
<script>
import Bar from './Components/Bar.vue';
import Tsr from './Components/Tsr.vue';
import Info from './Components/Info.vue';
import Gender from './Components/Gender.vue';
import Spender from './Components/Spender.vue';
import Location from './Components/Location.vue';
import Industry from './Components/Industry.vue';
import Purpose from './Components/Purpose.vue';
import Discount from './Components/Discount.vue';
import Breakdown from './Components/Breakdown.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import IndustryFirm from './Components/IndustryFirm.vue';
import PurposeFirm from './Components/PurposeFirm.vue';
export default {
    props: ['types','info','years'],
    components: { PageHeader, Industry, Gender, Spender, Tsr, Location, Bar, Multiselect, Purpose, Discount, Info, Breakdown, IndustryFirm, PurposeFirm },
    data(){
        return {
            currentUrl: window.location.origin,
            year: this.info.year,
            laboratory: null,
            industries: [],
            discounts: [],
            purposes: [],
            tsrs: [],
            info1: [],
            info2: [],
            total_tsrs: null,
            spenders: [],
            location: [],
            breakdowns: [],
            industriesfirm: [],
            purposesfirm: [],
            genders: [],
            total: null,
        }
    },
    created(){
        this.fetch();
    },
    watch: {
        "year"(newVal){
            this.fetch();
        },
        "laboratory"(newVal){
            this.fetch();
        }
    },
    methods: {
        fetch(){
            axios.get('/insights',{
                params : {
                    laboratory: this.laboratory,
                    month: this.month,
                    year: this.year,
                    option: 'customers'
                }
            })
            .then(response => {
                this.industries = response.data.industries; 
                this.purposes = response.data.purposes;
                this.discounts = response.data.discounts;
                this.tsrs = response.data.tsrs;
                this.spenders = response.data.spenders;
                this.total_tsrs = response.data.total_tsrs;
                this.info1 = response.data.info;
                this.info2 = response.data.info2;
                this.location = response.data.location;
                this.breakdowns = response.data.breakdowns;
                this.industriesfirm = response.data.industriesfirm;
                this.purposesfirm = response.data.purposesfirm;
                this.genders = response.data.genders;
            })
            .catch(err => console.log(err));
        },
    }
}
</script>