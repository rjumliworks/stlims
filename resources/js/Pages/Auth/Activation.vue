<template>
    <Head title="Activation" />

    <div class="auth-page-wrapper pt-5 d-flex justify-content-center align-items-center min-vh-100">
       
        <div class="auth-page-content">
            <BContainer>
                

                <BRow class="justify-content-center">
                    <BCol md="8" lg="6" xl="5">
                        <BCard no-body class="mt-4">

                            <BCardBody class="p-4">
                                <!-- <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                            <i class="ri-rotate-lock-line"></i>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-3">
                                        <img :src="'images/avatars/avatar.jpg'" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" type="file" class="profile-img-file-input" @change="previewImage"/>
                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="fs-16 mb-1">{{ name }}</h5>
                                    <p class="text-muted mb-0">RSTL Staff</p>
                                </div>

                                <div class="p-2 mt-4">
                                    <!-- <div class="text-muted text-center mb-4">
                                        <div class="text-sm fs-12 text-muted mb-3">
                                            Set your new password with 1 number and 1 special character.
                                        </div>
                                    </div> -->

                                    <form class="customform" @submit.prevent="submit">
                                        <div class="row g-3">
                                            <div class="col-md-12 mt-n1">
                                                <div class="form-floating mb-n3">
                                                    <TextInput id="password" v-model="form.password" :type="togglePassword ? 'text' : 'password'"  class="form-control" autofocus placeholder="Please enter password" required/>
                                                    <InputLabel for="password" value="New Password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-n4">
                                                <div class="form-floating">
                                                    <TextInput id="password_confirmation" v-model="form.password_confirmation" :type="togglePassword ? 'text' : 'password'" class="form-control" autofocus placeholder="Please enter password_confirmation" required/>
                                                    <InputLabel for="password_confirmation" value="Re-type new Password"/>
                                                    <InputError :message="form.errors.password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-0 mt-4">
                                                <div class="form-check form-switch float-end">
                                                    <input class="form-check-input" @click="togglePassword = !togglePassword" type="checkbox" role="switch" id="flexSwitchCheckChecked" v-model="showPassword">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Show Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div v-if="this.$page.props.errors.updatePassword" class="alert alert-danger mt-2 mb-n1" role="alert">
                                            <ul class="mb-0">
                                                <li v-for="(list,index) in this.$page.props.errors.updatePassword" v-bind:key="index">{{ list }}</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <BButton @click="create()"  variant="primary" class="w-100" type="submit" :class="(form.processing) ? 'opacity-25' : ''" :disabled="form.processing">Submit</BButton>
                                            <!-- <BButton v-else variant="primary" class="w-100" type="submit" :class="(form.processing) ? 'opacity-25' : ''" :disabled="true">Submit</BButton> -->
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
import InputError from '@/Shared/Components/Forms/InputError.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    layout: null,
    components : { InputError, InputLabel, TextInput },
    props: ['name','id','email','token'],
    data(){
        return {
            form: useForm({
                token: this.token,
                email: this.email,
                password: '',
                password_confirmation: '',
                is_active: 1,
                image: null,
                option: 'activation'
            }),
            form2: useForm({
                image: null,
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
                // this.form2.post('/profile', {
                //     errorBag: 'updateProfileInformation',
                //     preserveScroll: true,
                //     onSuccess: () => {
                //         this.uploaded = true;
                //     },
                // });
            }, false);

            if (file) { 
                reader.readAsDataURL(file); 
            }
        },
        create(){
            this.form.id = this.id;
            this.form.post('/reset-password',{
                errorBag: 'updatePassword',
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
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
<style>
.auth-page-wrapper {
    background-color: hsl(201, 80%, 82%);
}
</style>
