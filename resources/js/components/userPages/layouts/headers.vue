<template>
  
    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
				<div class="inner clearfix">
                    <div class="top-left">
                        <ul class="social-links clearfix">
                            <li class="social-title">Suivez nous:</li>
                            <li><a href="https://www.facebook.com/Conseildesactiviteseducativesdubenin?mibextid=ZbWKwL" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="https://youtube.com/@caeb-benin?si=LKL5pHZxbCWc_KDf" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
    
                    <div class="top-right">
                        <ul class="info clearfix">
                            <li><a href="tel:+2290196474409"><span class="icon fa fa-phone-alt text-white"></span> Tèl: &nbsp;+229 019 647 4409/ 016 114 5396</a></li>
                            <li><a href="mailto:caeb@caeb-benin.com"><span class="icon fa fa-envelope text-white"></span> Email: &nbsp;caeb@caeb-benin.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><RouterLink to="/" title="CAEB-Bénin"><img src="/assets/images/logo2.png" width="124" alt="CAEB-Bénin" title="CAEB-Bénin"></RouterLink></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <RouterLink exact-active-class="actives" to="/">Accueil</RouterLink>
                                    </li>
									<li>
                                        <RouterLink to="/about">A propos</RouterLink>
                                    </li>
                                    <li>
                                        <RouterLink to="/domaine">Nos Domaine</RouterLink>
                                    </li>
                                    <li>
                                        <RouterLink to="/event">Evènements</RouterLink>
                                    </li>
                                    <li>
                                        <RouterLink to="/blog">Actualité</RouterLink>
                                    </li>
                                    <li>
                                        <RouterLink to="/contact">Contact</RouterLink>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <div class="link-box clearfix">
                        	<div class="donate-link"><RouterLink to="/donate" class="theme-btn btn-style-one"><span class="btn-title">Faire un don</span></RouterLink></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <RouterLink to="/" title=""><img src="/assets/images/sticky-logo2.png" height="50" alt="" title=""></RouterLink>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix mt-2">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><RouterLink to="/"><img src="assets/images/logo2.png" width="80" alt="" title=""></RouterLink></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

</template>

<script setup>
    import { onMounted } from 'vue';
import { header } from '../../plugins/script';

    onMounted(()=>{
        header()
    })
</script>

<style>
    .router-link-active.active{
        color: rgb(60, 200, 143) !important;
    }
</style>