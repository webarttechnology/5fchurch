<?php /* Template Name: Home */

get_header();

 ?>

<style>
    .home-banner {position: relative; z-index: 1; min-height:300px; background: var(--primary-color);}
    .home-banner img{ min-height:300px; width:100%;}
    .home-banner::before {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.3);
        content: "";
        z-index: 1;
    }
    .captions {
        position: absolute;
        left:10%;
        top: 30%;
        -moz-transform: translateY(50%);
        -webkit-transform: translateY(50%);
        -o-transform: translateY(50%);
        -ms-transform: translateY(50%);
        transform: translateY(50%);
        z-index: 2;
    }
    .captions h1 {
        font-size:70px; 
        font-weight: bold; 
        color: #fff;
        text-shadow: 4px 4px 2px rgba(0,0,0,0.28); 
        line-height: 1;
    }
</style>
<section class="home-banner">
    <!-- Carousel -->
    <div id="demoHome" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div> -->

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
   <?php     
   $i=0;
   $bannerloop = CFS()->get( 'home_banner_loop' );
   if(is_array($bannerloop) || is_object($bannerloop)){
foreach ( $bannerloop as $banneritem ) { ?>
        <div class="carousel-item <?php if($i==0): echo 'active'; endif; ?>">
            <img src="<?php echo $banneritem['banner_image']; ?>" alt="image-8.jpg" class="w-100">
            <div class="captions">
                <h1><?php echo $banneritem['banner_heading']; ?></h1>
                <span><a href="#" class="btn btn-dark">Our Events</a></span>
            </div>
        </div>
    <?php $i++; } } ?>
        
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demoHome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demoHome" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
    </div>
</section>

<section class="imgetext-section">
    <div class="imgtxt-wrapper">
        <div class="container">
            <div class="imgtxt-wrap">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="top-image">
                            <h2><?php echo get_field('banner_bottom_heading'); ?></h2>
                            <!--<img src="images/l-image.jpg">-->
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="bottom-content">
                            <?php echo get_field('banner_bottom_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section style="background:#eee" class="p-v-50 abouts">
    <div class="container">
        <div class="row text-center">
            <div class="col-12"><h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2></div>
            <div class="col-sm-6 col-md-4 ">
                <div class="aboutcarDs">
                    <a href="#">
                    <img src="images/image-1.jpg" alt="" class="w-100">
                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</h3>
                    <span>Read Article</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="aboutcarDs">
                    <a href="#">
                    <img src="images/image-2.jpg" alt="" class="w-100">
                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</h3>
                    <span>Read Article</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
                <div class="aboutcarDs">
                    <a href="#">
                    <img src="images/image-3.jpg" alt="" class="w-100">
                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</h3>
                    <span>Read Article</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="joinus-section">
    <div class="join-wrapper">
        <div class="container">
            <div class="top-content text-center mt-5">
            <h1><strong><?php echo get_field('last_section_heading'); ?></strong></h1>
            <!-- <h2><strong>SUNDAYS - 1PM</strong></h2>
            <ul>
                <li><p><strong>300 S. Mission rd Los Angeles 90033 </strong></p></li>
                <li><p><strong>LOOK FOR THE THE GREATER WORKS MINISTRY
 SIGNS! </strong></p></li>
                <li><p><strong>There is free street parking </strong></p></li>
                <li><p><strong>(PLEASE MAKE SURE NOT TO PARK IN FRONT OF LOADING DOCKS AND LOOK OUT FOR “NO PARKING” SIGNS IN FRONT OF ADJACENT BUILDINGS) </strong></p></li>
            </ul> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="bottom-content">
                    <img src="<?php echo get_field('last_section_image'); ?>">
                        <h3>If you can’t come in person,<br>join us online on 
                             <?php     
   
   $socialmedialoop = CFS()->get( 'social_media_loop',36 );
   if(is_array($socialmedialoop) || is_object($socialmedialoop)){
foreach ( $socialmedialoop as $socialmediaitem ) { ?>
                            <a href="<?php echo $socialmediaitem['social_media_link']; ?>"><?php echo $socialmediaitem['social_media_title']; ?></a>
                        <?php } } ?>
                            <!-- <a href="https://www.youtube.com/c/ApostleKathrynKrick">Youtube</a>,
                            <a href="https://www.facebook.com/apostlekathrynkrick">facebook</a>, -->
                            
                            
                        </h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- <section class="parallax p-v-50" style="background: url(images/parallax-bg.jpg) no-repeat; background-attachment: fixed;">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12">
                <h2>What do people say about Us?</h2>
            </div>
            <div class="col-12 col-sm-10">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <center>
                        <i class="fas fa-quote-right"></i>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                        </center>
                    </div>
                    <div class="carousel-item">
                        <center>
                        <i class="fas fa-quote-right"></i>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                        </center>
                    </div>
                    <div class="carousel-item">
                        <center>
                        <i class="fas fa-quote-right"></i>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                        </center>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
                </div>
            </div>
        </div>
    </div>
</section> -->








 <?php get_footer(); ?>