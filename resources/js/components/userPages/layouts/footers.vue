<template>
  
    <!-- Main Footer -->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
                        	<div class="widget-content">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="/assets/images/logo2.png" width="100" alt="" /></a>
                                </div>
                                <div class="text" style="text-align: justify;">Le Collectif d’Animation des Écoles du Bénin (CAEB) est une ONG créée en 1975, engagée dans la formation des éducateurs et la promotion du bien-être des communautés.</div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://www.facebook.com/Conseildesactiviteseducativesdubenin?mibextid=ZbWKwL" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="https://youtube.com/@caeb-benin?si=LKL5pHZxbCWc_KDf" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<div class="widget-content">
								<h3>Nos Domaine</h3>
                                <ul>
                                    <li v-for="(domaine,index) in domaineData" :key="index"><RouterLink :to="`/domaine/${domaine.slug}`">{{ domaine.title }}</RouterLink></li>
                                </ul>
							</div>	
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget info-widget">
							<div class="widget-content">
								<h3>Contacts</h3>
								<ul class="contact-info">
                                	<li>01 BP BP 1484 P/N PORTO NOVO – BENIN</li>
                                    <li><a href="tel:+2290196474409">+229 019 647 4409/ 016 114 5396</a></li>
                                    <li><a href="mailto:caeb@caeb-benin.com">caeb@caeb-benin.com</a></li>
                                </ul>
							</div>	
						</div>
					</div>
                    
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<div class="widget-content">
								<h3>Top News</h3>
                                <!--News Post-->
								<div class="news-post">
                                	<div class="post-thumb"><a href="#"><img src="assets/images/resource/post-thumb-1.jpg" alt=""></a></div>
                                	<h5><a href="#">School for African Childrens</a></h5>
                                    <div class="date">July 25, 2019</div>
                                </div>
                                <!--News Post-->
								<div class="news-post">
                                	<div class="post-thumb"><a href="#"><img src="assets/images/resource/post-thumb-2.jpg" alt=""></a></div>
                                	<h5><a href="#">School for African Childrens</a></h5>
                                    <div class="date">July 25, 2019</div>
                                </div>
							</div>	
						</div>
					</div>
					
				</div>
                
			</div>
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				
				<!--Scroll to top-->
				<div class="clearfix">
                	<div class="copyright">CAEB  &copy;  2026 All Right Reserved</div>
                    <ul class="bottom-links">
                    	<li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="/admins" target="_blank">Admin</a></li>
                    </ul>
				</div>
			</div>
		</div>
		
	</footer>

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