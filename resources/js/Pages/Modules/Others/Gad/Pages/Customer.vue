<template>
    <div class="auth-page-wrapper d-flex flex-column">
        <div class="auth-page-content" style="background-color: #a88cd3; overflow: hidden; margin-bottom: -30px;">
           <section class="selected-section text-white d-flex flex-column align-items-center justify-content-start px-4 py-5">
                <div class="top-bar d-flex align-items-center justify-content-between w-100 mb-4 mt-n4">
                    <img src="/images/gad.png" alt="Logo" class="logo-small" />
                    <b-col md="auto">
                        <div class="hstack gap-4 flex-wrap mt-2">
                            <Link href="/gadcorner">
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
                                    <p class="fw-semibold fs-15 text-purple text-truncated mb-0">DOST IX RSTL Customer's Data</p>
                                    <h5 class="mb-0 text-muted fs-13">Access and maintain records of customer profiles and service requests.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height:2rem;width:2rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-team-fill text-primary fs-20"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-12"><span class="text-body">{{year}} Value of Transaction</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-11">Identifying gender representation across roles, helping ensure equality and informed decision-making.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white border-bottom shadow-none" no-body>
                            <div class="table-responsive" style="max-height: calc(100vh - 300px); overflow: auto;">
                                <table class="table table-nowrap table-striped align-middle mb-0">
                                    <thead class="table-light thead-fixed">
                                        <tr class="fs-10">
                                            <th class="text-center" width="20%">Type</th>
                                            <th class="text-center" v-for="(month,index) in months" v-bind:key="index">{{ month }}</th>
                                            <th class="text-center" width="15%">Total</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr v-for="(list,index) in roles" v-bind:key="index">
                                            <td class="text-center">{{ list.role_name }}</td>
                                            <td class="text-center">{{ list.female_count }}</td>
                                            <td class="text-center">{{ list.male_count }}</td>
                                            <td class="text-center">{{ list.female_percentage }}</td>
                                            <td class="text-center">{{ list.male_percentage }}</td>
                                            <td class="text-center">{{ list.total_users }}</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-primary text-center fs-12">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ totalUsers }}</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
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
                months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
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
