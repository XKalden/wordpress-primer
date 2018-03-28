<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
   Template Name: Contact form
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
          

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="contact-form-hero" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/Primer Hero Images/Desktop Hero Images/Contact us hero@2x.png"; ?>')center top; background-size: cover;">
          	        <h1>Contact us</h1>
          	        <p>Drop us a line. Send a "hello". Write a haiku.</p>
          	</div><!--.contact-hero-->
				<div class="contact-form-container">
          	
                <h1>Get in Touch & Grow Your Business!</h1>
                <div class="contact-form-wrapper">
				<?php the_content(); ?>
				</div><!--.contact-form-wrapper-->

			<?php endwhile; // End of the loop. ?>

          </div><!--.contact-form-container-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?> 
