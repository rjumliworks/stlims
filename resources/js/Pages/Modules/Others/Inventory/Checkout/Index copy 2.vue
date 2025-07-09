<template>
    <div v-if="lists.length == 0" class="auth-page-wrapper d-flex flex-column">
        <div class="auth-page-content d-flex justify-content-center align-items-center" style="background-color: #EFF0F3; min-height: 100vh;">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Inventory Checkout <span class="text-primary">System</span></h1>
                        <p class="text-muted mb-4">Scan QR codes or search by item name to check out inventory items efficiently. <br/> Tracks borrower information, timestamps, and item status for accurate inventory management.</p>
                    </div>
                    <form action="#" class="job-panel-filter">
                        <div class="row g-md-0 g-2">
                            <div class="col-md-8">
                                <div>
                                    <input type="search" v-model="keyword" ref="searchInput" id="job-title" class="form-control filter-input-box" placeholder="Search for name, suppplier or QR Code">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100">
                                    <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="ri-search-2-line align-bottom me-1"></i> Find Item</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                        <li class="list-inline-item text-danger fw-semibold"><i class="mdi mdi-tag-multiple-outline align-middle"></i> Inventory Keywords:</li>
                        <li class="list-inline-item"><a href="javascript:void(0)">Chemical,</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)">Media,</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)">Supply</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <b-button variant="danger" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </b-button>
    </div>
    <div v-else nclass="auth-page-wrapper d-flex flex-column">
        <div class="auth-page-content d-flex justify-content-center align-items-center" style="background-color: #EFF0F3; min-height: 100vh; overflow: hidden;">
           <!-- <section class="selected-section text-white d-flex flex-column align-items-center justify-content-start px-4 py-5">
                <div class="top-bar d-flex align-items-center justify-content-between w-100 mb-4 mt-n4">
                    <img src="/images/gad.png" alt="Logo" class="logo-small" />
                    <b-col md="auto">
                        <div class="hstack gap-4 flex-wrap mt-2">
                            <div style="margin-top: -8px;">  
                                <b-button variant="purple" @click="lists = []" block><i class="ri-delete-back-2-fill me-1"></i> Back</b-button>
                            </div>
                        </div>
                    </b-col>
                </div>
            </section> -->
            <div class="row p-4 justify-content-start">
                <div class="col-md-12">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height: 2.5rem; width: 2.5rem;"><span
                                            class="avatar-title bg-primary-subtle rounded p-2 mt-n1"><i
                                                class="ri-flask-fill text-primary fs-24"></i></span></div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">List of Test Reports</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">Register </p>
                                </div>
                                <div class="flex-shrink-0" style="width: 45%;"></div>
                            </div>
                        </div>
                        <div class="car-body bg-white border-bottom shadow-none rounded-bottom">
                            <div class="row mb-3 ms-1 me-1" style="margin-top: 12px;">
                                <div class="col-lg">
                                    <div class="input-group mb-1"><span class="input-group-text"><i
                                                class="ri-search-line search-icon"></i></span><input type="text"
                                            placeholder="Search Report number, TSR Code, Sample Code" class="form-control"
                                            style="width: 30%;">
                                       
                                         <button class="btn btn-md btn-primary" type="button"><i
                                                class="ri-add-circle-fill align-bottom me-1"></i> Search </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-body bg-white rounded-bottom">
                           
                        </div> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-light-subtle shadow-none border">
                        <div class="card-header bg-light-subtle">
                            <div class="d-flex mb-n3">
                                <div class="flex-shrink-0 me-3">
                                    <div style="height: 2.5rem; width: 2.5rem;">
                                        <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                            <i class="ri-shopping-cart-2-fill text-primary fs-24"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fs-14"><span class="text-body">Checkout Summary</span></h5>
                                    <p class="text-muted text-truncate-two-lines fs-12">Register </p>
                                </div>
                                <div class="flex-shrink-0" style="width: 45%;"></div>
                            </div>
                        </div>
                        <div class="card-body bg-white rounded-bottom">
                            <div class="table-responsive table-card"
                                style="height: calc(-465px + 100vh); overflow: auto;">
                                <table class="table align-middle table-centered table-striped mb-0">
                                    <thead class="table-light thead-fixed">
                                        <tr class="fs-11">
                                            <th style="width: 3%;"></th>
                                            <th>Name</th>
                                            <th style="width: 7%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-12">
                                        <tr class="">
                                            <td class="text-center">1. </td>
                                            <td>
                                                <h5 class="fs-12 mb-0 fw-semibold text-primary">06232025-CHE-0785</h5>
                                            </td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-soft-primary" type="button" data-original-title="View"><i class="ri-eye-fill align-bottom"></i></button>
                                            </td>
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
</template>

<script>
import _ from 'lodash';
    export default {
        layout: null,
        data() {
            return {
                lists: [],
                carts: [],
                keyword: null
            };
        },
        mounted() {
            this.$refs.searchInput.focus();
        },
        watch: {
            "keyword"(newVal){
                this.checkSearchStr(newVal)
            }
        },
        methods: {
            checkSearchStr: _.debounce(function(string) {
                this.fetch();
            }, 300),
            fetch(page_url){
                page_url = page_url || '/inventory';
                axios.get(page_url,{
                    params : {
                        keyword: this.keyword,
                        option: 'search'
                    }
                })
                .then(response => {
                    if(response){
                        this.lists = response.data.data;         
                    }
                })
                .catch(err => console.log(err));
            },
            topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            },
        },
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
