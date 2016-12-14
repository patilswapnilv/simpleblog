<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simple-blog' ); ?></h1>
					<h2><?php _e('Want to play some Pacman instead?', 'simple-blog')?>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'Ohh man, looks like nothing was found at this location. Maybe try a search?', 'simple-blog' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
				<div class="frame holder-404">
    
           <object type="application/x-shockwave-flash" name="name" data="<?php bloginfo('stylesheet_directory'); ?>/swf/pacman.swf" width="977" height="500" id="flash-404" style="visibility: visible;"><param name="quality" value="high"><param name="wmode" value="transparent"></object>
    </div>
       
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
