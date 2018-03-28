<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
   Template Name: Blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

          	<?php while ( have_posts() ) : the_post(); ?>
          	<div class="blog-hero" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/Primer Hero Images/mobile Hero Images/blogpage@2x.png"; ?>')center top; background-size: cover;">
          		<h1><?php the_title(); ?></h1>
               <p><?php the_content(); ?></p>
               
          		
               </div><!--.blog-hero-->
            
				
			<?php endwhile; // End of the loop. ?>

			<?php
			$ourCurrentPage = get_query_var('paged');
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 4, 'paged' => $ourCurrentPage );
   $products = new WP_Query( $args ); // instantiate our object
?>
<div class="blog-container">
	<div class="blog-wrapper">
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>

   	
   		<div class="blog-content">
   	  <?php the_post_thumbnail(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_excerpt(); ?></p>
      <div class="single-blog-button">
      <a href="<?php echo get_permalink(); ?>"><button class="read-more">Read More</button></a>
      </div>
        </div><!--.blog-content-->
    	
    

   <?php endwhile; ?>

   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
      
<?php endif; ?>
			</div><!--.blog-wrapper-->

    	<?php get_sidebar(); ?>
    
          </div><!--.blog-container-->
          <div class="paginate">
          <?php
      echo paginate_links(array(
      'total' => $products->max_num_pages
      )); ?>
      </div><!--.paginate-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?> 
