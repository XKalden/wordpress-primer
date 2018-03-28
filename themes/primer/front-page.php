<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" id="bodyfinalWidth" class="content-area">
		<main id="main" class="site-main" role="main">

        <!-- Home Hero-->

        <section class="home-hero-container">
            <div class="background-img">
                <h1 class="hero_h1">The Primer Experience</h1>
                <p class="hero_text_one">Your Best idea turned into your best presentations.</p>
                <p class="hero_text_two">Prasent Blandit dui in enim varius rhoncus. Aenena eu malesuda seem, auctor vulputate lectus. Quisque nunc elementum id felis faucibus.</p>
                <p class="hero_text_three">As seen on:</p>
                <div class="logos">
                    <span class="logo_marilyn"><img src="<?php echo get_template_directory_uri()."/assets/images/As_Seen_On_Logos/logos-premierpresentation-marilynlogo@2x.png"?>" alt="dude"></span>
                    <span class="logo_women"><img src="<?php echo get_template_directory_uri()."/assets/images/As_Seen_On_Logos/logos-womenshow.png"?>" alt="dude"></span>
                    <span class="logo_breakfast"><img src="<?php echo get_template_directory_uri()."/assets/images/As_Seen_On_Logos/logos-premierpresentation-breakfastshow@2x.png"?>" alt="dude"></span>
                </div>
            </div>
            
        </section> 


        <!-- What We Offer -->
        <section class="offer-container">
            <div class="offer_h2">
                <h2>What We Offer</h2>  
            </div>

            <div class="flex">
                <div class="event">
                    <span class="logo_marilyn"><img src="<?php echo get_template_directory_uri()."/assets/images/What_We_Offer_Icons/conference.png"?>" alt="dude"></span>
                    <h3>On-Air/Media/Event Presenters</h3>
                    <p>Prasent blandit dui in enim varius rhoncus. Aenean eu malesuada sem, auctor vulputate leactus. Quisque nunc metus.</p>
                </div>

                <div class="video">
                    <span class="logo_marilyn"><img src="<?php echo get_template_directory_uri()."/assets/images/What_We_Offer_Icons/video-player.png"?>" alt="dude"></span>
                    <h3>Video Blog Production</h3>
                    <p>Praesent blandit dui in enim varius rhoncus. Aenean eu malesuada sem, auctor valutate lectus.</p>
                </div>

                <div class="communication">
                    <span class="logo_marilyn"><img src="<?php echo get_template_directory_uri()."/assets/images/What_We_Offer_Icons/conversation.png"?>" alt="dude"></span>
                    <h3>Communication Workshop</h3>
                    <p>Present balandit dui in enim varius rhoncus. Aenean eu malesuada sem, auctor vulputate lectus.</p>
                </div>
            </div>

    
            <a class="see_more_btn" href="http://localhost:8888/primer/our-work/">SEE MORE</a>
          
        </section>

       <!-- Quote -->
        <section class="quote-container">
            <div class="quote_bk_color">
                
            <div class="center">
            
                <p class="img_person_quote"> I have appeared on behalf of clients in over <span id="five">500</span> television campaigns, on-site live broadcasts, in-studio 
                television and radio interviews with major media outlets across Canada and the United States.</p>
                
                <div class="img_person_container">
                    <span class="img_person"><img src="<?php echo get_template_directory_uri()."/assets/images/Homepage_Picture_of_Nicole/Nicole.png"?>" alt="dude"></span>
                    <p class="img_person_name">Nicole Cox</p>
                    <p class="img_person_group">President of Primer Presentation Group</p>
                </div>
            </div>
            
            </div>
        </section>

        
        <!-- Testimonial -->
        <section class="testimonial-container">
            <h2 class="text_h2">What Our Client Says</h2>


            <div class="center_carousel">
            <div class="main-carousel">
               <?php
               $args = array( 'post_type' => 'testimonial', 'order' => 'ASC' );
               $testimonials = new WP_Query( $args ); // instantiate our object
               ?>
               <?php if ( $testimonials->have_posts() ) : ?>
               <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>


                <div class="carousel-cell">
                
                    <div class="wp_container">

                        <div class="wp_content">
                            <span class="first_Squote"><img src="<?php echo get_template_directory_uri()."/assets/images/Small_Quotes_Icon/s_quote2x.png"?>" alt="dude"></span></span>
                            <?php the_content(); ?>
                            <span class="second_Squote"><img src="<?php echo get_template_directory_uri()."/assets/images/Small_Quotes_Icon/s_quote2x.png"?>" alt="dude"></span></span>
                            <span><img > </span>
                        </div>

                        <div class="wp_company_logo"> 
                            <?php echo '<img src=' . CFS()->get('company_logo'). '>'; ?>
                        </div>

                        <div class="wp_company_name">
                            <?php echo CFS()->get('company_name'); ?>
                        </div>

                        <div class="wp_reviewer_name">
                            <?php echo CFS()->get('reviewer_name'); ?>
                        </div>

                        <div class="wp_reviewer_title">
                            <?php echo CFS()->get('reviewer_title'); ?>
                        </div>

                        <div class="wp_reviewer_photo">
                            <?php echo '<img src=' . CFS()->get('reviewer_photo') . '>'; ?>
                        </div>
                    </div>
                </div>

               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
               <?php else : ?>
                   <h2>Nothing found!</h2>
               <?php endif; ?>
               
           </div>
        </div>

        </section>
        
        <!-- Video Program -->
        <section class="video-container">
            <div class="video_grid">
                <div class="grid_one">
                    <h2 class="video_h2">Our Exhibitor Spotlight Video Program</h2>
                    <p class="video_p">Praesent blandi dui in enim varius rhoncus. Aenean eu malesuda sem, auctor vulputate lectus. Quisque nanc metus, elementum id felis faucibus, pharetra mattis leo.</p> 
                </div>


                 <div class="grid_two">
                    <div class="video_link">
                    <?php
                        $ourWork = array( 'post_type' => 'page');
                        $content = new WP_Query( $ourWork ); // instantiate our object
                    ?>
                        <?php if ( $content->have_posts() ) : $content->the_post();?>                
                        <?php the_content(); ?>
                    <?php endif ?>

                    </div>
                </div>

                <div class="grid_three">
                    <a class="video_link" href="http://localhost:8888/primer/our-work/">SEE MORE</a>
                </div>
            </div>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
