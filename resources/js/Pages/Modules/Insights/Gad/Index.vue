<template>
    <Head title="GAD"/>
    <PageHeader title="Gender and Development" pageTitle="Menu" />
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
    <BRow>
        <div class="col-md-4">
            <Gender :genders="genders" :discounts="discounts" ref="gender"/>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <Bar ref="bar" :y="y"/>
                </div>
                <div class="col-md-6">
                    <Purpose :purposes="purposes" ref="gender"/>
                </div>
                <div class="col-md-6">
                    <Laboratory :laboratories="laboratories" ref="gender"/>
                </div>
            </div>
        </div>
    </BRow>
</template>
<script>
import Bar from './Components/Bar.vue';
import Gender from './Components/Gender.vue';
import Purpose from './Components/Purpose.vue';
import Laboratory from './Components/Laboratory.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['types','info','years','y'],
    components: { PageHeader, Multiselect, Gender, Bar, Purpose, Laboratory },
    data(){
        return {
            currentUrl: window.location.origin,
            date: this.info.date,
            laboratories: [],
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
            genders: [],
            purposes: [],
            laboratories: []
        }
    },
    created(){
        this.fetch();
    },
    watch: {
        "date"(newVal){
            this.fetch();
        }
    },
    methods: {
        fetch(){
            axios.get('/insights',{
                params : {
                    date: this.date,
                    option: 'gad'
                }
            })
            .then(response => {
                this.discounts = response.data.discounts;
                this.genders = response.data.genders;   
                this.purposes = response.data.purposes;    
                this.laboratories = response.data.laboratories;
            })
            .catch(err => console.log(err));
        },
    }
}
</script>