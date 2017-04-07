
<?php
/*
 Template name: home
 */


get_header();

if ( have_posts() ) :
               while ( have_posts() ) : the_post(); ?>
                    <li>
                        <?php the_content(); ?>
                    </li>
                <?php endwhile;
            endif; ?>

<div class="container-fluid">

    <div id="slider-client" class="flexslider">
        <ul class="slides">
	        <?php
	        $query = new WP_Query( array('post_type' => 'works_directors'  , 'posts_per_page' => 10 ) );
	        if ($query->have_posts()):
		        while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li>
				        <?php the_content(); ?>
                    </li>
		        <?php endwhile;
	        endif; wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
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
