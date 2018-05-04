<?php get_header(); ?>

<?php 

	if( have_posts() ) :

		while( have_posts() ): the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<div class="thumbnail-img">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
			<small>Posted On: <?php the_time('F j, Y');?><?php the_category(); ?></small>
			<p><?php the_content(); ?></p>

			<hr>

		<?php endwhile;

	endif;

?>

<?php get_footer(); ?>
