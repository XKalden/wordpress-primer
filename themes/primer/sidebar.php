<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */
   
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
 <div class="sidebar-container">
     <div class="search-form">
     	<?php get_search_form()?>
     	
     </div><!--.search-form-->

     <div class="dscr-sidebar">
     	<h2>Popular Posts</h2>
     	<span>Differentiate yourself And Attract More Sales</span>
     	<span>Research In Advertising</span>
     	<span>Nine Features Of An Advertising Flop</span>
     	<span>Write On Your Business Card?</span>
     	<span>Effective Form Advertising Internet Web Site</span>
     </div><!--.dscr-sidebar-->
     <div class="tags">
     	    <h2>Tags</h2>
     	<div class="tags-wrapper">
     		<a href = ""><p>Trends</p></a>
     		<a href = ""><p>Company News</p></a>
     		<a href = ""><p>Tips</p></a>
     		<a href = ""><p>Industry Insights</p></a>
     		<a href = ""><p>Skills</p></a>
     		<a href = ""><p>Reports</p></a>
     		<a href = ""><p>Exhibition News</p></a>
     		<a href = ""><p>Marketing Strategy</p></a>
        </div><!--.tags-wrapper-->	
     </div><!--.tags-->
 </div><!--.sidebar-container-->
<div id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
