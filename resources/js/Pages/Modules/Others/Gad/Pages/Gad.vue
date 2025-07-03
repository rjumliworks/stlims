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
            <div class="row p-4" style="margin-top: -75px" v-if="id">
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
                                    <p class="fw-semibold fs-15 text-purple text-truncated mb-0">GAD Knowledge & IEC</p>
                                    <h5 class="mb-0 text-muted fs-13">Repository of gender and development-related information, education, and communication materials.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="content-bar">
                        <h5 class="text-purple fs-15 mt-2">Laws and Policies on Women</h5>
                        <ul class="text-white fs-13 fw-semibold">
                            <li><a class="text-white" href="https://pcw.gov.ph/commonwealth-acts/" target="_blank">Commonwealth Acts</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/executive-orders/" target="_blank">Executive Order</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/joint-memorandum-circulars/" target="_blank">Joint Memorandum Circulars</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/pcw-memorandum-circulars/" target="_blank">PCW Memorandum Circulars</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/proclamations/" target="_blank">Proclamations</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/presidential-decrees/" target="_blank">Presidential Decrees</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/republic-acts-2/" target="_blank">Republic Acts</a></li>
                            <li><a class="text-white" href="https://pcw.gov.ph/other-laws-and-issuances/" target="_blank">Other Laws and Issuances</a></li>
                        </ul>
                        <h5 class="text-purple fs-15 mt-2">Violence Against Women</h5>
                        <ul class="text-white fs-13 fw-semibold">
                            <li><a class="text-white" href="https://lawphil.net/statutes/repacts/ra2019/ra_11313_2019.html" target="_blank"> Republic Act No. 11313 - Safe Spaces Act</a></li>
                        </ul>
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
    .content-bar {
        position: relative;
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
