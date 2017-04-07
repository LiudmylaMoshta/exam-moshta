
<?php get_header(); ?>



<article class="bio-directors">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<p class="text-bio">
				<?php the_content(); ?>
			</p>
			<?php the_title('<h3 class="title-name">','</h3>');
		endwhile;
	else:
	endif; ?>
</article>
<section class="section-comments">
    <ul>
        <li class="row">
            <p class="text-comment">
				<?php comments_template();?>
            </p>
        </li>
    </ul>
</section>



<?php get_footer(); ?>
