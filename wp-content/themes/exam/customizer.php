<?php
/**
 * Created by PhpStorm.
 * User: lucky
 * Date: 06.04.17
 * Time: 21:47
 */
	function exam_customize_register( $wp_customize ) {
		/*bg-welcome-image*/

		$wp_customize->add_setting( 'theme_footer_bg' );
		$wp_customize->add_section( 'theme_footer_bg', array(
			'title'    => __( 'theme_footer_bg', 'breaker' ),
			'priority' => 30,
		) );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,'theme_footer_bg',array(
					'label' => 'Header Background Image',
					'section' => 'title_tagline',
					'settings' => 'theme_footer_bg',
					'priority' => 2
				)
			)
		);
		/*******************************************
		Color scheme
		 ********************************************/
// add the section to contain the settings
		$wp_customize->add_section( 'font_style' , array(
			'title' =>  'Fonts style',
		) );
		$OptionsFonts[] = array(
			'slug'=>'header_font_style',
			'default' => '#ffffff',
			'label' => 'Header Background Color'
		);
		$wp_customize->add_section( 'OptionsColors' , array(
			'title' =>  'Colors Scheme',
		) );
		$OptionsColors[] = array(
			'slug'=>'header_bg_color',
			'default' => '#2c3e50',
			'label' => 'Header Background Color'
		);
		$OptionsColors[] = array(
			'slug'=>'footer_bg_color',
			'default' => '#ff4848',
			'label' => 'Footer Background Color'
		);
		$OptionsColors[] = array(
			'slug'=>'title_color',
			'default' => '#000000',
			'label' => 'Title Color'
		);
		$OptionsColors[] = array(
			'slug'=>'text_color',
			'default' => '#000000',
			'label' => 'text_color'
		);
		// add the settings and controls for each color
		foreach( $OptionsColors as $txtcolor ) {

			// SETTINGS
			$wp_customize->add_setting(
				$txtcolor['slug'], array(
					'default' => $txtcolor['default'],
					'type' => 'option',
					'capability' =>  'edit_theme_options'
				)
			);
// CONTROLS color-picker
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					$txtcolor['slug'],
					array('label' => $txtcolor['label'],
					      'section' => 'OptionsColors',
					      'settings' => $txtcolor['slug'])
				)
			);
		}

//*Customize logo-image*/
	$wp_customize->add_setting( 'image', array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_section( 'logo', array(
		'title'    => __( 'image', 'exam' ),
		'priority' => 30,
	) );

	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'image', array(
		'label'    => __( 'Upload', 'exam' ),
		'section'  => 'image',
		'settings' => 'image',
	) ) );

		//*Customize logo-image*/
		$wp_customize->add_setting( 'image', array(
			'default'   => '',
			'transport' => 'refresh',
		) );

		$wp_customize->add_section( 'image', array(
			'title'    => __( 'image', 'exam' ),
			'priority' => 30,
		) );

		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'logo_image', array(
			'label'    => __( 'Upload logo', 'exam' ),
			'section'  => 'logo',
			'settings' => 'logo_image',
		) ) );

	/*Customize text year footer (<?php echo get_theme_mod('year _footer'); ?>)*/
	$wp_customize->add_setting( 'year _footer', array(
		'default'     => '',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_section( 'year' , array(
		'title'      => __( 'Year _footer', 'exam' ),
		'priority'   => 30,
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'year _footer', array(
		'label'        => __( 'Year _footer', 'exam' ),
		'section'    => 'year',
		'settings'   => 'year _footer',
	) ) );

		/*Customize text google-maps (<?php echo get_theme_mod('google-maps'); ?>)*/
		$wp_customize->add_setting( 'google_maps', array(
			'default'     => '',
			'transport'   => 'refresh',
		) );
		$wp_customize->add_section( 'maps' , array(
			'title'      => __( 'google_maps', 'exam' ),
			'priority'   => 30,
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_maps', array(
			'label'        => __( 'google_maps', 'exam' ),
			'section'    => 'maps',
			'settings'   => 'google_maps',
		) ) );



		/*Customize panel-contact*/
	$wp_customize->add_panel( 'contact-company', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'contact-company', 'exam' ),
		) );
		/*Customize text TEL-Company (<?php echo get_theme_mod('year _footer'); ?>)*/
		$wp_customize->add_setting( 'title-tel' , array(
			'default'     => '',
			'transport'   => 'refresh',
		) );
		$wp_customize->add_section( 'title' , array(
			'title'      => __( 'title-tel', 'exam' ),
			'priority'   => 30,
			'panel' => 'contact-company'
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-tel', array(
			'label'        => __( 'title-tel', 'exam' ),
			'section'    => 'title',
			'settings'   => 'title-tel',
		) ) );
	/*Customize Phone number (<a href="tel:<?php echo get_theme_mod('contact_tel'); ?>" class="phone"><?php echo get_theme_mod('contact_tel'); ?></a>)*/
	$wp_customize->add_setting( 'contact_tel' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_section( 'tel' , array(
		'title'      => __( 'Phone', 'exam' ),
		'priority'   => 30,
		'panel' => 'contact-company'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_tel', array(
		'label'        => __( 'Number of your phone', 'exam' ),
		'section'    => 'tel',
		'settings'   => 'contact_tel',
	) ) );
		/*Customize text TEL-Company (<?php echo get_theme_mod('year _footer'); ?>)*/
		$wp_customize->add_setting( 'title-contact' , array(
			'default'     => '',
			'transport'   => 'refresh',
		) );
		$wp_customize->add_section( 'title-contact' , array(
			'title'      => __( 'title-contact', 'exam' ),
			'priority'   => 30,
			'panel' => 'contact-company'
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-contact', array(
			'label'        => __( 'title-contact', 'exam' ),
			'section'    => 'title-contact',
			'settings'   => 'title-contact',
		) ) );
	/*Customize Email (<a href="mailto:<?php echo get_theme_mod('contact_mail'); ?>" class="email">
                    <?php echo get_theme_mod('contact_mail'); ?>
                </a>)*/
	$wp_customize->add_setting( 'contact' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );
	$wp_customize->add_section( 'contact' , array(
		'title'      => __( 'contact', 'exam' ),
		'priority'   => 30,
		'panel' => 'contact-company'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact', array(
		'label'        => __( 'Your contact_', 'exam' ),
		'section'    => 'contact',
		'settings'   => 'contact',
	) ) );

}

add_action('customize_register', 'exam_customize_register');

/*------------------------------------------------------------------------------------------------*/

function wptutsplus_customize_colors() {
	$header_bg_color = get_option( 'header_bg_color' ); /*витягаємо значення*/
	$footer_bg_color = get_option( 'footer_bg_color' );
	?>
	<style>

		#header {
			background-color: <?php echo $header_bg_color; ?>;
		}

		footer {
			background-color: <?php echo $footer_bg_color ?>;
		}

	</style>

	<?php
}
add_action( 'wp_head', 'wptutsplus_customize_colors' );

//------------------------------------------------------SOCIAL ICON-----------------------------------------------------
function ct_tribes_social_array() {

	$social_sites = array(

		'facebook'      => 'tribes_facebook_profile',
		'google-plus'   => 'tribes_googleplus_profile',
		'twitter'       => 'tribes_twitter_profile',
		'linkedin'      => 'tribes_linkedin_profile',
		'youtube'       => 'tribes_youtube_profile',
		'vimeo'         => 'tribes_vimeo_profile',
		'tumblr'        => 'tribes_tumblr_profile',
		'instagram'     => 'tribes_instagram_profile',
		'flickr'        => 'tribes_flickr_profile',
		'dribbble'      => 'tribes_dribbble_profile',
		'rss'           => 'tribes_rss_profile',
		'reddit'        => 'tribes_reddit_profile',
		'soundcloud'    => 'tribes_soundcloud_profile',
		'spotify'       => 'tribes_spotify_profile',
		'vine'          => 'tribes_vine_profile',
		'yahoo'         => 'tribes_yahoo_profile',
		'behance'       => 'tribes_behance_profile',
		'codepen'       => 'tribes_codepen_profile',
		'delicious'     => 'tribes_delicious_profile',
		'stumbleupon'   => 'tribes_stumbleupon_profile',
		'deviantart'    => 'tribes_deviantart_profile',
		'digg'          => 'tribes_digg_profile',
		'github'        => 'tribes_github_profile',
		'hacker-news'   => 'tribes_hacker-news_profile',
		'steam'         => 'tribes_steam_profile',
		'vk'            => 'tribes_vk_profile',
		'weibo'         => 'tribes_weibo_profile',
		'tencent-weibo' => 'tribes_tencent_weibo_profile',
		'500px'         => 'tribes_500px_profile',
		'foursquare'    => 'tribes_foursquare_profile',
		'slack'         => 'tribes_slack_profile',
		'slideshare'    => 'tribes_slideshare_profile',
		'qq'            => 'tribes_qq_profile',
		'whatsapp'      => 'tribes_whatsapp_profile',
		'skype'         => 'tribes_skype_profile',
		'wechat'        => 'tribes_wechat_profile',
		'xing'          => 'tribes_xing_profile',
		'paypal'        => 'tribes_paypal_profile',
		'email-form'    => 'tribes_email_form_profile'
	);

	return apply_filters( 'ct_tribes_social_array_filter', $social_sites );
}

function my_add_customizer_sections( $wp_customize ) {

	$social_sites = ct_tribes_social_array();

	// set a priority used to order the social sites
	$priority = 5;

	// section
	$wp_customize->add_section( 'ct_tribes_social_media_icons', array(
		'title'       => __( 'Social Media Icons', 'tribes' ),
		'priority'    => 25,
		'description' => __( 'Add the URL for each of your social profiles.', 'tribes' )
	) );

	// create a setting and control for each social site
	foreach ( $social_sites as $social_site => $value ) {

		$label = ucfirst( $social_site );

		if ( $social_site == 'google-plus' ) {
			$label = 'Google Plus';
		} elseif ( $social_site == 'rss' ) {
			$label = 'RSS';
		} elseif ( $social_site == 'soundcloud' ) {
			$label = 'SoundCloud';
		} elseif ( $social_site == 'slideshare' ) {
			$label = 'SlideShare';
		} elseif ( $social_site == 'codepen' ) {
			$label = 'CodePen';
		} elseif ( $social_site == 'stumbleupon' ) {
			$label = 'StumbleUpon';
		} elseif ( $social_site == 'deviantart' ) {
			$label = 'DeviantArt';
		} elseif ( $social_site == 'hacker-news' ) {
			$label = 'Hacker News';
		} elseif ( $social_site == 'whatsapp' ) {
			$label = 'WhatsApp';
		} elseif ( $social_site == 'qq' ) {
			$label = 'QQ';
		} elseif ( $social_site == 'vk' ) {
			$label = 'VK';
		} elseif ( $social_site == 'wechat' ) {
			$label = 'WeChat';
		} elseif ( $social_site == 'tencent-weibo' ) {
			$label = 'Tencent Weibo';
		} elseif ( $social_site == 'paypal' ) {
			$label = 'PayPal';
		} elseif ( $social_site == 'email-form' ) {
			$label = 'Contact Form';
		}
		// setting
		$wp_customize->add_setting( $social_site, array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		// control
		$wp_customize->add_control( $social_site, array(
			'type'     => 'url',
			'label'    => $label,
			'section'  => 'ct_tribes_social_media_icons',
			'priority' => $priority
		) );
		// increment the priority for next site
		$priority = $priority + 5;
	}
}
add_action( 'customize_register', 'my_add_customizer_sections' );

//-----------------------------------------------------END SOCIAL ICON-----------------------------------------------------