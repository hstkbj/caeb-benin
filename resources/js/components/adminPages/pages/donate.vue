<template>
    <div class="container-fluid">
   
       <div class="page-title-head d-flex align-items-center">
           <div class="flex-grow-1">
               <h4 class="page-main-title m-0">Liste des Dons reçus</h4>
           </div>
   
           <div class="text-end">
               <ol class="breadcrumb m-0 py-0">
                   <li class="breadcrumb-item"><RouterLink to="/admins;">Tableau de bord</RouterLink></li>
                   <li class="breadcrumb-item active">Dons</li>
               </ol>
           </div>
       </div>
   
       <div class="row mt-4">
           <div class="col-12">
               <div class="card p-3">
   
                   <div class="card-body">
   
                       <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                           <div class=""></div>
                           <button class="btn btn-primary"><i class="fas fa-plus me-2"></i> Ajouter une Actualité</button>
                       </div> -->
   
                       <DataTable/>
                   </div>
   
               </div>
           </div>
       </div>
   
    </div>
   </template>
   
   <script setup>
   
       import DataTable from '../Datatable/Datatable.vue'
   
   </script>
   
   <style>
   
   </style>