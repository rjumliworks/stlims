
<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" :title="(type == 'activation') ? 'User Activation' : 'User Verification'" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div v-if="user">
            <div class="mt-1 mb-n3" v-if="type == 'verification'">
                <div class="avatar-md mx-auto">
                    <div class="avatar-title rounded-circle bg-light">
                        <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                    </div>
                </div>
                <div class="p-2 mt-2 text-center">
                    <h6>Send Verification Link</h6>
                    <p class="font-size-12 text-muted"> Send Verification link to <span class="text-dark fw-semibold">{{user.email}}</span> for activation. </p>
                </div>
            </div>
            <div class="mt-1 mb-n3" v-else>
                <div class="avatar-md mx-auto">
                    <div class="avatar-title rounded-circle bg-light">
                        <i class="h1 mb-0" :class="(!user.is_active) ? 'bx bxs-lock-open text-success' : 'bx bxs-lock text-danger'"></i>
                    </div>
                </div>
                <div class="p-2 mt-2 text-center">
                    <h6 class="mb-1" v-if="user.is_active">"Deactivate user access to the system."</h6>
                    <h6 class="mb-1" v-else>"Activate user access to the system."</h6>
                    <p v-if="user.is_active" class="font-size-12 text-muted"><span class="text-success fw-semibold">{{user.name}}</span> will no longer have access to our system.</p>
                    <p v-else class="font-size-12 text-muted"><span class="text-success fw-semibold">{{user.name}}</span> now have full access to our system</p>
                </div>
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
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
                email: null,
                is_active: null,
                email_verified_at: '2024-05-15 08:46:33',
                type: null,
                option: 'user'
            }),
            user: {},
            type: null,
            showModal: false,
        }
    },
    methods: { 
        show(type,data){
            this.user = data;
            this.type = type;
            this.form.type = type;
            this.form.id = this.user.id,
            this.form.email = this.user.email,
            this.form.is_active = (this.user.is_active == 1) ? 0 : 1,
            this.showModal = true;
        },
        submit(){
            this.form.put('/users/update', {
                errorBag: 'updateProfileInformation',
                preserveScroll: true,
                onSuccess: () => {
                    this.$emit('update',this.$page.props.flash.data.data);
                    this.hide();
                },
            });
        },
        hide(){
            this.user = {};
            this.form.reset();
            this.form.clearErrors();
            this.showModal = false;
        }
    }
}
</script>