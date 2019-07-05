<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;


?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Hot Metal
    </title>



    <?= $this->Html->meta('icon') ?>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
    <?= $this->Html->css('bootstrap.min-home') ?>
    <?= $this->Html->css('font-awesome.min-home') ?>
    <?= $this->Html->css('themify-icons-home') ?>
    <?= $this->Html->css('magnific-popup-home') ?>
    <?= $this->Html->css('animate-home') ?>
    <?= $this->Html->css('owl.carousel-home') ?>
    <?= $this->Html->css('style-home') ?>

    

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>
        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <img src="img/logo.png" alt=""></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-info">
                <div class="hf-item">
                    <i class="fa fa-clock-o"></i>
		    <p><span><?php echo __('Working time:') ?></span><?php echo __('Monday - Friday: 08 AM - 06 PM') ?></p>
                </div>
                <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
		   <p><span><?php echo __('Find us:') ?></span><?php echo __('Alto Selva Alegre J 22, Arequipa City, Peru') ?></p>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end-->


    <!-- Header section  -->
   <nav class="nav-section">
        <div class="container">


        <?php if(isset($current_user)):?>
            <div class="nav-right">
                <div class="autenticado" >
                    
                  
		    <?php if($current_user['role'] === 'Administrador'):?>
                        <a href="http://198.23.255.30/~u20182833/my_project/users/" class="btn btn-success"><?= $current_user['name']?></a>
                   
                    <?php else: ?>
                         <a href="http://198.23.255.30/~u20182833/my_project/cars/" class="btn btn-success"><?= $current_user['name']?></a>
                     <?php endif ?>
                        <a href="http://198.23.255.30/~u20182833/my_project/users/logout" class="btn btn-success"><?php echo __('Logout') ?></a>
                </div>
                 
            
                
            </div>
        <?php else: ?>
            <div class="nav-right">
                <!--<a href=""><i class="fa fa-search"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>-->
                <a href="http://198.23.255.30/~u20182833/my_project/users/register" class="btn btn-success"><?php echo __('Register') ?></a>
                  <a href="http://198.23.255.30/~u20182833/my_project/users/login" class="btn btn-success"><?php echo __('Login') ?></a>
            </div>
        <?php endif ?>


            <ul class="main-menu" >
		 <li class="active"><a href="http://198.23.255.30/~u20182833/my_project/"><?php echo __('Home') ?></a></li>

                                <li><?=$this->Html->image("icons/32/Peru.png", [
                                        "alt" => "Espa  ol",
                                        'url' => ['controller' => 'App', 'action' => 'change-language', 'es_PE']
                                        ]); ?></li>
                                <li><?= $this->Html->image("icons/32/EEUU.png", [
                                        "alt" => "English",
                                        'url' => ['controller' => 'App', 'action' => 'change-language', 'en_US']
                                        ]); ?></li>
                                <li><?= $this->Html->image("icons/32/brazil.png", [
                                        "alt" => "Portugues",
                                        'url' => ['controller' => 'App', 'action' => 'change-language', 'pt_BR']
                                        ]); ?></li>
            </ul>
        </div>
    </nav>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle"><?php echo __('Dedicated to our clients') ?></div>
                                <h2 class="hs-title"><?php echo __('Mission of the company') ?></h2>
                                <p class="hs-des"><?php echo __('Provide a good automotive maintenance service in general, keeping the cars of our customers in a state of efficient and safe operation, satisfying their needs and expectations in the best possible time. Knowing that you and your vehicle are the most important thing.') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                           <div class="col-lg-8">
                                <div class="hs-subtitle"><?php echo __('Dedicated to our clients') ?></div>
                                <h2 class="hs-title"><?php echo __('Vision of the company') ?></h2>
				<p class="hs-des"><?php echo __('To become the leading and reliable workshop at the zone level, in the next 3 years, once that objective has been achieved, to remain as the best in the market, offering service for modern cars and diesel units, being recognized for the quality of our services, Honesty and fair prices.') ?></p>
                           
			   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                   
                </div>
                <div class="col-lg-5 col-md-6">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->

                   
    <!-- Gallery section -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/mech1.jpg">
                <a class="img-popup" href="img/gallery/mech1.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/mech2.jpg">
                <a class="img-popup" href="img/gallery/mech2.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/mech3.jpg">
                <a class="img-popup" href="img/gallery/mech3.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/mech5.jpg">
                <a class="img-popup" href="img/gallery/mech5.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/mech8.jpg">
                <a class="img-popup" href="img/gallery/mech8.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/mech4.jpg">
                <a class="img-popup" href="img/gallery/mech4.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/mech6.jpg">
                <a class="img-popup" href="img/gallery/mech6.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/mech7.jpg">
                <a class="img-popup" href="img/gallery/mech7.jpg"><i class="ti-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery section -->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
              
     
            </div>
        </div>
    </section>
    <!-- Newsletter section end --> 


    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">
                         <img src="img/logo2.jpg" alt="">
                        <p><?php echo __('We offer the essence of perfection.') ?></p>
                        <div class="social pt-1">
                            
                            <a href="https://github.com/dragon-hash/HotMetal"><i class="fa fa-github-square"></i></a>
                            
                            <a href="https://www.youtube.com/channel/UCQKyKJ4GtrUQco_5EVZVcig?view_as=subscriber"><i class="fa fa-youtube-square"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title"><?php echo __('CONTACT') ?></h6>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i><?php echo __('Alto Selva Alegre J 22, Arequipa City, Peru') ?></p></li>
                        <li><p><i class="fa fa-phone"></i>984338491</p></li>
                        <li><p><i class="fa fa-envelope"></i>hotmetal432@gmail.com</p></li>
                        <li><p><i class="fa fa-clock-o"></i><?php echo __('Monday - Friday: 08 AM - 06 PM') ?></p></li>
                    </ul>
                </div>
            </div>
        </div>
     
    </footer>
    <!-- Footer section end-->



    <!--====== Javascripts & Jquery ======-->
    
    <script src="/~u20182833/my_project/js/jshome/jquery-3.2.1.min.js"></script>
    <script src="/~u20182833/my_project/js/jshome/owl.carousel.min.js"></script>
    <script src="/~u20182833/my_project/js/jshome/jquery.countdown.js"></script>
    <script src="/~u20182833/my_project/js/jshome/masonry.pkgd.min.js"></script>
    <script src="/~u20182833/my_project/js/jshome/magnific-popup.min.js"></script> 
    
    <?= $this->Html->script('mainhome') ?>


</body>
</html>
