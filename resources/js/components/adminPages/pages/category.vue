<template>
 <div class="container-fluid">

    <div class="page-title-head d-flex align-items-center">
        <div class="flex-grow-1">
            <h4 class="page-main-title m-0">Liste des catégories</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><RouterLink to="/admins;">Tableau de bord</RouterLink></li>
                <li class="breadcrumb-item active">Catégorie</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card p-3">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class=""></div>
                        <button @click="showModal" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Ajouter un catégorie</button>
                    </div>

                    <DataTable :data="allcategory" :columns="columns" />
                </div>

            </div>
        </div>
    </div>

    <div class="modal modal-top fade" id="addcategory" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <form class="modal-content"
                @submit.prevent="!isEdite ? AddCategoryFunction() : UpdatecategoryFunction()">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">{{ modalTitle }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12 mb-3">
                            <label for="nameSlideTop" class="form-label">Nom Catégorie </label>
                            <input type="text" :class="isEmpty.name ? 'is-invalid border border-danger' : ''"
                                v-model="data.name" id="nameSlideTop" class="form-control"
                                placeholder="Entrez le titre du portfolio" />
                            <div v-if="isEmpty.name" class="invalid-feedback">
                                {{ msgInput.name }}
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Fermer
                    </button>
                    <button v-if="isLoader" disabled class="btn btn-primary" type="submit">
                        <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                    <button v-else type="submit" class="btn btn-primary">{{ modalbutton }}</button>
                </div>
            </form>
        </div>
    </div>

 </div>
</template>

<script setup>

    import { onMounted, ref } from 'vue';
    import DataTable from '../Datatable/Datatable.vue'
    import {AllCategory, postCategory, singleCategory, updateCategory} from '../api/category'
import Swal from 'sweetalert2';

    let addmodal;

    const data = ref({
        id:'',
        name:''
    })
    const allcategory = ref([])
    const isEmpty = ref({})
    const msgInput = ref({})
    const isLoader = ref(false)
    const isEdite = ref(false)
    const modalTitle = ref('')
    const modalbutton = ref('')

    function showModal(){
        addmodal.show();
        data.value = {
            id:'',
            name:''
        }
        modalTitle.value = 'Ajouter une catégorie'
        modalbutton.value = 'Enrégistrer'
        isEmpty.value = {}
        msgInput.value = {}
        isEdite.value = false
    }

    async function AllCategoryFunction() {
        allcategory.value = await AllCategory()
    }

    const columns = [
        {
            title: '#',
            data: null,
            render: function (data, type, row, meta) {
                return meta.row + 1; // Index (1-based)
            }
        },
        { title: 'Nom Catégorie', data: 'name' },
        {
            title: 'Crée le', data: 'created_at', render: (data, type, row) => {
                // Formater la date
                const date = new Date(row.created_at); // Assure-toi que `created_at` est au format ISO ou timestamp
                return new Intl.DateTimeFormat('fr-FR', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                }).format(date); // Formater la date à la française
            }
        },
        {
            title: 'Actions',
            data: null,
            render: function (data, type, row) {
                return `
                    <div class="d-flex align-items-center">
                        <a onClick="getCategoryFunction(${row.id})" class="btn btn-secondary text-white  me-2" data-bs-toggle="modal" data-bs-target="#edit_role">
                            <i class="fa fa-edit "></i> 
                        </a> 
                        <a onClick="DeletePorfolioFunction(${row.id})" class="btn btn-danger text-white me-2">
                            <i class="fa fa-trash "></i> 
                        </a> 
                    </div>`;
            }
        }
    ]

    async function AddCategoryFunction() {
        const ignoredFields = ['id']
        for (const field in data.value) {
            if (ignoredFields.includes(field)) continue
            isEmpty.value[field] = !data.value[field]
            msgInput.value[field] = `Please enter ${field.replace('_', ' ')}`;
        }

        const allEmpty = Object.values(isEmpty.value).every(value => value === false);
        if (allEmpty){
            isLoader.value = true;
            await postCategory(data.value).then(res=>{
                isLoader.value = false;
                Swal.fire({
                    icon: 'success',
                    title: 'Catégorie créer avec succès',
                    showConfirmButton: false,
                    timer: 1500
                });
                addmodal.hide();
                AllCategoryFunction();
                
            }).catch(error => {
                console.error('There was an error!', error);
                Swal.fire({
                    icon: 'error',
                    title: 'An error occurred while adding the portfolio.',
                    text: error.message || 'Please try again later.'
                });
            }).finally(() => {
                isLoader.value = false;
            });
        }
    }

    window.getCategoryFunction = async (id)=>{
        data.value = await singleCategory(id)
        addmodal.show()
        modalTitle.value = 'Modifier une catégorie'
        modalbutton.value = 'Modifié'
        isEdite.value = true
    }

    async function UpdatecategoryFunction() {
        isLoader.value = true
        await updateCategory(data.value.id,data.value).then(res=>{
            isLoader.value = false
            isEdite.value = false
            Swal.fire({
                icon: 'success',
                title: 'Modification effectué',
                showConfirmButton: false,
                timer: 1500
            });
            data.value = {
                id:'',
                name:''
            }
            addmodal.hide();
            AllCategoryFunction()
        })
    }

    onMounted(()=>{
        addmodal = new bootstrap.Modal(document.getElementById('addcategory'));
        AllCategoryFunction()
    })

</script>

<style>

</style>