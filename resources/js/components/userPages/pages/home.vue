<template>
  
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(assets/images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <h2>50 ans d'engagement pour l'éducation et le développement au Bénin </h2>
                        <div class="text">Depuis 1975, le CAEB accompagne les enfants, les jeunes et les femmes vers un avenir meilleur grâce à l'éducation et la formation. </div>
                        <div class="btn-box"><RouterLink to="/donate" class="theme-btn btn-style-one"><span class="btn-title">Faire un don</span></RouterLink></div>
                    </div>  
                </div>
            </div>
            
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section style-two alternate">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title">A propos de nous</div>
                            <h2>L'éducation au cœur de tout</h2>
                            <div class="text" style="text-align: justify;">Fondée en 1975, notre Organisation Non Gouvernementale est spécialisée dans la formation, l'éducation et l'éducation au développement. Notre mission est d'assurer la formation permanente des éducateurs pour la promotion et le bien-être des enfants, des femmes, des adolescents et des adultes. À travers des actions partenariales, nous créons et mettons en réseau des espaces éducatifs et sociaux où chacun peut apprendre et s'épanouir.</div>
                            <div class="link-box clearfix"><RouterLink to="/about" class="theme-btn btn-style-one"><span class="btn-title">En savoir plus</span></RouterLink></div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="images clearfix">
                            <figure class="image wow fadeInRight" data-wow-delay="300ms"><img src="assets/images/resource/featured-image-19.jpg" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay="0ms"><img src="assets/images/resource/featured-image-20.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--What We Do Section-->
    <section class="what-we-do py-5 ">
        <div class="auto-container">
        
        	  <div class="sec-title centered">
                <div class="sub-title"> Nos domaines d'intervention</div>
                <h2>De l'éducation à la santé, pour tous</h2>
                <div class="text">Quatre axes d'action pour transformer les vies</div>
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
            
            <!-- <div class="bottom-image"><img src="assets/images/resource/services-bottom-image.png" alt=""></div> -->
            
        </div>
    </section>

    <!-- Funfacts Section -->
    <section class="facts-section">
      <div class="auto-container">
        <div class="inner-container">
        
          <!-- Fact Counter -->
          <div class="fact-counter">
            <div class="row clearfix">

              <!--Column-->
              <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="content">
                    <div class="count-outer count-box">
                      <span class="count-text" data-speed="3000" data-stop="1975">0</span>
                    </div>
                    <div class="counter-title">Année de création </div>
                  </div>
                </div>
              </div>

              <!--Column-->
              <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="content">
                    <div class="count-outer count-box alternate">
                      <span class="count-text" data-speed="3000" data-stop="50">0</span>+
                    </div>
                    <div class="counter-title">Années d'expérience</div>
                  </div>
                </div>
              </div>

              <!--Column-->
              <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="content">
                    <div class="count-outer count-box">
                      <span class="count-text" data-speed="2000" data-stop="10000">0</span>+
                    </div>
                    <div class="counter-title">Enfants accompagnés</div>
                  </div>
                </div>
              </div>
              
              <!--Column-->
              <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                  <div class="content">
                    <div class="count-outer count-box">
                      <span class="count-text" data-speed="2000" data-stop="15">0</span>+
                    </div>
                    <div class="counter-title">Projets en cours</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- End Funfacts Section -->

    <!-- Sponsors / Partners Section -->
    <section class="sponsors-section py-5">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="sub-title">Partenaires</div>
                <h2>Nos partenaires</h2>
                <div class="text">Nous travaillons avec des organisations engagées pour l'éducation et le développement.
                </div>
            </div>

            <div class="sponsors-carousel owl-carousel owl-theme">
                <figure class="sponsor-item"><a href="#"><img src="assets/images/clients/client-1.png"
                            alt="Partenaire 1"></a></figure>
                <figure class="sponsor-item"><a href="#"><img src="assets/images/clients/client-2.png"
                            alt="Partenaire 2"></a></figure>
                <figure class="sponsor-item"><a href="#"><img src="assets/images/clients/client-3.jpg"
                            alt="Partenaire 3"></a></figure>
            </div>
        </div>
    </section>

    <!--Upcoming Events Section-->
    <section class="upcoming-events py-5 ">
    	<div class="circle-one"></div>
        <div class="circle-two"></div>
        
        <div class="auto-container">
        
        	<div class="sec-title centered">
                <div class="sub-title">Upcoming Events</div>
                <h2>Our Events</h2>
                <div class="text">Cupidatat non proident sunt</div>
            </div>
            
            <div class="carousel-box">
            
            	<div class="single-item-carousel owl-theme owl-carousel">
                    <!--Slide-->
                    <div class="slide-item">
                    	<div class="event-block">
                            <div class="inner-box clearfix">
                                <div class="image-column">
                                    <div class="image-box"><img src="assets/images/resource/event-image-1.jpg" alt=""></div>
                                    <div class="bg-image-layer" style="background-image:url(assets/images/resource/event-image-1.jpg);"></div>
                                    <a href="event-single.html" class="over-link"></a>
                                </div>
                                <div class="text-column">
                                    <div class="inner">
                                        <h3><a href="event-single.html">Donation is Hope <br>for Children</a></h3>
                                        <ul class="info clearfix">
                                            <li><span class="icon far fa-clock"></span> 9.00 AM - 11.00 PM</li>
                                            <li><span class="icon fa fa-map-marker-alt"></span> 29 Newyork City</li>
                                        </ul>
                                        <div class="text">Commodo consequat. Duis aute irure dolor in repreh enderit volupte velit ese cillum dolore fugiat nula pariatur occaecat. cupidatat non proident sunt in culpa.</div>
                                        <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-one"><span class="btn-title">Get Ticket</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                    	<div class="event-block">
                            <div class="inner-box clearfix">
                                <div class="image-column">
                                    <div class="image-box"><img src="assets/images/resource/event-image-1.jpg" alt=""></div>
                                    <div class="bg-image-layer" style="background-image:url(assets/images/resource/event-image-1.jpg);"></div>
                                    <a href="event-single.html" class="over-link"></a>
                                </div>
                                <div class="text-column">
                                    <div class="inner">
                                        <h3><a href="event-single.html">Donation is Hope <br>for Children</a></h3>
                                        <ul class="info clearfix">
                                            <li><span class="icon far fa-clock"></span> 9.00 AM - 11.00 PM</li>
                                            <li><span class="icon fa fa-map-marker-alt"></span> 29 Newyork City</li>
                                        </ul>
                                        <div class="text">Commodo consequat. Duis aute irure dolor in repreh enderit volupte velit ese cillum dolore fugiat nula pariatur occaecat. cupidatat non proident sunt in culpa.</div>
                                        <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-one"><span class="btn-title">Get Ticket</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <!--Slide-->
                    <div class="slide-item">
                    	<div class="event-block">
                            <div class="inner-box clearfix">
                                <div class="image-column">
                                    <div class="image-box"><img src="assets/images/resource/event-image-1.jpg" alt=""></div>
                                    <div class="bg-image-layer" style="background-image:url(assets/images/resource/event-image-1.jpg);"></div>
                                    <a href="event-single.html" class="over-link"></a>
                                </div>
                                <div class="text-column">
                                    <div class="inner">
                                        <h3><a href="event-single.html">Donation is Hope <br>for Children</a></h3>
                                        <ul class="info clearfix">
                                            <li><span class="icon far fa-clock"></span> 9.00 AM - 11.00 PM</li>
                                            <li><span class="icon fa fa-map-marker-alt"></span> 29 Newyork City</li>
                                        </ul>
                                        <div class="text">Commodo consequat. Duis aute irure dolor in repreh enderit volupte velit ese cillum dolore fugiat nula pariatur occaecat. cupidatat non proident sunt in culpa.</div>
                                        <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-one"><span class="btn-title">Get Ticket</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    <!--Call To Action Section-->
    <section class="call-to-action">
        
      <!--Image Layer-->
        <div class="image-layer" style="background-image:url(assets/images/background/call-to-action-1.jpg);"></div>
        
        <div class="auto-container">
            <div class="inner">
                <div class="sec-title centered">
                    <h2>Agissez avec nous</h2>
                    <div class="text">Chaque enfant mérite une chance. Votre soutien permet de scolariser, former et accompagner des milliers de jeunes vers un avenir digne. </div>
                    <div class="link-box clearfix"><RouterLink to="/donate" class="theme-btn btn-style-three"><span class="btn-title">Faire un don</span></RouterLink></div>
                </div>
            </div>
        </div>
    </section>

    <!--News Section-->
    <section class="news-section py-5">
    	<div class="top-rotten-curve"></div>
        
        <div class="auto-container">
        	
            <div class="title-box clearfix">
                <div class="sec-title">
                    <div class="sub-title">Get In Touch</div>
                    <h2>Latest Article</h2>
                </div>
                
                <div class="link"><a href="blog.html" class="theme-btn btn-style-one"><span class="btn-title">All Articles</span></a></div>
            </div>
            
            <div class="row clearfix">
            	<!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img src="assets/images/resource/blog-image-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">The Dignity of <br>Human Beings to Work</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img src="assets/images/resource/blog-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">The Power of <br>People Against Poverty</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img src="assets/images/resource/blog-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">A Driving <br> ForceOut of Poverty</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- Insta Gallery Section -->
    <section class="insta-gallery">
        <div class="insta-gallery-carousel owl-carousel owl-theme">
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/1.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/2.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/4.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>
            
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/5.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/6.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>
            
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/1.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/2.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/4.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>
            
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/5.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/gallery/6.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="assets/images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-instagram"></span></a></div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Gallery Section -->

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

.sponsor-item a{
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.sponsor-item a img {
    max-width: 100%;
    max-height: 100%;
    width: 100%;
    height: 100%;
    object-fit: contain;

}

</style>