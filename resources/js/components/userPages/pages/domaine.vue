<template>
  
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(assets/images/background/bg-banner-1.jpg);"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Nos domaine d'intervention</h1>
            <ul class="bread-crumb clearfix">
                <li>
                    <RouterLink to="/">Accueil</RouterLink>
                </li>
                <li class="active">Domaine d'intervention</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--What We Do Section-->
    <section class="what-we-do py-5 ">
        <div class="auto-container">
        
        	  <div class="sec-title centered">
                <div class="sub-title"> Nos domaines d'intervention</div>
                <h2>Quatre domaines d'action pour un impact durable</h2>
                <div class="text">Le CAEB intervient dans quatre grands domaines complémentaires pour offrir une réponse globale aux besoins des populations. Chaque domaine s'articule avec les autres pour maximiser l'impact de nos actions. </div>
            </div>
                        
        	<div class="row clearfix">
            
            	<!--Service Block-->
                <div v-for="(domain,index) in domaineData" :key="index" class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span :class="domain.icon"></span></div>
                        <RouterLink :to="'/domaine/'+domain.slug"><h3 class="text-dark">{{ domain.title }}</h3></RouterLink>
                        <div class="text">{{ domain.description }}</div>
                    </div>
                </div>
                
            </div>
            
            <div class="bottom-image"><img src="assets/images/resource/services-bottom-image.png" alt=""></div>
            
        </div>
    </section>

</template>

<script setup>

const domaineData = [
    {
        icon: 'fa-light fa-graduation-cap',
        slug: 'education',
        title: 'Éducation',
        description: "Faciliter l'accès à l'école et garantir une qualité d'enseignement optimale pour tous les enfants."
    },
    {
        icon: 'fa-light fa-heartbeat',
        slug: 'sante-petite-enfance',
        title: 'Santé & Petite Enfance',
        description: "Lutter contre la malnutrition et offrir un développement harmonieux aux enfants de 0 à 5 ans."
    },
    {
        icon: 'fa-light fa-hands-helping',
        slug: 'actions-sociales',
        title: 'Actions sociales',
        description: "Accompagner les communautés vulnérables vers l'autonomie et promouvoir une inclusion durable."
    },
    {
        icon: 'fa-light fa-futbol',
        slug: 'loisir',
        title: 'Loisir',
        description: "Promouvoir la citoyenneté active, la culture de la paix et des activités éducatives ludiques."
    },
];

</script>

<style>

</style>