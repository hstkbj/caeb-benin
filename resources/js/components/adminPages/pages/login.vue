<template lang="html">
 
 <div class="position-absolute top-0 end-0">
            <img src="/admin/assets/images/auth-card-bg.svg" class="auth-card-bg-img" alt="auth-card-bg" />
        </div>
        <div class="position-absolute bottom-0 start-0" style="transform: rotate(180deg)">
            <img src="/admin/assets/images/auth-card-bg.svg" class="auth-card-bg-img" alt="auth-card-bg" />
        </div>
        <div class="auth-box overflow-hidden align-items-center d-flex">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-md-6 col-sm-8">
                        <div class="card p-4">
                            <div class="auth-brand text-center mb-2">
                                <a href="/" class="logo-dark" style="height: 50px !important;">
                                    <img src="/assets/images/sticky-logo2.png" alt="dark logo" style="height: 50px !important;" />
                                </a>
                                <a href="/" class="logo-light">
                                    <img src="/assets/images/sticky-logo2.png" alt="logo" />
                                </a>
                                <h4 class="fw-bold text-dark mt-3">Ravi de vous revoir. 👋</h4>
                                <p class="text-muted w-lg-75 mx-auto">Connectez-vous. Entrez votre adresse e-mail et votre mot de passe pour continuer.</p>
                            </div>
                            
                            <form @submit.prevent="LoginForm">
                                <div class="mb-3">
                                    <label for="userEmail" class="form-label">
                                        Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="userEmail" :class="isEmpty.email ? 'is-invalid border border-danger' : ''" v-model="dataLogin.email" placeholder="you&#64;example.com" required />
                                    </div>
                                    <div v-if="isEmpty.email" class="invalid-feedback">
                                        {{ msgInput.email }}
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="userPassword" class="form-label">
                                        Mot de passe
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input :type="showpwd ? 'text' : 'password'"  :class="isEmpty.password ? 'is-invalid border border-danger' : ''" v-model="dataLogin.password" class="form-control" id="userPassword" placeholder="••••••••" required />
                                        <span class="input-group-text cursor-pointer" @click="togglePwd"><i class="fa-regular " :class="showpwd ? 'fa-eye-slash' : 'fa-eye'"></i></span>
                                    </div>
                                    <div v-if="isEmpty.password" class="invalid-feedback">
                                        {{ msgInput.password }}
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        
                                    </div>
                                    <a href="auth-reset-pass.html" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                                </div>

                                <div class="d-grid">
                                    <button v-if="isLoader" class="btn btn-primary d-grid w-100 d-flex align-items-center justify-content-center" type="submit">
                                        <div class="spinner-border text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                    <button v-else type="submit" class="btn btn-primary fw-semibold py-2">Sign In</button>
                                </div>
                            </form>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>

</template>

<script setup>

import { onMounted,ref } from 'vue';
import { useRouter } from 'vue-router';
import {postData} from '../plugins/api'

const router = useRouter();
const dataLogin = ref({
    email:'',
    password:''
})

const isEmpty = ref({})
const msgInput = ref({})
const isLoader = ref(false)
const showpwd = ref(false)

async function LoginForm() {

    for (const field in dataLogin.value) {
    isEmpty.value[field] = !dataLogin.value[field];
    msgInput.value[field] = 'This field is empty';
    }

    const allEmpty = Object.values(isEmpty.value).every(value => value === false)

    if (allEmpty){
        isLoader.value = true
        await postData('/login',dataLogin.value).then(res=>{
            if (res.status === 200) {
            isLoader.value = false
            localStorage.setItem('token', res.data.token)
            // Rediriger vers la route sauvegardée ou par défaut
            const redirectUrl = localStorage.getItem('redirectAfterLogin');
            if (redirectUrl) {
                // Forcer une redirection complète du navigateur
                window.location.href = redirectUrl;
                localStorage.removeItem('redirectAfterLogin');
            } else {
                //router.push('/');
                window.location.href = "/admins"
            }
            }
        }).catch(error=>{
            if (error.response) {
            if (error.response.status === 401) {
                isLoader.value = false
                isEmpty.value.email = true
                isEmpty.value.password = true
                msgInput.value.email = error.response.data.message
                msgInput.value.password = error.response.data.message
            } else {
                console.error("Erreur du serveur :", error.response.data.message || "Veuillez réessayer plus tard.");
            }
            }
        })          
    }

}

const togglePwd = ()=>{
    showpwd.value = !showpwd.value
}

</script>

<style>

</style>