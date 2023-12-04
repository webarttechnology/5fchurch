<?php /* Template Name: Donation */

get_header();

 ?>

<!----------------- Common banner------------->

<section class="cmn-banner">
    <div class="color-overlay"></div>
    <div class="bannr-inner">
	<img src="<?php echo get_template_directory_uri(); ?>/images/about/about-banner.jpeg" alt="visit-banner.jpg">
    </div>
</section>

<!----------------- Common banner End------------->

<!-- --------------Event Section Start------------>

<section class="donate py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1><?php the_field('donation_page_main_heading'); ?></h1>
<h3 class="mt-5" style="font-weight:bold">Ways You Can Donate:
</h3>
            </div>
            <div class="row justify-content-center">
            	<?php 
            	$donationbox = get_field('donation_group');

            	if($donationbox){
            	 ?>
            	
		  <div class="col-sm-6 col-md-4">
		  <div class="donatebx">
			 <div class="donateicon">
				 <i class="<?php echo $donationbox['1st_donation_box_icon']; ?>"></i>
			  </div> 
			 <?php echo $donationbox['1st_donation_box_content']; ?>
<p></p>
			 		  </div>
		</div>	
	
		  <div class="col-sm-6 col-md-4">
		  <div class="donatebx">
			 <div class="donateicon">
				 <i class="<?php echo $donationbox['2nd_donation_box_icon']; ?>"></i>
			  </div> 
			 <?php echo $donationbox['2nd_donation_box_content']; ?>
<p></p>

<?php //echo do_shortcode('[wpedon id=105]'); ?>
			 			 <!-- <div style=""><form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="business" value="info@mail.org"><input type="hidden" name="item_name" value="Online"><input type="hidden" name="item_number" value=""><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="amount" id="amount_8386b8c4ee1f8b20ca8dd63c6d65cac8" value=""><input type="hidden" name="no_note" value="1"><input type="hidden" name="no_shipping" value="1"><input type="hidden" name="notify_url" value="https://www.raphawordchurch.org/wp-admin/admin-post.php?action=add_wpedon_button_ipn"><input type="hidden" name="lc" value="EN_US"><input type="hidden" name="bn" value="WPPlugin_SP"><input type="hidden" name="return" value=""><input type="hidden" name="cancel_return" value=""><input class="wpedon_paypalbuttonimage" type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Make your payments with PayPal. It is free, secure, effective." style="border: none;"><img alt="" border="0" style="border:none;display:none;" src="https://www.paypal.com/EN_US/i/scr/pixel.gif" width="1" height="1"></form></div>		   -->

			 			</div>
		</div>	

		  <div class="col-sm-6 col-md-4">
		  <div class="donatebx">
			 <div class="donateicon">
				 <i class="<?php echo $donationbox['donate_person_box_icon']; ?>"></i>
			  </div> 
			 <?php echo $donationbox['donate_person_box_content']; ?>
<p></p>
			 		  </div>
		</div>	
		  <div class="col-sm-6 col-md-4">
		  <div class="donatebx">
			 <div class="donateicon">
				 <i class="<?php echo $donationbox['donate_box_cashapp_icon']; ?>"></i>
			  </div> 
			 <br>
<?php echo $donationbox['donate_box_cashapp_content']; ?>
<p></p>
			 		  </div>
		</div>	
		  <div class="col-sm-6 col-md-4">
		  <div class="donatebx">
			 <div class="donateicon">
				 <i class="<?php echo $donationbox['donate_main_box_icon']; ?>"></i>
			  </div> 
			 <?php echo $donationbox['donate_main_box_content']; ?>
<p></p>
			 		  </div>
		</div>	
		<?php } ?>
		 	
	</div>
        </div>
    </div>
</section>

<!-- ---------------Event Section End------------->

<?php get_footer(); ?>