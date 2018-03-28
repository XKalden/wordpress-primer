<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
   Template Name: journal
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<?php
   $args = array( 'post_type' => 'adventure', 'order' => 'ASC' );
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <p><?php the_content(); ?></p>
      

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?> 
