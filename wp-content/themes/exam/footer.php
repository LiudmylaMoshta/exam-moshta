

<footer>




	<?php
	$social_sites = ct_tribes_social_array();
	foreach ( $social_sites as $social_site => $profile ) {
		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[ $social_site ] = $social_site;
		}
	}
	if ( ! empty( $active_sites ) ) {
		echo '<ul class="col-xs-6 social-media-icons text-right">';
		foreach ( $active_sites as $key => $active_site ) {
			$class = 'fa fa-' . $active_site; ?>
            <li>
                <a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
                    <i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
                </a>
            </li>
		<?php }
		echo "</ul>";
	} ?>




	<?php echo get_theme_mod('year _footer'); ?>

</footer>


<?php wp_footer(); ?>

