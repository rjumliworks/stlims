<template>
    <div class="auth-page-wrapper d-flex flex-column">
        <div class="auth-page-content" style="background-color: #a88cd3; overflow: hidden; margin-bottom: -30px;">
           <section class="selected-section text-white d-flex flex-column align-items-center justify-content-start px-4 py-5">
                <div class="top-bar d-flex align-items-center justify-content-between w-100 mb-4 mt-n4">
                    <img src="/images/gad.png" alt="Logo" class="logo-small" />
                    <b-col md="auto">
                        <div class="hstack gap-4 flex-wrap mt-2">
                            <Link href="/gadinfosys">
                                    <div style="margin-top: -8px;">  
                                    <b-button variant="purple" block><i class="ri-delete-back-2-fill me-1"></i> Back</b-button>
                                </div>
                            </Link>
                        </div>
                    </b-col>
                </div>
            </section>
            <div class="row p-4 justify-content-start" style="margin-top: -75px" v-if="id">
                <div class="col-md-12">
                    <div class="card border">
                        <div class="card-body">
                            <div class="d-flex flex-wrap" style="cursor: pointer;">
                                <div class="avatar-sm">
                                    <div
                                        class="avatar-title bg-light rounded-circle fs-20 text-purple">
                                        <i class="ri-bar-chart-2-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 mt-1">
                                    <p class="fw-semibold fs-15 text-purple text-truncated mb-0">DOSTIX RSTL Workforce Data</p>
                                    <h5 class="mb-0 text-muted fs-13">View and manage employee information and staffing data for RSTL operations.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Gender</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="gender"
                                        :options="chartOptions" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ gender[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Employment Status</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="employment"
                                        :options="chartOptions2" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions2.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ employment[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Civil Status</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="civil_status"
                                        :options="chartOptions3" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions3.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ civil_status[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Age Group</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                           <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="age"
                                        :options="chartOptions4" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions4.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ age[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Educational Attainment</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="edu"
                                        :options="chartOptions5" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions5.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ edu[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                               <h5 class="mb-3 fs-12 fw-semibold"><span class="text-purple">Role Distribution</span></h5>
                            </div>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-5">
                                    <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="160" :series="roles"
                                        :options="chartOptions6" style="float: left;">
                                    </apexchart>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-sm table-striped fs-10 mt-n1">
                                        <tbody>
                                            <tr v-for="(list,index) in chartOptions6.labels" v-bind:key="index">
                                                <td>{{list}} :</td>
                                                <td class="text-end">{{ roles[index] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <b-button variant="danger" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </b-button>
    </div>
</template>

<script>
    export default {
        layout: null,
        props: ['id'],
        data() {
            return {
                colors: ['bg-primary', 'bg-danger', 'bg-success', 'bg-warning', 'bg-info', 'bg-seconday'],
                gender: [12,9],
                employment: [2,19],
                civil_status: [14,7,0],
                age: [0,13,5,1,2,0],
                edu: [15,3,4],
                roles: [11,3,2,1,1,3],
                series: [],
                chartOptions: {
                    chart: {type: 'pie',height: 50,},
                    labels: ['Male', 'Female'],
                    colors: ['#39a6c6', '#d86885'],
                    legend: {show: false}
                },
                chartOptions2: {
                    chart: {type: 'pie',height: 50,},
                    labels: ['Regular', 'COS'],
                    colors: ['#39a6c6', '#d86885'],
                    legend: {show: false}
                },
                chartOptions3: {
                    chart: {type: 'pie',height: 50,},
                    labels: ['Single', 'Married','Widowed'],
                    colors: ['#39a6c6', '#d86885'],
                    legend: {show: false}
                },
                chartOptions4: {
                    chart: {type: 'pie',height: 50,},
                    labels: ['15-24','25-34','35-44','45-54','55-64','65+'],
                    colors: ['#39a6c6','#d86885','#65b089','#f5c136','#9824e9','#318f78'],
                    legend: {show: false}
                },
                chartOptions5: {
                    chart: {type: 'pie',height: 50,},
                    labels: ['College Graduate','Masters','College Level'],
                    colors: ['#39a6c6','#d86885','#65b089','#f5c136','#9824e9','#318f78'],
                    legend: {show: false}
                },
                chartOptions6: {
                    chart: {type: 'pie',height: 80,},
                    labels: ['Analyst','Technical Manager','Project Staff','IT','Utility','Laboratory Aide'],
                    colors: ['#39a6c6','#d86885','#ffd986','#629359','#c296fe','#fc8282'],
                    legend: {show: false}
                }
            };
        },
        methods: {
            topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        },
        mounted() {
            let backtoTop = document.getElementById("back-to-top");
            if (backtoTop) {
                window.onscroll = function () {
                    backtoTop.style.display =
                        document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ? "block" :
                        "none";
                };
            }
        }
    };

</script>

<style scoped>
    .auth-page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .auth-page-content {
        flex: 1 0 auto;
    }
    .top-bar {
        position: relative;
        top: 0;
        left: 0;
        height: 80px;
        background-color: rgba(255, 255, 255, 0.15);
        padding: 0.5rem 1rem;
        border-radius: 3px;
    }
    .logo-small {
        height: 80px;
        object-fit: contain;
    }
    .selected-content {
        max-width: 100%;
    }
</style>
