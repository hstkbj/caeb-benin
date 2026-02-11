<template>
  
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(/assets/images/background/bg-banner-1.jpg);"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>{{ domaine.title }}</h1>
            <ul class="bread-crumb clearfix">
                <li>
                    <RouterLink to="/">Accueil</RouterLink>
                </li>
                <li class="active">Domaine d'intervention</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Event Details-->
                    <div class="event-details">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/assets/images/resource/event-image-11.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                            	<h2 class="mb-4">{{ domaine.title }}</h2>
                                <div class="text-content">
                                	<p style="text-align: justify;" v-html="formattedContent"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <h3 class="sidebar-title">Autre Domaine</h3>
                            <div class="text">Découvrez d'autre domaine dans lequel nous intervenons</div>
                            <div class="widget-content">
                                <ul>
                                    <li v-for="(data,index) in otherDomaines" :key="index"><RouterLink :to="'/domaine/'+data.slug">{{ data.title }}</RouterLink></li>
                                </ul>
                            </div>
                        </div>
                        
                                            
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

</template>

<script setup>

import { computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()

const domaineData = [
    {
        icon: 'fa-light fa-graduation-cap',
        slug: 'education',
        title: 'Éducation',
        description: "Faciliter l'accès à l'école et garantir une qualité d'enseignement optimale pour tous les enfants.",
        content: `L'éducation constitue le fondement de notre engagement au CAEB. Depuis 1975, nous œuvrons pour que chaque enfant, chaque jeune et chaque adulte au Bénin puisse accéder à une éducation de qualité, indépendamment de son origine sociale ou de son milieu de résidence. Notre conviction profonde est que l'éducation est la clé de l'autonomisation individuelle et collective, ainsi que du développement durable de nos communautés.

Nous intervenons sur l'ensemble de la chaîne éducative, de l'accès initial à l'école jusqu'à la formation professionnelle. Notre approche holistique intègre non seulement le soutien direct aux apprenants, mais aussi le renforcement des capacités des acteurs éducatifs et l'amélioration des infrastructures scolaires. Nous croyons fermement qu'une éducation de qualité passe par des enseignants bien formés, des environnements d'apprentissage adaptés et une implication active des familles et des communautés.

<strong>Nos actions concrètes :</strong>

• Programme de bourses scolaires et universitaires (Bourses VALLET) permettant à des centaines d'élèves méritants mais démunis de poursuivre leurs études

• Réhabilitation et équipement des infrastructures scolaires dans les zones rurales et urbaines défavorisées

• Formation continue des enseignants aux pédagogies actives et à la gestion de classe inclusive

• Distribution de kits scolaires complets et mise en place de bibliothèques scolaires

• Programme OVIDAGBE d'éducation à la citoyenneté, aux droits humains et à la culture de la paix

• Sensibilisation intensive des parents et des communautés sur l'importance de la scolarisation, en particulier des filles

• Accompagnement pédagogique personnalisé pour les élèves en difficulté d'apprentissage`
    },
    {
        icon: 'fa-light fa-heartbeat',
        slug: 'sante-petite-enfance',
        title: 'Santé & Petite Enfance',
        description: "Lutter contre la malnutrition et offrir un développement harmonieux aux enfants de 0 à 5 ans.",
        content: `La santé et le bien-être de la petite enfance représentent un pilier central de notre action au CAEB. Conscients que les mille premiers jours de la vie d'un enfant déterminent irréversiblement son développement physique, cognitif et émotionnel futur, nous avons développé des programmes ciblés pour donner à chaque nouveau-né le meilleur départ possible dans la vie.

Notre approche intégrée combine la prévention, l'éducation et l'accompagnement direct des familles. Nous travaillons en étroite collaboration avec les structures sanitaires locales, les relais communautaires et les autorités administratives pour créer un environnement protecteur favorable au développement harmonieux des tout-petits. Notre objectif est de réduire significativement la mortalité infantile et juvénile tout en luttant contre les handicaps du développement liés à la malnutrition.

<strong>Nos actions concrètes :</strong>

• Dépistage et prise en charge de la malnutrition aiguë chez les enfants de moins de cinq ans

• Suivi de croissance régulier et campagnes de vaccination systématiques dans les zones reculées

• Éducation parentale sur les pratiques d'alimentation infantile et la préparation des repas nutritifs à base des produits locaux

• Création et gestion de crèches communautaires de qualité offrant un environnement stimulant pour la petite enfance

• Promotion et soutien à l'allaitement maternel exclusif pendant les six premiers mois

• Prévention et traitement des maladies courantes de l'enfance, notamment le paludisme et les infections respiratoires

• Distribution de kits d'hygiène et sensibilisation aux pratiques essentielles de soins`
    },
    {
        icon: 'fa-light fa-hands-helping',
        slug: 'actions-sociales',
        title: 'Actions sociales',
        description: "Accompagner les communautés vulnérables vers l'autonomie et promouvoir une inclusion durable.",
        content: `Notre action sociale vise à bâtir des communautés résilientes, solidaires et inclusives où chaque personne, quelle que soit sa situation, trouve sa place et peut contribuer au bien commun. Le CAEB place l'humain au centre de toutes ses interventions, en privilégiant une approche participative qui respecte la dignité et renforce les capacités des bénéficiaires.

Nous intervenons auprès des populations les plus vulnérables, notamment les enfants en situation difficile, les femmes en précarité, les personnes handicapées et les familles démunies. Notre méthodologie repose sur l'écoute, l'accompagnement sur mesure et la création de réseaux de solidarité locale. Nous croyons que l'autonomie véritable naît de la confiance en soi et des opportunités concrètes de développement personnel et économique.

<strong>Nos actions concrètes :</strong>

• Programme de parrainage individualisé d'enfants vulnérables assurant leur prise en charge éducative, sanitaire et nutritionnelle

• Appui à la gouvernance participative locale et renforcement des capacités des leaders communautaires

• Projet Ouémé 2023 sur l'hygiène menstruelle et l'éducation des filles, incluant la distribution de kits sanitaires réutilisables

• Programmes d'autonomisation économique des femmes par la formation professionnelle et le microcrédit

• Protection de l'enfance contre les violences, l'exploitation et la négligence par des mécanismes de veille communautaire

• Inclusion active des personnes vivant avec un handicap dans les activités éducatives, sociales et économiques

• Médiation sociale et appui psychosocial aux familles en situation de crise`
    },
    {
        icon: 'fa-light fa-futbol',
        slug: 'loisir',
        title: 'Loisir',
        description: "Promouvoir la citoyenneté active, la culture de la paix et des activités éducatives ludiques.",
        content: `Le loisir éducatif constitue une approche innovante et efficace du CAEB pour développer les compétences sociales, civiques et créatives des enfants et des jeunes. Nous sommes convaincus que l'apprentissage par le jeu, le sport et les arts génère des changements durables et crée des espaces de cohésion sociale essentiels dans nos communautés.

Nos programmes ludiques visent à développer l'esprit critique, la créativité, le respect de l'autre et les valeurs citoyennes fondamentales. À travers des activités attrayantes et participatives, nous éduquons à la prévention des conflits, à la résolution pacifique des différends et à l'engagement communautaire. Le loisir devient ainsi un outil puissant de transformation sociale et de consolidation de la paix.

<strong>Nos actions concrètes :</strong>

• Programme OVIDAGBE d'éducation à la citoyenneté et à la culture de la paix par le théâtre forum et les jeux de rôles

• Organisation de tournois sportifs scolaires et communautaires promouvant le fair-play et l'unité

• Création de clubs de lecture, d'expression orale et de débat dans les écoles et les quartiers

• Ateliers d'arts plastiques, de théâtre et de musique pour développer l'expression créative des jeunes

• Camps de vacances éducatifs mêlant formation civique, activités sportives et découverte culturelle

• Conception et distribution de jeux éducatifs ludiques abordant les thèmes de l'environnement, de la santé et de la citoyenneté

• Festivals culturels intercommunautaires célébrant la diversité et renforçant les liens sociaux`
    },
];

const domaine = computed(()=>{
    return domaineData.find(d => d.slug === route.params.slug)
})

// Formater le contenu pour remplacer les sauts de ligne par des balises <p>
const formattedContent = computed(() => {
  if (!domaine.value) return ''
  return domaine.value.content
    .split('\n\n')
    .map(paragraph => `<p>${paragraph.replace(/\n/g, '<br>')}</p>`)
    .join('')
})

const otherDomaines = computed(() => {
  // Garder l'ordre original, juste exclure l'actuel
  return domaineData.filter(d => d.slug !== route.params.slug)
})

</script>

<style>

</style>