<template>
    <b-modal v-if="selected" v-model="showModal" header-class="p-3 bg-light" :title="'View TSR'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform" v-if="!editable">
            <div class="table-responsive mt-2 mb-2">
                <table class="table table-bordered table-nowrap align-middle mb-0">
                    <thead class="table-primary">
                        <tr class="fs-13">
                            <th colspan="3" class="text-center text-primary">{{selected.extendedProps.full_title}}</th>
                        </tr>
                    </thead>
                    <thead class="table-light">
                        <tr class="fs-11">
                            <th class="text-center">Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fs-12">
                            <td class="text-center">{{ selected.extendedProps.datee }}</td>
                        </tr>
                    </tbody>
                    <thead class="table-light">
                        <tr class="fs-11">
                            <th class="text-center">Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fs-12">
                            <td class="text-center">{{ selected.extendedProps.full_name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
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
            selected: null,
            type: null,
            showModal: false,
            editable: false
        }
    },
    methods: { 
        show(data){
            this.editable = false;
            this.selected = data;
            this.showModal = true;
        },
        hide(){
            this.type = null;
            this.editable = false;
            this.showModal = false;
        }
    }
}
</script>