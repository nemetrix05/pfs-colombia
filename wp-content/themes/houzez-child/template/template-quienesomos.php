<?php
/**
 * Template Name: Quienes Somos
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 10/04/17
 * Time: 14:35 PM
 */
get_header(); ?>

<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8">

		<?php
		while ( have_posts() ): the_post();
		the_content();
		endwhile;
		?>

	</div>

	<div class="col-lg-4 col-md-4 col-sm-4">
		<?php get_sidebar(); ?>
	</div>	

</div>

<?php get_footer(); ?>