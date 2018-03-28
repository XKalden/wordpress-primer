<?php
/**
 *Template Name: About Page
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php// get_template_part( 'template-parts/content', 'page' ); ?>

				<div class="hero-about">
				<img class="hero-image" src=<?php echo get_template_directory_uri()."/assets/images/rawpixel-com-351765_copy.jpg" ?> />
				<h1 class="about-us">About Us</h1>
				<p class="hero-sub-text">We love what we do. Grab a seat. Let's learn together.</p>
				</div>

				<h1 class="why-primer">Why Primer</h1>
				<p class="there-are-several-wa">There are several ways people can make money online. From selling products to advertising. In this article, I am going to explain the concept of contextual advertising.</p>

				<container class="container-flex">
				<div class="flex-1">
				<img class="shopping-cart-icon" src=<?php echo get_template_directory_uri()."/assets/images/Why_Primer_Icons/Shopping_Cart_Icon@2x.png" ?> />
				<h1 class="all-in-one-services">All-in-one Services</h1>
				<p class="praesent-blandit-dui">Praesent blandit dui in enim varius rhoncus. Aenean eu malesuada sem.</p>
				</div>

				<div class="flex-2">
				<img class="diamond-icon" src=<?php echo get_template_directory_uri()."/assets/images/Why_Primer_Icons/Diamond_Icon@2x.png" ?> />
				<h1 class="quality-quantity">Quality &gt; Quantity</h1>
				<p class="praesent-blandit-dui">Praesent blandit dui in enim varius rhoncus. Aenean eu malesuada sem.</p>
				</div>

				<div class="flex-3">
				<img class="price-tag-icon" src=<?php echo get_template_directory_uri()."/assets/images/Why_Primer_Icons/Price_Tag_icon@2x.png" ?> />
				<h1 class="best-price-structure">Best Price Structure</h1>
				<p class="praesent-blandit-dui">Praesent blandit dui in enim varius rhoncus. Aenean su malesuada sem.</p>
				</div>
				</container>

				<container class="pictures-flex">
				<div class="flex-10">
				<img class="picture-1" src=<?php echo get_template_directory_uri()."/assets/images/About_Us_Photo_Banner_Images/Picture_1@2x.png" ?> />
				</div>

				<div class="flex-11">
				<img class="picture-2" src=<?php echo get_template_directory_uri()."/assets/images/About_Us_Photo_Banner_Images/Picture_2@2x.png" ?> />
				</div>

				<div class="flex-12">
				<img class="picture-3" src=<?php echo get_template_directory_uri()."/assets/images/About_Us_Photo_Banner_Images/Picture_3@2x.png" ?> />
				</div>
				</container>

				<h1 class="who-we-are">Who We Are</h1>
				<p class="when-i-was-just-star">When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At that time I had spent a lot of time actually playing the video game Paperboy, so I knew I had what it took to get the job done. But, its just not that easy.</p>

				<container class="nicole-flex">
				<div class="flex-4">
				<img class="nicole" src=<?php echo get_template_directory_uri()."/assets/images/headshot2_copy.jpg" ?> />
				</div>

				<div class="flex-5">
				<h1 class="nicole-cox">Nicole Cox</h1>
				<p class="president-of-primer">President of Primer Presentation Group</p>
				<p class="presenting-to-an-a-copy">"Presenting to an audience isn't just one of my strengths, it is one of my passions. It is the place I am most comfortable, and the aspect of any of my previous positions that I have enjoyed the most. Working in marketing and communications, and subsequently becoming a presentation professional wasn't just something I was repeatedly told I 'should' do, it's absolutely something that I've always wanted to do."</p>
				<p class="connect-with-nicole">Connect with Nicole on LinkedIn:</p>
				<img class="linked-icon-copy" src=<?php echo get_template_directory_uri()."/assets/images/linkedin_copy.png" ?> />
				</div>
				</container>

				<div>
				<h1 class="team-primer">Team Primer</h1>
				<!--My initial function which didn't work<img class="image_member"><?php echo CFS()->get( 'image_1' ); ?> />-->

				<container class="team-primer-flex">
				<div class="flex-6">
				<img class="image_member1" src="<?php echo wp_get_attachment_image_src(CFS()->get( 'image_1' ))[0]; ?> " />
				<div class="team_member1">
				<h1 class="name_member1"><?php echo CFS()->get( 'name_1' ); ?></h1>
				<p class="job_title1"><?php echo CFS()->get( 'job_title_1' ); ?></p>
				</div>
				</div>

				<div class="flex-7">
				<img class="image_member2" src="<?php echo wp_get_attachment_image_src(CFS()->get( 'image_2' ))[0]; ?> " />
				<div class="team_member2">
				<h1 class="name_member2"><?php echo CFS()->get( 'name_2' ); ?></h1>
				<p class="job_title2"><?php echo CFS()->get( 'job_title_2' ); ?></p>
				</div>
				</div>

				<div class="flex-8">
				<img class="image_member3" src="<?php echo wp_get_attachment_image_src(CFS()->get( 'image_3' ))[0]; ?> " />
				<div class="team_member3">
				<h1 class="name_member3"><?php echo CFS()->get( 'name_3' ); ?></h1>
				<p class="job_title3"><?php echo CFS()->get( 'job_title_3' ); ?></p>
				</div>
				</div>

				<div class="flex-9">
				<img class="image_member4" src="<?php echo wp_get_attachment_image_src(CFS()->get( 'image_4' ))[0]; ?> " />
				<div class="team_member4">
				<h1 class="name_member4"><?php echo CFS()->get( 'name_4' ); ?></h1>
				<p class="job_title4"><?php echo CFS()->get( 'job_title_4' ); ?></p>
				</container>
				</div>
				</div>
				</div>

				<div class="rectangle">
				<img class="quotes-icon" src=<?php echo get_template_directory_uri()."/assets/images/Mobile_Assets/Mobile_Quote_Icon/quotes_icon@2x.png" ?> />
				<p class="nicole-and-her-team">Nicole and her team have provided us with beautiful videos to showcase our coconut oil products. Thank you for your wonderful contribution to our ongoing success!</p>
				<p class="deb-hennig-actions"> - Deb Hennig, Actions First Aid</p>
			</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
