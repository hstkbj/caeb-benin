<template>
  
  
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(/assets/images/background/bg-banner-1.jpg);"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Faire un don</h1>
            <ul class="bread-crumb clearfix">
                <li>
                    <RouterLink to="/">Accueil</RouterLink>
                </li>
                <li class="active">Faire un don</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    <!--Donate Section-->
    <section class="donate-section">
        <div class="auto-container">
        	<div class="tabs-box">
                <div class="row clearfix">
                    
                    <!--Title Column-->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                        	<h2>Please Make Your Donation</h2>
                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip exa commodo.</div>
                            <figure class="image-box"><img src="/assets/images/resource/donate-image-1.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                        	<div class="donate-form">
                                <form method="post" action="contact.html">
                                    <h3>Your Donation</h3>
                                    
                                    <div class="form-group">
                                        <div class="field-label">How much would you like to donate?</div>
                                        <div class="select-amount clearfix">
                                            <div class="select-box"><input type="radio" name="payment-group" id="radio-one"><label for="radio-one">$10</label></div>
                                            <div class="select-box"><input type="radio" name="payment-group" id="radio-two"><label for="radio-two">$20</label></div>
                                            <div class="select-box"><input type="radio" name="payment-group" id="radio-three" checked><label for="radio-three">$50</label></div>
                                            <div class="select-box"><input type="radio" name="payment-group" id="radio-four"><label for="radio-four">$100</label></div>
                                        </div>
                                        <div class="input-box"><input type="text" name="other-payment" value="" placeholder="or Give a Custom Amount"></div>
                                    </div>
                                    
                                    <div class="method">
                                        <h3>Payment Method</h3>
                                        <div class="form-group">
                                            <div class="clearfix">
                                            	<div class="radio-block"><input type="radio" id="radio-1" name="method"><label for="radio-1">Test Donation</label></div>
                                                <div class="radio-block"><input type="radio" id="radio-2" name="method"><label for="radio-2">Offline Donation</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="personal-info">
                                    	<h3>Personal Information</h3>
                                    
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">First Name</div>
                                                <input type="text" name="field-name" value="" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">Last Name</div>
                                                <input type="text" name="field-name" value="" placeholder="Last Name">
                                            </div>
                                            
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Email address</div>
                                                <input type="email" name="field-name" value="" placeholder="Email address" required>
                                            </div>
                                            
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="donation-total">Donation Total: <strong>$50.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></button>
                                    </div>
                                </form>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>    
            </div>
        </div>
    </section>


</template>

<script>
export default {

}
</script>

<style>

</style>