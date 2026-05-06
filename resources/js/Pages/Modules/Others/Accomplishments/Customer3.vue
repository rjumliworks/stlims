<template lang="">
    <Head title="Target vs Accomplishment"/>
    <div class="auth-page-wrapper d-flex min-vh-100">
        <div class="auth-page-content">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-content w-100 p-4 pb-0" ref="box">
                     <b-row class="mt-2">
                        <b-col lg>
                            <div class="input-group mb-1">
                                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                <input type="text" placeholder="Accomplishments" class="form-control" style="width: 20%;">
                                <Multiselect class="white" style="width: 15%;" :options="discounts" v-model="discount" label="name" :allow-empty="false" :searchable="true" placeholder="Select Discount" />
                                <Multiselect class="white" style="width: 15%;" :options="laboratories" v-model="laboratory" label="name" :allow-empty="false" :searchable="true" placeholder="Select Laboratory" />
                                <Multiselect class="white" style="width: 15%;" :options="months" v-model="month" label="name" :allow-empty="false" :searchable="true" placeholder="Select Month" />
                                <Multiselect class="white" style="width: 15%;" :options="years" v-model="year" label="name" :allow-empty="false" :searchable="true" placeholder="Select Year" />
                                 <b-button type="button" variant="light" @click="openExcel()">
                                    Download Excel
                                </b-button>
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-search-eye-fill align-bottom"></i>
                                </b-button>
                            </div>
                        </b-col>
                    </b-row>
                    <div class="table-responsive" style="margin-top: 5px; height: calc(100vh - 80px); overflow: auto;">
                        <table class="table table-light table-bordered table-striped table-nowrap align-middle">
                            <thead class="thead-fixed text-primary fs-11">
                                <tr class="bg-dark">
                                    <th class="align-middle">No.</th>
                                    <th class="text-center align-middle">TSR No.</th>
                                    <th class="align-middle">Customer Name</th>
                                    <th class="text-center align-middle">No. of Samples</th>
                                    <th class="text-center align-middle">No. of Services</th>
                                    <th class="text-center align-middle">Fees Collected</th>
                                    <th class="text-center align-middle table-danger">Discount</th>
                                    <th class="text-center align-middle table-success">Grouss Amount</th>
                                </tr>
                            </thead>
                            <tbody class="fs-10">
                                <tr style="cursor: pointer;" v-for="(item,index) in list" :key="`breakdown-${index}`">
                                    <td class="text-center">{{index+1}}</td>
                                    <td class="text-center">{{item.code}}</td>
                                    <td class="">{{item.name}}</td>
                                    <td class="text-center align-middle">{{item.samples}}</td>
                                    <td class="text-center align-middle">{{item.analyses}}</td>
                                    <td class="text-center align-middle">{{item.fees}}</td>
                                    <td class="text-center align-middle">{{item.discount}}</td>
                                    <td class="text-center align-middle">{{item.gross}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Multiselect from "@vueform/multiselect";
export default {
    layout: null,
    components: { Multiselect },
    props: ['years','selected','laboratories','discounts'],
    data(){
        return {
            selectedRow: null,
            months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
            years: this.years,
            year: new Date().getFullYear(),
            month: null, // new Date().getMonth()
            laboratory: null,
            discount: null,
            selectedRow: null, 
            selectedColumn: null,
            expandedRows: {},
            list: []
        }
    },
    created(){
        this.fetch();
    },
    watch: {
        'month'(){
            this.fetch();
        },
        'laboratory'(){
            this.fetch();
        },
        'discount'(){
            this.fetch();
        }
    },
    methods: {
        fetch(){
            axios.get('/accomplishments',{
                params : {
                    month: this.month,
                    year: this.year,
                    laboratory: this.laboratory,
                    discount: this.discount,
                    option: 'customer3_data'
                }
            })
            .then(response => {
                this.list = response.data;
            })
            .catch(err => console.log(err));
        },
        toggleRow(index) {
           this.expandedRows[index] = !this.expandedRows[index];
        },
        selectRow(index) {
            this.selectedRow = (this.selectedRow == index) ? null : index;
        },
        selectColumn(index) {
            this.selectedColumn = (this.selectedColumn == index) ? null : index;
        },
        openExcel(){
            window.open('/accomplishments?option=excel3&month='+this.month+'&year='+this.year+'&laboratory='+this.laboratory+'&discount='+this.discount);
        },
        formatMoney(value) {
            let val = (value / 1).toFixed(2).replace(',', '.');
            return '₱' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
    }
}
</script>
<style scoped>
.auth-page-wrapper .auth-page-content {
    padding-bottom: 0px;
  width: 100%;
  overflow: hidden;
  background-color: #f3f3f9;
}
.file-manager-sidebar {
  min-width: 24%;
  max-width: 24%;
  height: calc(100vh - 92px);
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}
</style>
