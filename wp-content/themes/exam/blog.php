
<?php
/*
 Template name: Blog
 */
?>


<?php get_header(); ?>

<section class="container-fluid section-project-skokov">
 <h1 class="title-project"><?php the_title(); ?></h1>
</section>



<div class="container-fluid">
 <div class="row">
  <div class=" col-md-8 ">
   <div class="row">
	   <?php
	   $wp_query = new WP_Query();
	   $wp_query->query( 'showposts=10' . '&paged=' . $paged );
	   while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <article class="content  col-md-6">
			<?php the_post_thumbnail(); ?>
         <div class="article-content">
          <h2><a href="<?php the_permalink(); ?>" title="Read more">
				  <?php the_title(); ?>
           </a>
          </h2>
          <p class="text-content">
			  <?php the_excerpt(); ?>
          </p>
	         <?php the_date('Y.m.d', '<span>', '</span>'); ?>
         </div>
        </article>


	   <?php endwhile; ?>
    <nav aria-label="Page navigation" class="row text-center page-navigation">
     <ul class="col-xs-12 col-sm-8 pagination">
		 <?php
		 $big = 999999999;
		 echo paginate_links( array(
			 'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			 'format'    => '?paged=%#%',
			 'and_size'    => 5,
			 'current'   => max( 1, get_query_var( 'paged' ) ),
			 'total'     => $wp_query->max_num_pages,
			 'prev_text' => __( 'PREV' ),
			 'next_text' => __( 'NEXT' ),
		 ) );
		 ?>
     </ul>
    </nav>

	   <?php if ( $paged > 1 ) { ?>

	   <?php } else { ?>

	   <?php } ?>

	   <?php wp_reset_postdata(); ?>
   </div>

  </div>
 <div class="col-md-4">
	 <?php get_sidebar(); ?>
 </div>
 </div>
</div>



<?php

get_footer();
?>

