<?php
/**
 * The template for displaying  Blogs 
 *
 * @package RED_Starter_Theme
   Template Name: Services
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
      <div class="services-container">
        <div class="services-wrapper">
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="services-nav">
        <ul class="services-nav-container">
                      <li class="how-it-works all active">how it works</li>
                      <li class="media all">media/ event presenters</li>
                      <li class="video-production all">video production</li>
                      <li class="workshop all">communication workshop</li>
                  </ul>
                  </div><!--.services-nav-->
                 <div class="graph-text">
                  <div class="dscr-text">
                        <h1>How it works</h1>
                        <p>Our simple, easy<span class="mobile-show">,</span> <span class="desktop-show">&</span> straight forward process</p>
                    </div><!--.dscr-->
                    <div class="graph">
                <img src="/primer/wp-content/themes/primer/assets/images/How_it_Works_Chart/line chart@2x.png" alt="chart">
                    </div><!--.graph -->
                    
                    </div><!--.graph-text --> 

                   <div class="presentation-container">
                     
<?php
   $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'cat' => '1' );
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="present">
      <div class="photo">
      <?php the_post_thumbnail(); ?>
      </div>
      <div class="dscr">
      <h2><?php echo CFS()->get('header') ?></h2>
      <p><?php echo CFS()->get('description') ?></p>
      
      </div><!--.dscr-->
      </div><!--.present-->
        

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
              <div class="our_work">
                <a href="<?php echo get_page_link(12); ?>"><button class="our-work-btn">our work</button></a>
              </div>
                  <div class="stats">
        <h1>Adding a video can lead up to...</h1>
        <div class="stats-wrapper">
          <div class="first-stat">
          <span>80%</span>
          <p class="text">increased conversion rates</p>
          </div><!--.first-stat-->
          <div class="second-stat">
          <span>92%</span>
          <p class="text">mobile consumers share videos</p>
          </div><!--.second-stat-->
          <div class="third-stat">
          <span>97%</span>
          <p class="text">increased purchase intent</p>
          </div><!--.third-stat-->
        </div><!--.stats-wrapper-->
      </div><!--.stats-->     
            </div><!--.presentation-container-->
               
                 
                 
				<?php
					//get_template_part( 'template-parts/content' );
				?>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

    <div class="presentation-container">
    <?php
   $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'cat' => '3' );
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="present">
      <h2 class="mobile-show"><?php echo CFS()->get('header') ?></h2>
      <div class="photo">
      <?php the_post_thumbnail(); ?>
      </div>

      <div class="dscr">
      <h2 class="desktop-show"><?php echo CFS()->get('header') ?></h2>
      <p><?php echo CFS()->get('description') ?></p>
      </div><!--.dscr-->
      </div><!--.present-->

<?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</div><!--.presentation-container-->


      
             </div><!--.services-wrapper -->
           </div><!--.services-container -->
<div class="arrow-container">
<span class="arrow-top">&uarr;</span></div><!--.arrow-container-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php //get_adventure(); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
