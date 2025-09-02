<template>
    <b-modal v-if="selected" v-model="showModal" header-class="p-3 bg-light" title="View Stock" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            
                            <a :href="item.qr" target="_blank" rel="noopener noreferrer">
                                <img :src="item.qr" class="img-fluid avatar-sm float-end mt-n2" alt="QR Code" />
                            </a>
                            <h6><span class="fw-semibold text-primary fs-15">{{ selected }}</span> </h6>
                            <div class="hstack gap-3  fs-12 flex-wrap">
                                
                               <div><i class="ri-qr-code-fill align-bottom me-1"></i> {{item.code }} </div>
                                <!-- <div class="vr" style="width: 1px;"></div>
                                <div>Content : 
                                    <span class="fw-medium">{{item.unit}} {{ item.type }}</span>
                                </div>
                                <div class="vr" style="width: 1px;"></div>
                                <div>PO Number : 
                                    <span class="fw-medium">{{item.number}}</span>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12">
                <hr class="text-muted"/>
            </div>
            <div class="col-md-12">
                <div class="row g-2 mb-n1">
                    <div class="col-sm-12">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-account-circle-fill"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Supplier :</p>
                                    <h5 class="mb-0 fs-12">{{item.supplier }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-price-tag-3-fill"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Content :</p>
                                    <h5 class="mb-0 fs-12">{{item.unit}} {{ item.type }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-hashtag"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">PO Number :</p>
                                    <h5 class="mb-0 fs-12">{{item.number}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-shopping-basket-2-line"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Quantity :</p>
                                    <h5 class="mb-0 fs-12">{{item.quantity}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
        </template>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: null,
            item: null
        }
    },
    methods: { 
        show(selected,item){
            this.selected = selected;
            this.item = item;
            this.showModal = true;
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>