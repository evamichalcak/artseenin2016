<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ArtSeenIn2016
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

<div class="site-branding">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-container">
		<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="site-logo">
	</a>

	<div class="counter-container"><span id="counterContainer">1</span>/<span id="totalContainer">100</span></div><!-- #counterContainer -->

	<div class="share-container">
		<a href="" class="icon-facebook fbshare-action"></a>
		<a href="" class="icon-whatsapp washare-action"></a>
		<a href="" class="icon-twitter twshare-action"></a>
	</div><!-- .share-container -->

</div><!-- .site-branding -->

<?php wp_footer(); ?>

</body>
</html>
