<template>
    <Head title="Payments Insights"/>
    <PageHeader title="Payments Insights" pageTitle="Menu" />
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
            <Bar ref="bar" :y="y"/>
        </BCol>
        <BCol xl="4">
            <Info :lists="info" :lists2="info2"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Status :lists="statuses"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Method :lists="methods"/>
        </BCol>
        <BCol xl="4" class="mt-n1">
            <Discount :lists="discounts"/>
        </BCol>
    </BRow>
</template>
<script>
import Bar from './Components/Bar.vue';
import Info from './Components/Info.vue';
import Status from './Components/Status.vue';
import Method from './Components/Method.vue';
import Discount from './Components/Discount.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['types','y','years'],
    components: { PageHeader, Multiselect, Status, Method, Discount, Info, Bar },
    data(){
        return {
            currentUrl: window.location.origin,
            year: this.y,
            laboratory: null,
            statuses: [],
            methods:[],
            discounts: [],
            info: [],
            info2: [],
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    created(){
        this.fetch();
    },
    watch: {
        "year"(newVal){
            this.fetch();
            this.$refs.bar.updateYear(this.year);
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
                    option: 'payments'
                }
            })
            .then(response => {
                this.statuses = response.data.statuses; 
                this.methods = response.data.methods;
                this.discounts = response.data.discounts;
                this.info = response.data.info;
                this.info2 = response.data.info2;
            })
            .catch(err => console.log(err));
        },
    }
}
</script>