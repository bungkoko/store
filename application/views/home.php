<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="bengkulu, peduli, sosial, pariwisata, solusi, problem, masalah">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Herbal Store</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="<?php echo base_url()?>asset/front/css/responsive.css">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url()?>asset/front/js/vendor/modernizr-2.6.2.min.js"></script>
		
    </head>
	
    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <!--<img src="#" alt="Sample">-->
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#service">Pesona Bengkulu</a></li>
                            <li><a href="#product">Produk</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/charity-3.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>HELLO WORLD! <br>KAMI PEDULI SESAMA.</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/charity-4.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                <h2>HELLO WORLD! <br>KAMI PEDULI SESAMA.</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/img-3.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                 <h2>HELLO WORLD! <br>KAMI PEDULI SESAMA.</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #service
        ========================== -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Pesona Bengkulu</h2>    
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/monitor.png" class="media-object" alt="Monitor">
                            </a>
                            <div class="media-body">
                                <h3>Bengkulu Berkarya</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/cog.png" alt="Cog">
                            </a>
                            <div class="media-body">
                                <h3>Jelajah Bengkulu</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                        
                    </div>
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section>
        <!--
        End #service
        ========================== -->

        <!--
        #Portfolio
        ========================== -->
        
        <section id="product">

            <div class="section-title text-center wow fadeInDown">
                <h2>Bengkulu Memanggil</h2>    
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
            </div>
            
            <nav class="project-filter clearfix text-center wow fadeInLeft"  data-wow-delay="0.5s">
                <ul class="list-inline">
                    <li><a href="javascript:;" class="filter" data-filter="all">All</a></li>
                    <?php  foreach($get_list->result() as $gt_list):?>
                    <li><a href="javascript:;" class="filter" data-filter=".<?php echo $gt_list->categories_abbrev;?>"><?php echo $gt_list->categories_title;?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div id="projects" class="clearfix">
                <?php foreach($get_product->result() as $gt_product): ?>
                <figure class="mix portfolio-item <?php echo $gt_product->categories_abbrev; ?>">
                    <img class="img-responsive" src="<?php echo base_url().$gt_product->product_image;?>" alt="Portfolio Item" width="372px" height="290px">
                    <a href="<?php echo base_url().$gt_product->product_image;?>" title="Title One" rel="problem" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3><?php echo $gt_product->product_title; ?></h3>
                        <span><?php echo word_limiter(strip_tags($gt_product->product_description, 10));?>[...]</span>
                    </figcaption>
                </figure>
                <?php endforeach;?>
            </div> <!-- end #projects -->

        </section>
        <!--
        End #Portfolio
        ========================== -->

        <!--
        #about
        ========================== -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>Tentang Kami</h2>    
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!--
        End #about
        ========================== -->
        

        <!--
        #count
        ========================== -->
        
       

        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>“Berusahalah untuk tidak menjadi manusia yang berhasil tapi berusahalah menjadi manusia yang berguna”</p>
                            <span>Einstein</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->
        <!--
        #contact
        ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Contact Us</h2>
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>
                    
                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <form action="index.html" method="post">
                                <div class="input-field">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="input-field">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="input-field message">
                                    <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="SEND MESSAGE" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                    <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->
                    </div> <!-- .col-md-4 -->

                </div>
            </div>
        </section>
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                            <!--<img src="img/logo.png" alt="logo">-->
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>Kami Peduli</h3>
                            <ul class="text-center list-inline">
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                    
                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="<?php echo base_url()?>asset/front/js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>asset/front/js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="<?php echo base_url()?>asset/front/js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="<?php echo base_url()?>asset/front/js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="<?php echo base_url()?>asset/front/js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="<?php echo base_url()?>asset/front/js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="<?php echo base_url()?>asset/front/js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="<?php echo base_url()?>asset/front/js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="<?php echo base_url()?>asset/front/js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="<?php echo base_url()?>asset/front/js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="<?php echo base_url()?>asset/front/js/main.js"></script>
    </body>
</html>
