<template>
    <Head title="Reports"/>
    <PageHeader title="Reports" pageTitle="List" />
    <div class="row g-2">
        <div class="col-lg-4">
            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                <div class="form-check card-radio">
                    <input id="paymentMethod01" v-model="type" name="paymentMethod" value="Performance" type="radio" class="form-check-input">
                    <label class="form-check-label" for="paymentMethod01">
                        <span class="fs-16 text-muted me-2"><i class="ri-bar-chart-2-fill align-bottom"></i></span>
                        <span class="fs-14 text-wrap">Performance Summary</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse" aria-expanded="true" aria-controls="paymentmethodCollapse">
                <div class="form-check card-radio">
                    <input id="paymentMethod02" v-model="type" name="paymentMethod" value="Customers" type="radio" class="form-check-input">
                    <label class="form-check-label" for="paymentMethod02">
                        <span class="fs-16 text-muted me-2"><i class="ri-team-fill align-bottom"></i></span>
                        <span class="fs-14 text-wrap">Customers</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-2">
            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                <div class="form-check card-radio">
                    <input id="paymentMethod03" v-model="type" name="paymentMethod" value="Laboratories" type="radio" class="form-check-input">
                    <label class="form-check-label" for="paymentMethod03">
                        <span class="fs-16 text-muted me-2"><i class="ri-flask-fill align-bottom"></i></span>
                        <span class="fs-14 text-wrap">Laboratories</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                <div class="form-check card-radio">
                    <input id="paymentMethod04" v-model="type" name="paymentMethod" value="Payments" type="radio" class="form-check-input">
                    <label class="form-check-label" for="paymentMethod04">
                        <span class="fs-16 text-muted me-2"><i class="ri-hand-coin-fill align-bottom"></i></span>
                        <span class="fs-14 text-wrap">Payments</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                <div class="form-check card-radio">
                    <input id="paymentMethod05" v-model="type" name="paymentMethod" type="radio" value="GAD" class="form-check-input">
                    <label class="form-check-label" for="paymentMethod05">
                        <span class="fs-16 text-muted me-2"><i class="ri-parent-fill align-bottom"></i></span>
                        <span class="fs-14 text-wrap">GAD Corner</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-n1">
            <hr class="text-muted"/>
        </div>
    </div>
    <Performance ref="performance" v-if="type == 'Performance'"/>
</template>
<script>
import _ from 'lodash';
import Performance from '../Insights/Daily/Index.vue';
import Multiselect from "@vueform/multiselect";
import PageHeader from '@/Shared/Components/PageHeader.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Multiselect, Performance },
    props:['years','info','types'],
    data(){
        return {
            currentUrl: window.location.origin,
            month: this.info.month,
            year: this.info.year,
            type: 'Performance',
            laboratories: [],
            samples: [],
            analyses: [],
            laboratory: null,
            total: [],
            months: ['January','February','March','April','May','June','July','August','September','October','November','December']
        }
    },
    watch: {
        "laboratory"(newVal){
            this.fetch();
        },
        "month"(newVal){
            this.fetch();
        },
        "year"(newVal){
            this.fetch();
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        fetch(){
            axios.get('/reports',{
                params : {
                    month: this.month,
                    year: this.year,
                    option: 'lists'
                }
            })
            .then(response => {
                this.laboratories = response.data.laboratories.lists; 
                this.total = response.data.laboratories.footer;         
            })
            .catch(err => console.log(err));
        },
        openView(type){
            window.open('/reports?type='+type+'&month='+this.month+'&year='+this.year+'&option=accounting&subtype=pdf'+'&laboratory='+this.laboratory);
        },
        openExcel(type){
            window.open('/reports?type='+type+'&month='+this.month+'&year='+this.year+'&option=accounting&subtype=excel'+'&laboratory='+this.laboratory);
        },
        openAccomplishmentView(id){
            window.open('/reports?option=pdf&month='+this.month+'&year='+this.year+'&laboratory='+id);
        },
        openAccomplishmentExcel(id){
            window.open('/reports?option=excel&month='+this.month+'&year='+this.year+'&laboratory='+id);
        },
        openReport(){
            window.open('/reports?option=reports&month='+this.month+'&year='+this.year+'&laboratory='+this.laboratory);
        },
        openTop(type){
            window.open('/reports?year='+this.year+'&option='+type+'&laboratory='+this.laboratory);
        },
    }
}
</script>