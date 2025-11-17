<template>
    <div class="auth-page-wrapper d-flex flex-column">
        <div class="auth-page-content d-flex justify-content-center align-items-center" style="background-color: #a88cd3; min-height: 100vh;">

            <section id="team" class="section" v-if="!active">
                <div class="px-5 py-n2">
                    <div class="row">
                        <!-- Left Section -->
                        <div class="col-lg-5 position-relative">
                            <div class="sparkles">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 mt-5">
                                    <div class="text-center">
                                        <img src="/images/gad1.png" alt="" class="rounded img-fluid mx-auto d-block" />
                                    </div>
                                </div>
                                <div class="col-lg-8 ms-n5 text-center">
                                    <p class="fs-14 fw-semibold text-white">
                                        Department of Science and Technology IX <br />
                                        Regional Standards and Testing Laboratories
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Cards Section -->
                        <div class="col-lg-7">
                            <div class="row" style="margin-top: 60px;">
                                <!-- CARD COMPONENT -->
                                <template v-for="card in cards" :key="card.id">
                                    <div class="col-md-6">
                                        <Link :href="`/gadcorner/${card.id}`">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="d-flex flex-wrap" style="cursor: pointer;">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                                <i :class="card.icon"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 mt-1">
                                                            <p class="fw-semibold fs-13 text-primary text-truncated mb-0">{{ card.title }}</p>
                                                            <h5 class="mb-0 text-muted fs-11">{{ card.subtitle }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </Link>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-info text-white w-100 d-flex justify-content-center gap-5 fs-14 flex-wrap" style="margin-top: 80px;">
                    <div><i class="ri-map-pin-2-fill align-bottom me-1"></i>Pettit Barracks, Barangay Zone IV, Zamboanga City</div>
                    <div><i class="ri-phone-fill align-bottom me-1"></i>(062) 991-1024 / 0917 831 5838</div>
                    <div><i class="ri-mail-fill"></i> rstl@ro9.dost.gov.ph</div>
                </div>
            </section>
        </div>

        <b-button variant="danger" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </b-button>
    </div>
</template>

<script>
    export default {
        layout: null,
        data() {
            return {
                selectedCard: null,
                active: false,
                cards: [{
                        id: 'workforce',
                        title: 'DOSTIX RSTL Workforce Data',
                        subtitle: 'Manage RSTL employee and staffing data.',
                        icon: 'ri-bar-chart-2-fill'
                    },
                    {
                        id: 'customers',
                        title: "DOSTIX RSTL Customer's Data",
                        subtitle: 'Manage customer profiles and service requests.',
                        icon: 'ri-team-fill'
                    },
                    {
                        id: 'estado',
                        title: 'Estado ni Junana Report',
                        subtitle: 'View reports on GAD status and progress.',
                        icon: 'ri-emotion-fill'
                    },
                    {
                        id: 'gad',
                        title: 'GAD Knowledge & IEC',
                        subtitle: 'GAD-related info and IEC materials repository.',
                        icon: 'ri-lightbulb-flash-fill'
                    },
                    {
                        id: 'planbudget',
                        title: 'GAD Plan and Budget',
                        subtitle: 'View annual GAD plans and budget allocations.',
                        icon: 'ri-calendar-check-line'
                    },
                    {
                        id: 'orgchart',
                        title: 'Organizational Chart',
                        subtitle: 'View the structure and hierarchy of the DOST IX RSTL office.',
                        icon: 'ri-flow-chart'
                    },
                    {
                        id: 'issuances',
                        title: 'Administrative Issuances',
                        subtitle: 'Official memos, policies, and admin guidelines.',
                        icon: 'ri-file-text-line'
                    }
                ]
            };
        },
        methods: {
            topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            },
            selectCard(id) {
                const url = `/gadcorner/${id}`;
                window.open(url);
            }
        },
        computed: {
            getSelectedCard() {
                return this.cards.find(card => card.id === this.selectedCard) || {};
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

    .custom-footer {
        flex-shrink: 0;
    }

    /* Sparkle Animation */
    .sparkles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 2;
    }

    .sparkles span {
        position: absolute;
        width: 4px;
        height: 4px;
        background: white;
        border-radius: 50%;
        opacity: 0.8;
        box-shadow: 0 0 8px white;
        animation: sparkle 2s linear infinite;
    }

    .sparkles span:nth-child(1) {
        top: 10%;
        left: 40%;
        animation-delay: 0s;
    }

    .sparkles span:nth-child(2) {
        top: 50%;
        left: 85%;
        animation-delay: 0.5s;
    }

    .sparkles span:nth-child(3) {
        top: 80%;
        left: 40%;
        animation-delay: 1s;
    }

    .sparkles span:nth-child(4) {
        top: 60%;
        left: 10%;
        animation-delay: 1.5s;
    }

    .sparkles span:nth-child(5) {
        top: 25%;
        left: 78%;
        animation-delay: 2s;
    }

    @keyframes sparkle {

        0%,
        100% {
            opacity: 0.2;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.8);
        }
    }

    /* Fade Transition */
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
.top-bar {
    position: relative;
    top: 0;
    left: 0;
    height: 100px;
    background-color: rgba(255, 255, 255, 0.15);
    padding: 0.5rem 1rem;
    border-radius: 10px;
}

.logo-small {
    height: 100px;
    object-fit: contain;
}

.selected-content {
    max-width: 100%;
}
</style>
