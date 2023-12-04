<?php /* Template Name: Testimonial */

get_header();

 ?>

<!-- Header -->

<section class="cmn-banner">
    <div class="color-overlay"></div>
    <div class="bannr-inner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-banner.jpeg" alt="visit-banner.jpg">
    </div>
</section>


<section class="testimonials">
    <div class="container">
        <div class="row align-items-center ">
            <?php     
   $i=1;
   $testimonialloop = CFS()->get( 'testimonial_loop' );
   if(is_array($testimonialloop) || is_object($testimonialloop)){
foreach ( $testimonialloop as $testimonialitem ) {
    if($i == 6){
        break;
    }
 ?>
            <div class="col-md-12">
                <div class="video">
                    <iframe src="<?php echo $testimonialitem['testimonial_video']; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        <?php $i++; } } ?>

            <!-- <div class="col-md-12">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/PFDAk3bJRPc?si=MN_GtQ7r6mnMe0jc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-12">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/PDuj5C1Mh8A?si=Ey3KN7cRYIvDOCZC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-12">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/_L4zfs3SEN4?si=VCd-Xq46cT7z_M3z"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-12">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/mhH5GansLMc?si=y_EHst0MPIqTcOYC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>-->
            <div class="col-md-12">
                <div class="btns text-center">
                    <a href="#"
                        class="btn-dark">
                        MORE TESTIMONIES
                    </a>
                </div>
            </div> 
        </div>
    </div>
</section>



<!-- Footer -->



 <?php get_footer(); ?>