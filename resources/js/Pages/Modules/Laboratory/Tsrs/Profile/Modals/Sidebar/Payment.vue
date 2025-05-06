<template>
    <b-modal v-if="selected" v-model="showModal" style="--vz-modal-width: 650px;" hide-footer title="Payment Details" class="v-modal-custom"  header-class="p-3 bg-light" modal-class="zoomIn" centered no-close-on-backdrop>
        <div v-if="selected.status.name == 'Pending'" class="alert alert-warning alert-dismissible alert-label-icon label-arrow fs-12" role="alert">
            <i class="ri-alert-line label-icon"></i><strong>Payment Not Settled</strong> - We noticed that your payment has not been settled
        </div>
        <div class="table-responsive fs-12">
            <table class="table table-bordered mt-0 mb-3">
              
                <tbody>
                    <tr class="fs-11 table-light">
                        <th style="width: 33%;" class="text-center">OR Number</th>
                        <th style="width: 33%;" class="text-center">Collection</th>
                        <th style="width: 33%;" class="text-center">Paid At</th>
                    </tr>
                    <tr>
                        <td class="text-center">{{(selected.or_number) ? selected.or_number : '-'}}</td>
                        <td class="text-center">{{(selected.collection) ? selected.collection.name : '-'}}</td>
                        <td class="text-center">{{selected.paid_at}}</td>
                    </tr>
                    <tr class="fs-11 table-light">
                        <th style="width: 33%;" class="text-center">Payment Method</th>
                        <th style="width: 33%;" class="text-center">Discount</th>
                        <th style="width: 33%;" class="text-center">Status</th>
                    </tr>
                    <tr>
                        <td class="text-center">{{(selected.type) ? selected.type.name : '-'}}</td>
                        <td class="text-center">{{(selected.discounted) ? selected.discounted.name : '-'}}</td>
                        <td class="text-center">{{selected.status.name}}</td>
                    </tr>
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