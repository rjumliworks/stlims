<template>
    <Head title="Activation" />

    <div class="auth-page-wrapper pt-5 d-flex justify-content-center align-items-center min-vh-100">
       
        <div class="auth-page-content">
            <BContainer>
                

                <BRow class="justify-content-center">
                    <BCol md="8" lg="6" xl="6">
                        <BCard no-body class="mt-4">
                            <BCardBody class="p-4 mt-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-3">
                                        <img :src="$page.props.user.data.avatar" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" type="file" class="profile-img-file-input" @change="previewImage"/>
                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="fs-16 mb-1">{{ $page.props.user.data.name }}</h5>
                                    <p class="text-muted mb-2">{{ $page.props.roles[0] }}</p>
                                </div>

                                <div class="p-2 mt-5">
                                    <form class="customform" @submit.prevent="submit">
                                        <div class="row g-3">
                                            <div class="col-md-12 mt-n1">
                                                <div v-if="Object.keys($page.props.errors).length" class="alert alert-danger mt-0 mb-3" role="alert">
                                                    <ul class="mb-0">
                                                        <li v-for="(list,index) in $page.props.errors" v-bind:key="index">{{ list }}</li>
                                                    </ul>
                                                </div>
                                                <div class="form-floating mb-n3">
                                                    <TextInput id="password" v-model="form.password" :type="togglePassword ? 'text' : 'password'"  class="form-control" autofocus placeholder="Please enter password"/>
                                                    <InputLabel for="password" value="New Password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-n4">
                                                <div class="form-floating">
                                                    <TextInput id="password_confirmation" v-model="form.password_confirmation" :type="togglePassword ? 'text' : 'password'" class="form-control" placeholder="Please enter password_confirmation"/>
                                                    <InputLabel for="password_confirmation" value="Re-type new Password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-0 mt-4">
                                                <div class="form-check form-switch float-end">
                                                    <input class="form-check-input" @click="togglePassword = !togglePassword" type="checkbox" role="switch" id="flexSwitchCheckChecked" v-model="showPassword">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Show Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4 mb-2">
                                            <BButton
                                                @click="create()"
                                                variant="primary"
                                                class="w-100"
                                                type="submit"
                                                :disabled="form.processing || $page.props.user.data.avatar === '/images/avatars/avatar.jpg'"
                                            >
                                                Submit
                                            </BButton>
                                        </div>

                                        <div class="alert alert-info alert-dismissible alert-label-icon label-arrow" role="alert">
                                            <i class="ri-error-warning-line label-icon"></i>Please set your password and photo to continue.
                                        </div>
                                        
                                    </form>
                                </div>
                            </BCardBody>
                        </BCard>
                    </BCol>
                </BRow>
            </BContainer>
        </div>
    </div>
</template>
<script>
import { useForm } from '@inertiajs/vue3'
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    layout: null,
    components : { InputLabel, TextInput },
    data(){
        return {
            form: useForm({
                password: '',
                password_confirmation: '',
                is_active: 1,
                image: null,
                option: 'activation'
            }),
            uploaded: false,
            togglePassword: false
        }
    },
    methods: {
        previewImage(e) {
            var fileInput = document.querySelector(".profile-img-file-input");
            var preview = document.querySelector(".user-profile-image");
            var file = fileInput.files[0];
            this.form.image = file;
            var reader = new FileReader();

            reader.addEventListener("load", () => { 
                preview.src = reader.result;
                this.form.post('/profile', {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true,
                    onSuccess: () => '',
                });
            }, false);

            if (file) { 
                reader.readAsDataURL(file); 
            }
        },
        create(){
            this.form.id = this.id;
            this.form.post('/activate',{
                preserveScroll: true,
                onSuccess: (response) => {
                    
                },
                onError: () => {
                    if (this.form.errors.password) {
                        this.form.reset('password', 'password_confirmation');
                    }
                    if (this.form.errors.current_password) {
                        this.form.reset('current_password');
                    }
                },
            });
        },
    }
}
</script>
<script setup>
import { router } from '@inertiajs/vue3';
    const logout = () => {
        router.post('/logout');
    };
</script>
