<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
   Template Name: Our Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="header-title" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/Primer Hero Images/Desktop Hero Images/our work@2x.png"; ?>')center top; background-size: cover;">
					<h1><?php 
           the_title();?></h1>
           <?php the_content();
          ?>
				</div><!--.header-title-->

				<?php
   $ourWork = array( 'post_type' => 'adventure', 'order' => 'ASC', 'cat' => '4' );
   $content = new WP_Query( $ourWork ); // instantiate our object
?>
<?php if ( $content->have_posts() ) : ?>
   <?php while ( $content->have_posts() ) : $content->the_post(); ?>
    
      <div class="our-work-container">
      	<div class="logo-dscr">
      		<div class="title-thumbnail">
      			<?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
      
            </div><!--.title-thumbnail-->
      <p><?php echo CFS()->get('description') ?></p>
        </div><!--.logo-dscr-->
         <?php the_content(); ?>

      </div><!--.our-work-container-->

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

           <div class="contact-area">
           	<h2>Want to see more?</h2>
           	<span>Tell us! We'd love to hear fom you.</span>
           	<a href="<?php echo get_page_link(16); ?>"><button>contact</button></a>
           </div><!--contact-area-->
              <?php //get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?> 