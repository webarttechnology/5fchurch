<?php /* Template Name: About Us */

get_header();

 ?>


<section class="cmn-banner">
    <div class="color-overlay"></div>
    <div class="bannr-inner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-banner.jpeg" alt="visit-banner.jpg">
    </div>
</section>

<section class="aboutSec p-v-50">
  <div class="container">
    <div class="row">
      <?php $aboutgrp = get_field('about_page_group'); 
      if($aboutgrp){
      ?>
      <div class="col-sm-7">
      <h3><i class="fas fa-angle-right"></i> <?php echo $aboutgrp['1st_heading']; ?></h3>
      <p><?php echo $aboutgrp['1st_content']; ?></p>

      <h3><i class="fas fa-angle-right"></i> <?php echo $aboutgrp['vision_heading']; ?></h3>
      <p><?php echo $aboutgrp['vision_content']; ?></p>

      <h3><i class="fas fa-angle-right"></i> <?php echo $aboutgrp['mission_heading']; ?></h3>
      <p><?php echo $aboutgrp['mission_content']; ?></p>

      <h3><i class="fas fa-angle-right"></i> <?php echo $aboutgrp['beliefs_heading']; ?></h3>
      <p><?php echo $aboutgrp['beliefs_content']; ?></p>
      </div>
    <?php } ?>
      <div class="col-sm-5">
        <div class="box text-center">
        <h3><?php echo get_field('about_right_side_heading'); ?></h3>
        <?php echo get_field('about_right_side_content'); ?>

        </div>
      </div>
    </div>
  </div>
</section>
    





 <?php get_footer(); ?>