<template>
    <b-modal v-if="selected.service" v-model="showModal" style="--vz-modal-width: 650px;" title="Additional Services" class="v-modal-custom"  header-class="p-3 bg-light" modal-class="zoomIn" centered no-close-on-backdrop>
        <div class="card-body">
            <table class="table align-middle table-bordered mb-0">
                <thead class="table-light">
                    <tr class="fs-11">
                        <th style="width: 50%;">Addon</th>
                        <th style="width: 14%;" class="text-center">Days</th>
                        <th style="width: 18%;" class="text-center">Fee</th>
                        <th style="width: 18%;" class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody class="fs-12">
                    <tr class="">
                        <td>
                            <h5 class="fs-13 mb-0"> {{selected.service.service.name}}</h5>
                            <p class="fs-12 text-muted mb-0">{{selected.service.service.description}}</p>
                        </td>
                        <td class="text-center">{{ selected.service.quantity }}</td>
                        <td class="text-center">{{ selected.service.fee }}</td>
                        <td class="text-center">{{ selected.service.total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button v-if="selected.status.id == 14" @click="submit('delete')" variant="danger" block>Delete</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                quantity: null,
                quotation_id: null,
                option: 'service'
            }),
            selected: {
                status:{}, service:{ service: {}}
            },
            showModal: false
        }
    },
    methods: { 
        show(data,status,id){
            this.form.id = data.id;
            this.form.quotation_id = id;
            this.form.quantity = data.quantity;
            this.selected.service = data;
            this.selected.status = status;
            this.showModal = true;
        },
        submit(data){
            this.form.option = data;
            this.form.put('/quotations/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>