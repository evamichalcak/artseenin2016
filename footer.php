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

<section class="site-branding">
	<div class="bottom-bar">
		<span class="logo-container">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="site-logo">
		</span>

		<div class="counter-container"><span id="counterContainer">1</span>/<span id="totalContainer">100</span></div><!-- #counterContainer -->

		<div class="share-container">
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://artseeninzh2017.artssspot.com/?utm_source=fbshare" class="icon-facebook fbshare-action"></a>
			<a href="whatsapp://send?text=http://artseeninzh2017.artssspot.com/?utm_source=washare" class="icon-whatsapp washare-action"></a>
			<a href="https://twitter.com/home?status=http://artseeninzh2017.artssspot.com/?utm_source=twshare" class="icon-twitter twshare-action"></a>
		</div><!-- .share-container -->

	</div><!-- .bottom-bar -->
	<div class="project-info">
		<div class="info-col initiators">
			<p>
				<span class="lang-ca">Una iniciativa de:</span>
				<span class="lang-es">Una iniciativa de:</span>
				<span class="lang-en">An initiative by:</span>
				<span class="lang-de">Eine Initiative von:</span>
			</p>
			<p><a href="http://www.artssspot.com" target="_blank" class="logo-link--l artssspot"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-artssspot.png" width="100" height="100" alt=""></a><span class="spacer"></span><a href="https://www.facebook.com/opening.bcn" target="_blank" class="logo-link--l opening"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-opening.png" width="70" height="70" alt=""></a></p>
		</div><!-- .info-col -->
		<div class="info-col colaborators">
			<p>
				<span class="lang-ca">Col·laboradors:</span>
				<span class="lang-es">Colaboradores:</span>
				<span class="lang-en">Collaborating:</span>
				<span class="lang-de">Unterstützt von:</span>
			</p>
			<p><a href="http://www.artssspot.com" target="_blank" class="logo-link--s"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-placeholder.png" width="50" height="50" alt=""></a><span class="spacer"></span> <a href="http://www.artssspot.com" target="_blank" class="logo-link--s"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-placeholder.png" width="50" height="50" alt=""></a><span class="spacer"></span> <a href="http://www.artssspot.com" target="_blank" class="logo-link--s"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-placeholder.png" width="50" height="50" alt=""></a></p>
		</div><!-- .info-col -->
	</div><!-- .project-info -->
</section><!-- .site-branding -->

<?php wp_footer(); ?>

</body>
</html>
