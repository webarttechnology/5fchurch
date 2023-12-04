<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Social media -->
        <ul class="icons">
          <?php     
   
   $socialmedialoop = CFS()->get( 'social_media_loop',36 );
   if(is_array($socialmedialoop) || is_object($socialmedialoop)){
foreach ( $socialmedialoop as $socialmediaitem ) { ?>
            <li>
        <a class="btn" href="<?php echo $socialmediaitem['social_media_link']; ?>" role="button" target="_blank"><?php echo $socialmediaitem['social_media_icon']; ?></a>
        </li>
      <?php } } ?>
       <!--  <li>
        <a class="btn" href="https://www.youtube.com/channel/UCYHO1g5-Hz4TBelH_L7xpjg" role="button" target="_blank"><i class="bi bi-youtube"></i></a>
        </li>
        <li>
        <a class="btn" href="#" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
        <a class="btn" href="#" role="button" target="_blank"><i class="fab fa-twitter"></i></a>
        </li> -->
        </ul>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <div class="footer-inner">
    <div class="text-center">
      THE GREATER WORKS MINISTRY
  <a href="mailto:<?php echo get_field('email',36); ?>"><?php echo get_field('email',36); ?></a>
    </div>
    <div class="text-center sqs-layout">
      THE GREATER WORKS MINISTRY
 - <?php echo get_field('address',36); ?>
    </div>
    </div>
  </footer>
    

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>-->
  





    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>



<?php wp_footer(); ?>

</body>
</html>
