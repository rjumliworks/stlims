<template>
    <BRow>
        <div class="col-md-12">
            <div class="card bg-light-subtle shadow-none border">

                <div class="card-header bg-light-subtle">
                    <div class="d-flex mb-n3">
                        <div class="flex-shrink-0 me-3">
                            <div style="height:2.5rem;width:2.5rem;">
                                <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                    <i class="ri-flask-fill text-primary fs-22"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fs-14"><span class="text-body">Shelf-life Testing</span></h5>
                            <p class="text-muted text-truncate-two-lines fs-12">Generate and track quotations for lab services requested by customers.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md mt-2">
                                <label for="navbarscrollspy-showcode" class="form-label text-muted">Show Analyses</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="navbarscrollspy-showcode">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-bottom shadow-none mb-0">
                    <div class="step-arrow-nav mt-0">
                        <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                            <li class="nav-item" role="presentation" v-for="(menu, index) in menus" v-bind:key="index">
                                <button class="nav-link fs-12 p-3" :class="(index == 0) ? 'active' : ''" 
                                    :id="menu+'-tab'" data-bs-toggle="pill" :data-bs-target="'#'+menu" 
                                    type="button" role="tab" :aria-controls="menu" aria-selected="true">
                                    {{menu}}
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </BRow>
</template>
<script>
export default {
    data(){
        return {
            menus: [
                'Sample','Cycles','TSR\'s'
            ],
            index: null,
        }
    }
}
</script>