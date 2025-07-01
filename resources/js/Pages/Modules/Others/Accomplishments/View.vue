<template lang="">
    <Head title="Target vs Accomplishment"/>
    <div class="auth-page-wrapper d-flex min-vh-100">
        <div class="auth-page-content">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-content w-100 p-4 pb-0" ref="box">
                     <b-row>
                        <b-col lg>
                            <div class="input-group mb-1">
                                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                                <input type="text" placeholder="Accomplishments" class="form-control" style="width: 40%;">
                                <Multiselect class="white" style="width: 15%;" :options="types" v-model="type" label="name" :allow-empty="false" :searchable="true" placeholder="Select Type" />
                                <Multiselect class="white" style="width: 15%;" :options="years" v-model="year" label="name" :allow-empty="false" :searchable="true" placeholder="Select Year" />
                                <Multiselect class="white" style="width: 15%;" :options="agencies" v-model="agency" label="short" :allow-empty="false" :searchable="true" placeholder="Select Agency" />
                                <b-button type="button" variant="primary" @click="openCreate">
                                    <i class="ri-search-eye-fill align-bottom"></i>
                                </b-button>
                            </div>
                        </b-col>
                    </b-row>
                    <table class="table table-bordered table-nowrap align-middle">
                        <thead class="text-white">
                            <tr>
                                <th colspan="23" class="text-center align-middle bg-primary ">{{selected.year}} Target vs Accomplishment</th>
                            </tr>
                            <tr class="fs-10">
                                <th class="text-center align-middle bg-dark" style="width: 3%;">No.</th>
                                <th class="text-center align-middle bg-dark" style="width: 15%;">OneLab KPI - Objective</th>
                                <th class="text-center align-middle bg-warning" style="width: 5%;">Filled By</th>
                                <th class="text-center align-middle bg-danger" style="width: 5%;">Target</th>
                                <th v-if="type == 'Quarters'" class="text-center align-middle bg-info" v-for="(list,index) in quarters" v-bind:key="index">{{list}}</th>
                                <th v-if="type == 'Months'" class="text-center align-middle bg-info" v-for="(list,index) in months" v-bind:key="index">{{list}}</th>
                                <!-- <th class="text-center align-middle bg-danger" style="width: 6%;">Total Target</th> -->
                                <th class="text-center align-middle bg-success" style="width: 8%;">Total</th>
                                <th class="text-center align-middle bg-success" style="width: 4%;">%</th>
                            </tr>
                        </thead>
                        <tbody class="fs-10">
                            <template v-for="(kpi, index) in Object.values(selected.kpis)" :key="index">
                                <tr class="bg-info-subtle fw-semibold">
                                    <td>{{ '1.' + (index + 1).toString().padStart(2, '0') }}</td>
                                    <td>{{ kpi.name }}</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">{{ formatNumber(kpi.target) }}</td>
                                    <td v-if="type == 'Quarters'" colspan="4"></td>
                                    <td v-if="type == 'Months'" colspan="12"></td>
                                    <td v-if="kpi.is_amount" class="text-center">{{ formatMoney(kpi.accomplish) }}</td>
                                    <td v-else class="text-center">{{ formatNumber(kpi.accomplish) }}</td>
                                </tr>
                                <template v-if="!kpi.is_consolidated">
                                    <tr v-for="(breakdown, bIndex) in kpi.breakdown" :key="`breakdown-${index}-${bIndex}`">
                                        <td class="text-center"></td>
                                        <td class="ps-4">{{ breakdown.name || '-' }}</td>
                                        <td class="text-center">-</td>
                                        <td v-if="kpi.is_amount" class="text-center">{{ formatMoney(breakdown.target) }}</td>
                                        <td v-else class="text-center">{{ breakdown.target }}</td>
                                        <template v-if="type == 'Months'" v-for="(m, mIndex) in breakdown.months" :key="mIndex">
                                            <td v-if="kpi.is_amount" class="text-center">{{formatMoney(m.accomplish)}}</td>
                                            <td v-else class="text-center">{{m.accomplish}}</td>
                                        </template>
                                        <template v-if="type == 'Quarters'">
                                            <td v-for="(q, qIndex) in groupByQuarter(breakdown.months,kpi.is_amount)" :key="'q' + qIndex" class="text-center">
                                                <span v-if="kpi.is_amount">{{ formatMoney(q.accomplish) }}</span>
                                                <span v-else>{{ q.accomplish }}</span>
                                            </td>
                                        </template>
                                        <td v-if="kpi.is_amount" class="text-center">{{ formatMoney(breakdown.accomplish) }}</td>
                                        <td v-else class="text-center">{{ formatNumber(breakdown.accomplish) }}</td>
                                    </tr>
                                </template>
                            </template>
                        </tbody>
                    </table>
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
    props: ['agencies','agency','selected'],
    data(){
        return {
            selectedRow: null,
            months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            quarters: ['1st Quarter','2nd Quarter','3rd Quarter','4th Quarter'],
            types: ['Months','Quarters'],
            type: 'Months',
            agency: this.agency,
            years: [],
            year: new Date().getFullYear(),
        }
    },
    computed: {
        quarterlySummary() {
            const quarters = [
                { quarter: "Q1", months: ["Jan", "Feb", "Mar"] },
                { quarter: "Q2", months: ["Apr", "May", "Jun"] },
                { quarter: "Q3", months: ["Jul", "Aug", "Sep"] },
                { quarter: "Q4", months: ["Oct", "Nov", "Dec"] }
            ];

            return quarters.map(q => {
                const total = this.monthlyData
                .filter(m => q.months.includes(m.name))
                .reduce((sum, m) => sum + m.accomplish, 0);

                return {
                    quarter: q.quarter,
                    accomplish: total,
                    is_amount: 0 
                };
            });
        }
    },
    methods: {
        groupByQuarter(months,is_amount) {
            const quarterMap = {
            Q1: ["Jan", "Feb", "Mar"],
            Q2: ["Apr", "May", "Jun"],
            Q3: ["Jul", "Aug", "Sep"],
            Q4: ["Oct", "Nov", "Dec"]
            };

            return Object.entries(quarterMap).map(([quarter, qMonths]) => {
            const matching = months.filter(m => qMonths.includes(m.name));
            const total = matching.reduce((sum, m) => {
                const val = Number(m.accomplish) || 0;
                return sum + val;
            }, 0);

            return {
                quarter,
                accomplish: total,
                months: matching // to keep the original breakdown if needed
            };
            });
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
        formatNumber(value) {
            if (!value) return '0';
            return Number(value).toLocaleString(undefined, {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2
            });
        },
        selectRow(index) {
            this.selectedRow = index;
        }
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
</style>
