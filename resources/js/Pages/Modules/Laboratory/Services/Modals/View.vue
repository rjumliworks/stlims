<template>
    <b-modal v-if="selected" v-model="showModal" style="--vz-modal-width: 950px;" header-class="p-3 bg-light" title="View Testservice" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
          
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            <h6><span class="fw-semibold text-primary fs-16">{{ selected.testname.name }}</span> </h6>
                            <div class="hstack gap-3 mt-n1 fs-13 flex-wrap">
                                <div>Sampletype : 
                                    <span v-if="selected.sampletype" class="fw-medium"> {{ selected.sampletype .name}}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                                <div class="vr" style="width: 1px;"></div>
                                <div>Laboratory : 
                                    <span v-if="selected.laboratory" class="fw-medium">{{selected.laboratory.name }}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="text-muted"/>
                <div class="row mt-n2 g-2">
                    <div class="col-sm-12">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-pages-line"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Method:</p>
                                    <h5 class="mb-0 fs-13">{{selected.method.method.name }} <span class="text-muted">({{ selected.method.method.short }})</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-bill-line"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Reference:</p>
                                    <h5 class="mb-0 fs-13">{{selected.method.reference.name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-price-tag-3-line"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-0 fs-12">Fee:</p>
                                    <h5 class="mb-0 fs-13">{{selected.method.fee }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="text-muted"/>
            </div>
            <div class="col-md-12 mb-n5">
                <div class="card bg-light-subtle shadow-none border">
                    <div class="card-header bg-light-subtle">
                        <div class="d-flex mb-n3">
                            <div class="flex-shrink-0 me-3">
                                <div style="height:2.2rem;width:2.2rem;">
                                    <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                        <i v-if="info" :class="info.icon+' text-primary fs-24'"></i>
                                        <i v-else class="ri-file-list-fill text-primary fs-24"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fs-13">
                                    <span class="text-body">Add-ons for this Service</span>
                                </h5>
                                <p class="text-muted text-truncate-two-lines fs-11">Displays optional add-ons and their corresponding fees</p>
                            </div>
                            <div class="flex-shrink-0">
                                <BButton @click="openFee(selected)" variant="danger" class="btn-sm waves-effect waves-light">
                                   Add Fee
                                </BButton>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap align-middle mb-0">
                                <thead class="table-light thead-fixed">
                                    <tr class="fs-11">
                                        <th class="text-center" style="width: 5%;">#</th>
                                        <th>Name</th>
                                        <th class="text-center" style="width:15%;">Fee</th>
                                        <th class="text-end" style="width: 5%;"></th>
                                    </tr>
                                </thead>
                                <tbody class="fs-12" v-if="(selected.fees) ? selected.fees.length > 0 : ''">
                                    <tr v-for="(list,index) in selected.fees" v-bind:key="index" class="fs-12">
                                        <td  width="4%" class="text-center fs-12"> 
                                            {{index+1}}
                                        </td>
                                        <td>
                                            <h5 class="fs-11 mb-0">{{list.name}}</h5>
                                            <!-- <p class="text-muted mb-0">{{list.code}}</p> -->
                                        </td>
                                        <td class="text-center">{{list.fee}}</td>
                                        <td class="text-end">
                                            <b-button class="mt-n1 mb-n1" variant="soft-info" v-b-tooltip.hover title="View" size="sm">
                                                <i class="ri-eye-fill align-bottom"></i>
                                            </b-button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody v-else class="fs-12">
                                    <tr>
                                        <td class="text-center text-muted" colspan="3"> No add-ons available for this service at the moment.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Fee @success="updateList" ref="fee"/>
        <template v-slot:footer>
            <div class="row align-items-center g-0 float-end mt-n2">
                <div class="col-md">
                    <div>
                        <div class="hstack gap-4 mt-n1 fs-14 flex-wrap" style="cursor: pointer;">
                            <div class="text-muted" @click="hide()">  
                                <i class="ri-close-circle-line fs-16"></i> Close
                            </div>
                            <div class="text-muted" @click="submit(34)" v-if="selected.status.name == 'Pending' && $page.props.roles[0] == 'Technical Manager'">  
                                <i class="ri-delete-bin-line fs-16"></i> Reject
                            </div>
                            <div class="vr" style="width: 1px;"></div>
                            <div>  
                                <b-button @click="submit(32)" v-if="selected.status.name == 'Pending' && $page.props.roles[0] == 'Technical Manager'" variant="primary" :disabled="form.processing" block>Approved</b-button>
                                <b-button @click="submit(33)" v-if="selected.status.name == 'Approved'" variant="primary" :disabled="form.processing" block>Suspend</b-button>
                                <b-button @click="submit(32)" v-if="selected.status.name == 'Suspended'" variant="primary" :disabled="form.processing" block>Reactivate</b-button>
                                <b-button v-if="selected.status.name == 'Pending' && $page.props.roles[0] != 'Technical Manager'" variant="primary" :disabled="form.processing" block>Save Changes</b-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <b-button v-if="selected.status.name == 'Approved' || selected.status.name == 'Pending'" @click="hide()" variant="light" block>Close</b-button>
            <b-button v-if="selected.status.name == 'Pending' && $page.props.roles[0] == 'Technical Manager'" @click="submit(34)" variant="danger" :disabled="form.processing" block>Reject</b-button>
            <b-button v-if="selected.status.name == 'Pending' && $page.props.roles[0] == 'Technical Manager'" @click="submit(32)" variant="primary" :disabled="form.processing" block>Approved</b-button>
            <b-button v-if="selected.status.name == 'Approved'" @click="submit(33)" variant="danger" :disabled="form.processing" block>Suspend</b-button>
            <b-button v-if="selected.status.name == 'Suspended'" @click="submit(32)" variant="primary" :disabled="form.processing" block>Reactivate</b-button> -->
        </template>
    </b-modal>
</template>
<script>
import Fee from '../Modals/Fee.vue';
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput, Fee },
    data(){
        return {
            currentUrl: window.location.origin,
            selected: { 
                type: {},
                laboratory: {
                    member: {}
                },
                sampletype: {},
                testname: {},
                method: {
                    method: {},
                    reference: {}
                },
                status: {}
            },
            form: useForm({
                id: null,
                status_id: null,
                option: 'status'
            }),
            showModal: false
        }
    },
    computed: {
        refes() {
            const short = (this.selected.method.reference.short) ? '('+this.selected.method.reference.short+')' : '';
            const name = this.selected.method.reference.name;
            return name + short;
        }
    },
    methods: { 
        show(data){
            this.selected = data;
            this.showModal = true;
        },
        submit(id){
            this.form.id = this.selected.id;
            this.form.status_id = id;
            axios.post('/testservices', this.form)
            .then((response) => {
                this.$emit('success',true);
                this.hide();
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors;
                     console.log(this.errors);
                }
            });
        },
        openFee(){
            this.$refs.fee.show(this.selected.id,this.selected.fees,this.selected.agency_id);
        },
        updateList(data){
            this.selected.fees.unshift(data);
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>