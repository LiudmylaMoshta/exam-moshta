
<?php
/*
 Template name: home
 */


get_header();?>

<section class="section-top">
    <div class="container">
    <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile;
	endif; ?>
    </div>
</section>

<section class="section-welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-bg">
                <img src="<?php echo get_theme_mod('image'); ?>" class="img-responsive" alt="image"/>
            </div>
            <div class="col-md-6">
	            <?php dynamic_sidebar( 'widget-welcome' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="section-servise">
    <div class="container">
	    <?php dynamic_sidebar( 'widget-title-servise' ); ?>
        <ul class="row list-services">
		    <?php
		    $query = new WP_Query( array('post_type' => 'services'  , 'posts_per_page' => 100 ) );
		    if ($query->have_posts()):?>
			    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li class="li-services col-sm-4 col-md-4">
                        <?php the_content(); ?>
                </li>
			    <?php endwhile; ?>
		    <?php endif; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>

<section class="section-portfolio">
    <div class="container">
            <?php dynamic_sidebar( 'widget-title-portfolio' ); ?>
        <ul class="row list-portfolio">
		    <?php
		    $query = new WP_Query( array('post_type' => 'portfolio'  , 'posts_per_page' => 100 ) );
		    if ($query->have_posts()):?>
			    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="li-portfolio col-sm-4 col-md-4">
                        <div class="content-portfolio">
						    <?php the_title('<h3 class="title-portfolio">','</h3>'); ?>
						    <?php the_content(); ?>
                        </div>
                    </li>
			    <?php endwhile; ?>
		    <?php endif; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>






<!--<div class="container-fluid">-->
<!---->
<!--    <div id="slider-client" class="flexslider">-->
<!--        <ul class="slides">-->
<!--	        --><?php
//	        $query = new WP_Query( array('post_type' => 'works_directors'  , 'posts_per_page' => 10 ) );
//	        if ($query->have_posts()):
//		        while ( $query->have_posts() ) : $query->the_post(); ?>
<!--                    <li>-->
<!--				        --><?php //the_content(); ?>
<!--                    </li>-->
<!--		        --><?php //endwhile;
//	        endif; wp_reset_postdata(); ?>
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container-fluid">-->
<!---->
<!--    <div id="slider-client" class="flexslider">-->
<!--        <ul class="slides">-->
<!--            --><?php
//            if ( have_posts() ) :
//                while ( have_posts() ) : the_post(); ?>
<!--                    <li>-->
<!---->
<!--                        --><?php //the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
<!--                    </li>-->
<!--                --><?php //endwhile;
//            endif; ?>
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container-fluid">-->
<!---->
<!--    <div id="slider-client" class="flexslider">-->
<!--        <ul class="slides">-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-1.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-2.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-3.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-4.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-5.jpg" alt="">-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div id="slider-with-preview" class="flexslider">-->
<!--        <ul class="slides">-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-1.jpg" alt="">-->
<!--                <p class="flex-caption">test caption for slide 1</p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-2.jpg" alt="">-->
<!--                <p class="flex-caption">test caption for slide 1</p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-3.jpg" alt="">-->
<!--                <p class="flex-caption">test caption for slide 1</p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-4.jpg" alt="">-->
<!--                <p class="flex-caption">test caption for slide 1</p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-5.jpg" alt="">-->
<!--                <p class="flex-caption">test caption for slide 1</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div id="carousel-with-preview" class="flexslider">-->
<!--        <ul class="slides">-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-1.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-2.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-3.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-4.jpg" alt="">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/directors-5.jpg" alt="">-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--</div>-->


<?php get_footer(); ?>
