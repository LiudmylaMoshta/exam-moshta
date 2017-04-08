

<footer >
    <section class="section-flexslider">
	    <?php dynamic_sidebar( 'widget-title-slider' ); ?>
		<?php echo do_shortcode('[wpaft_logo_slider]'); ?>

    </section>
	<?php if( get_theme_mod( 'theme_footer_bg' ) != '') { // if there is a background img
		$theme_header_bg = get_theme_mod('theme_footer_bg'); // Assigning it to a variable to keep the markup clean
	}
	?>
<div class="footer-top" id="footer" style="background-image:url('<?php echo $theme_header_bg ?>');">
    <div class="container">
        <div class="google-maps col-md-6">
		    <?php dynamic_sidebar( 'widget-footer' ); ?>
            <div>
	            <?php echo get_theme_mod('title-tel'); ?>
                <a href="tel:<?php echo get_theme_mod('contact_tel'); ?>" class="phone"><?php echo get_theme_mod('contact_tel'); ?></a>
            </div>

		    <div>
			    <?php echo get_theme_mod('title-contact'); ?>
			    <?php echo get_theme_mod('contact'); ?>
            </div>
		    <?php echo get_theme_mod('google_maps'); ?>
        </div>
        <div class="col-md-6 contact">
		    <?php echo do_shortcode("[contact-form-7 id=\"38\" title=\"clients\"]"); ?>

        </div>
    </div>
</div>
<div class="end-footer">
    <div class="top-end">
        <img src="<?php echo get_theme_mod('logo_image'); ?>" class="img-responsive" alt="logo"/>
    </div>
    <div class="bottom-end">
	    <?php echo get_theme_mod('year _footer'); ?>
    </div>
</div>




</footer>


<?php wp_footer(); ?>

