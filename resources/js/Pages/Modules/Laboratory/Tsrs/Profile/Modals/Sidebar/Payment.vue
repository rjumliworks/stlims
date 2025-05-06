<template>
    <b-modal v-if="selected" v-model="showModal" style="--vz-modal-width: 650px;" hide-footer title="Payment Details" class="v-modal-custom"  header-class="p-3 bg-light" modal-class="zoomIn" centered no-close-on-backdrop>
        <div v-if="selected.status.name == 'Pending'" class="alert alert-warning alert-dismissible alert-label-icon label-arrow fs-12" role="alert">
            <i class="ri-alert-line label-icon"></i><strong>Payment Not Settled</strong> - We noticed that your payment has not been settled
        </div>
        <div class="row g-2 mb-2">
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-hashtag"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">OR Number :</p>
                            <h5 class="fs-12 mb-0">{{(selected.ornumber) ? selected.ornumber : 'Not Available'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-coupon-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">Collection :</p>
                            <h5 class="fs-12 mb-0">{{(selected.collection) ? selected.collection.name : 'Not Available'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-calendar-2-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">Paid At :</p>
                            <h5 class="fs-12 mb-0">{{selected.paid_at}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-secure-payment-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">Payment Method :</p>
                            <h5 class="fs-12 mb-0">{{(selected.type) ? selected.type.name : 'Not Available'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-price-tag-2-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">Discount :</p>
                            <h5 class="fs-12 mb-0">{{(selected.discounted) ? selected.discounted.name : 'Not Available'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-0">
                            <div class="avatar-title rounded bg-transparent text-primary fs-18"><i class="ri-calendar-2-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted fs-11 mb-0">Status :</p>
                            <h5 class="fs-12 mb-0">{{(selected.status) ? selected.status.name : 'Not Available'}}</h5>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <div class="table-responsive fs-12">
            <table class="table table-bordered mt-0 mb-3">
              
                <tbody>
                    <tr>
                        <td>Sub Total :</td>
                        <td colspan="2" class="text-end fw-semibold">{{selected.subtotal}}</td>
                    </tr>
                    <tr>
                        <td>Discount : </td>
                        <td colspan="2" class="text-end fw-semibold">{{selected.discount}}</td>
                    </tr>
                    <tr class="table-light">
                        <th>Total :</th>
                        <td colspan="2" class="text-end"><span class="fw-semibold" id="cart-total"> {{selected.total}} </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            selected: {
                status:{}, collection:{}, type:{}, discounted:{}
            },
            showModal: false
        }
    },
    methods: { 
        show(data){
            this.selected = data;
            this.showModal = true;
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>