<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Kimenya
 * @since Kimenya 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
	<div class="kimenya-brand-bottom">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo site_url()?>/wp-content/themes/kimenya/css/images/news_logo_bot.png">
		</a>
	</div>
	<div class="header-contact-info-bottom">
		<p><?php echo get_option('address'); ?></p>
		<p><?php echo get_option('contact'); ?></p>
		<p><?php echo get_option('workschedule'); ?></p>
	</div>
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
