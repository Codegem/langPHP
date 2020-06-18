<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en" && lang="lt">
<head>
    <title>Beretos WebSolution</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
wp_head()
?>
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a class="scrollto" href="#hero">
                    <span class="logo-icon-wrapper fas fa-crown"></span>
                    <span class="text"><span class="highlight"> Beretos </span> WebSolution/> </span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-expand-md float-right navbar-inverse" role="navigation">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="active nav-link scrollto" href="#about"><?php echo $lang['About']?></a></li>
                        <!-- <li class="nav-item"><a class="nav-link scrollto" href="#testimonials"><?php echo $lang['Testimonials']?></a></li> -->
                        <li class="nav-item"><a class="nav-link scrollto" href="#features"><?php echo $lang['Features']?></a></li>                        
                        <!-- <li class="nav-item"><a class="nav-link scrollto" href="#team"><?php echo $lang['Team']?></a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link scrollto" href="#pricing"><?php echo $lang['Pricing']?></a></li> -->
                        <li class="nav-item"><a class="nav-link scrollto" href="#contact"><?php echo $lang['Contact']?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?lang=lt" class="language"><img src="<?php bloginfo('template_directory');?>/assets/images/flagLT.jpg" alt="Lithuanian" height="15px" width="15px"/></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?lang=en" class="language"><img src="<?php bloginfo('template_directory');?>/assets/images/flagEN.jpg" alt="English" height="15px" width="15px" /></a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->  
        </div><!--//container-->
    </header><!--//header-->
    <div id="hero" class="hero-section">
        
        <div id="hero-carousel" class="hero-carousel carousel slide" data-ride="carousel" data-interval="7000">
                <div class="figure-holder-wrapper">
                <video autoplay loop muted poster="">
                    <source src="<?php bloginfo('template_directory');?>/assets/Video/video.mp4" type="video/mp4">
                </video>
                    <div class="container">
                        <div class="row justify-content-end">
                        </div><!--//row-->
                    </div><!--//container-->
    		</div><!--//figure-holder-wrapper-->
            
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
				<li data-slide-to="1" data-target="#hero-carousel"></li>
				<li data-slide-to="2" data-target="#hero-carousel"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="carousel-item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        
				            <h2 class="heading"><?php echo $lang['h1']?> <br class="d-none d-md-block"><?php echo $lang['h1-2']?></h2>
				            <p class="intro"><?php echo $lang['intro']?></p>
				            <a class="btn btn-primary btn-cta" href="#" target="_blank"><?php echo $lang['download']?></a>
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="carousel-item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading"><?php echo $lang['bootstrap-lova']?></h2>
				            <p class="intro"><?php echo $lang['bootLova-txt']?></p>
				            <a class="btn btn-primary btn-cta" href="#" target="_blank"><?php echo $lang['find']?></a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="carousel-item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading"><?php echo $lang['product']?></h2>
				            <p class="intro"><?php echo $lang['product-txt']?></p>
				            <a class="btn btn-primary btn-cta" href="#" target="_blank"><?php echo $lang['start']?></a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
    </div><!--//hero-->
    <div id="about" class="about-section ">
        <div class="container text-center">
            <h2 class="section-title"><?php echo $lang['container-why']?></h2>
            <p class="intro"><?php echo $lang['container-why-txt']?></p>
            <ul class="technologies list-inline">
                <li class="list-inline-item"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-html5.svg" alt="HTML5"></li>
                <li class="list-inline-item"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-css3.svg" alt="CSS3"></li>
                <li class="list-inline-item"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-bootstrap.svg" alt="Bootstrap"></li>
                <li class="list-inline-item"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-sass.svg" alt="Sass"></li>
                <li class="list-inline-item"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-jquery.svg" alt="jQuery"></li>
            </ul>
            
            <div class="items-wrapper row">
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="<?php bloginfo('template_directory');?>/assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title"><?php echo $lang['design']?></h3>
                        <div class="item-desc">
                        <?php echo $lang['design-text']?>
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="<?php bloginfo('template_directory');?>/assets/images/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title"><?php echo $lang['maintance']?></h3>
                        <div class="item-desc">
                            <?php echo $lang['maintance-text']?> 
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="<?php bloginfo('template_directory');?>/assets/images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title"><?php echo $lang['device']?></h3>
                        <div class="item-desc">
                            <?php echo $lang['device-text']?>
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->
    <div id="features" class="features-section team-section">
        <div class="container text-center">
            <h2 class="section-title"><?php echo $lang['our-works-title']?></h2>
            <p class="intro"><?php echo $lang['our-works-txt']?></p>
            
            <div class="tabbed-area row">
                
                <!-- Nav tabs -->
                <div class="feature-nav nav nav-pill flex-column col-lg-4 col-md-6 col-12 order-0 order-md-1" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active mb-lg-3" href="#feature-1" aria-controls="feature-1" data-toggle="pill" role="tab" aria-selected="true"><i class="fas fa-magic mr-2"></i>DkGolden Website</a>
                     <a class="nav-link mb-lg-3" href="#feature-2" aria-controls="feature-2" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-cubes mr-2"></i>100+ Components and Widgets</a>
                     <a class="nav-link mb-lg-3" href="#feature-3" aria-controls="feature-3" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-chart-bar mr-2"></i>Useful Chart Libraries</a>
                     <a class="nav-link mb-lg-3" href="#feature-4" aria-controls="feature-4" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-code mr-2"></i>Valid HTML5 + CSS3</a>
                     <a class="nav-link mb-lg-3" href="#feature-5" aria-controls="feature-5" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-rocket mr-2"></i>Built on Bootstrap 4 &amp; SCSS</a>
                     <a class="nav-link mb-lg-3" href="#feature-6" aria-controls="feature-6" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-mobile-alt mr-2"></i>Fully Responsive</a>
                     <a class="nav-link mb-lg-3" href="#feature-7" aria-controls="feature-7" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-star mr-2"></i>Beautiful UI</a>
                     <a class="nav-link mb-lg-3" href="#feature-8" aria-controls="feature-8" data-toggle="pill" role="tab" aria-selected="false"><i class="fas fa-heart mr-2"></i>Free Updates &amp; Support</a>                   
                </div>
                
                <!-- Tab panes -->
                <div class="feature-content tab-content col-lg-8 col-md-6 col-12 order-1 order-md-0">
                    <div role="tabpanel" class="tab-pane fade show active" id="feature-1">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-1.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-2">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-2.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-3">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-3.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-4">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-4.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-5">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-5.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-6">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-6.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-7">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-7.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-8">
                        <a href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/feature-8.png" alt="screenshot" ></a>
                    </div>
                    
                </div><!--//feature-content-->

                
            </div><!--//tabbed-area-->
            
        </div><!--//container-->
    </div><!--//features-->
    <div id="pricing" class="pricing-section">
        <div class="container text-center">
            <h2 class="section-title">Pricing</h2>
            <div class="intro">AppKit Landing's future updates are 100% FREE for existing customers</div>
            <div class="pricing-wrapper row">
                <div class="item item-1 col-md-4 col-12">
                    <div class="item-inner">
                        <h3 class="item-heading">FREE<br><span class="item-heading-desc">(CC BY 3.0)</span></h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">0</span>
                        </div><!--//price-figure-->
                        <ul class="list-unstyled mb-3">
	                        <li class="mb-2"><i class="fas fa-check"></i> Single installation</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Multiple installations</li>
                            <li class="mb-2"><i class="fas fa-times"></i> Use without attribution link</li>
                        </ul>
                        <div class="mb-3"><a href="#" target="_blank">License Details</a></div>
                        <a class="btn btn-cta" href="#">Get it now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-2 col-md-4 col-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Single Application<br><span class="item-heading-desc">(Commercial License)</span></h3>
                       
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">29</span>
                        </div><!--//price-figure-->
                        <ul class="list-unstyled mb-3">
	                        <li class="mb-2"><i class="fas fa-check"></i> Single installation</li>
	                        <li class="mb-2"><i class="fas fa-times"></i> Multiple installations</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Use without attribution link</li>
                        </ul>
                        <div class="mb-3"><a href="#" target="_blank">License Details</a></div>
                        <a class="btn btn-cta" href="#">Get it now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item item-3 col-md-4 col-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Multiple Applications<br><span class="item-heading-desc">(Commercial License)</span></h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">99</span>
                        </div><!--//price-figure-->
                        <ul class="list-unstyled mb-3">
	                        <li class="mb-2"><i class="fas fa-check"></i> Single installation</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Multiple installations</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Use without attribution link</li>
                        </ul>
                        <div class="mb-3"><a href="#" target="_blank">License Details</a></div>
                        <a class="btn btn-cta" href="#" target="_blank">Get it now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//pricing-wrapper-->
            
        </div><!--//container-->
    </div><!--//pricing-section-->
    <div id="contact" class="contact-section">
        <div class="container text-center">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                
            </div>
            <a class="btn btn-cta btn-primary" href="#">Get in Touch</a>
            
        </div><!--//container-->
    </div><!--//contact-section-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">ReDesigned <i class="fas fa-heart"></i> by <a href="#" target="_blank">Efka Je</a></small>
            
            
        </div><!--//container-->
    </footer>
    <?php 
    wp_footer()
    ?>
</body>
</html> 