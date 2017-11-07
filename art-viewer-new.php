<?php
/**
 * Template Name: Art Viewer New
 *
 * @package ArtSeenIn2016
 * @subpackage ArtSeenIn2016
 * @since ArtSeenIn2016
 */

if ($_SERVER['QUERY_STRING'] ) {
	parse_str($_SERVER['QUERY_STRING']);
	$cookie_name = "pid";
	$cookie_value = $pid;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

get_header();
	echo parse_str( $_SERVER['QUERY_STRING'] );
	?>
	<section id="art-viewer">
		<div class="tinder-container">

		    <div class="more-viewer slide-dimension">
		    	<div class="more-viewer-inner shdw-t-brown"></div>
		    </div>
		
			<div id="tinderslide">
			    <ul id="tinderslideList" class="slide-dimension">
			        <li id="loaderSlide" class="slide-dimension info-slide"><div class="loading shdw-t-brown">Loading...<div class="loader"><span id="loader-percentage">0</span>%</div></div></li>
			    </ul>
			</div><!-- /#tinderslide -->

			<div class="actions-container slide-dimension">
				<div class="actions">
			        <a href="#" class="dislike dislike-action"><i class="icon-x shdw-b-brown"></i></a>
			        <a href="#" class="like like-action"><i class="icon-heart-shape-outline shdw-b-brown"></i></a>
			    </div><!-- /.actions -->
		    </div><!-- /.actions-container -->

	    </div><!-- /.tinder-container -->
	    <div id="howToIntro" class="intro-container logoin"><div class="intro-wrapper">
<!-- <svg>
<defs>
	<pattern id="wood" patternUnits="userSpaceOnUse" width="400" height="400" >
		<image xlink:href="https://media.giphy.com/media/l41YcgNSPj6Wy1KyQ/giphy.gif" width="400" height="400" />
	</pattern>
</defs>
<text y="1em" class="shdw-t-grey">Art</text>
<text y="2em" class="shdw-t-grey">seen</text>
<text y="3em">in</text>
<text y="4em">BCN `17</text>
</svg>

<div class="clip-text clip-text_one shdw-t-grey"><span>JINTOS</span><span>oh</span></div>
-->

<div class="intro-text">
	<div class="lang-buttons">
		<a href="#!" class="demo-pill ctrl-btn es-ca" style="display: none;">Català</a>
		<a href="#!" class="demo-pill ctrl-btn es-es" style="display: none;">Castellano</a>
		<a href="#!" class="demo-pill ctrl-btn de-de">Deutsch</a>
		<a href="#!" class="demo-pill ctrl-btn en-en">English</a>
	</div>
	<p>
		<span class="lang-ca">Entre Artssspot i Opening BCN hem seleccionat 100 de les millors obres d'art que hem vist aquest any, ara et toca a tu: </span>
		<span class="lang-es">Entre Artssspot y Opening BCN hemos seleccionado 100 de las
mejores obras de arte que hemos visto este año, ahora te toca a tí: </span>
		<span class="lang-en">Between Artssspot and Opening BCN we have selected 100 of the
best works of art that we have seen this year, now it's up to you:</span>
		<span class="lang-de">Artssspot hat 100 der besten Kunstwerke, die wir im letzten Jahr gesehen haben ausgewählt, jetzt bist Du dran:</span>
	</p>
	<p>
		<span class="lang-ca">Repassa la selecció, vota els teus favorits, però sobretot, descobreix el millor art de Barcelona de 2017.</span>
		<span class="lang-es">Repasa la selección, vota tus favoritos, pero sobre todo, descubre el mejor arte de Barcelona de 2017.</span>
		<span class="lang-en">Review the selection, vote your favorites, but above all, discover the best art of Barcelona in 2017.</span>
		<span class="lang-de">Geh die Asuwahl durch, stimme für deine Favoriten, aber vorallem, entdecke die beste zürcher Kunst des Jahres 2017.</span>
	</p>
<a href="#" class="nav-btn vote-start"><i class="icon-arrow-right shdw-b-brown"></i></a>
<!-- <p>Una iniciativa de:</p>
<p><a href="http://www.artssspot.com" target="_blank" class="artssspot"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-artssspot.png" width="100" height="100" alt=""></a><span class="spacer"></span><a href="https://www.facebook.com/opening.bcn" target="_blank" class="opening"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-opening.png" width="70" height="70" alt=""></a></p>
<div class="info-col">
	<p>Colaboradores:</p>
	<p><a href="http://www.poblenouurbandistrict.com/" target="_blank" class="pud"><img src="<?php echo get_bloginfo('template_url') ?>/img/pud-logo.png" width="60" height="55" alt=""></a><span class="spacer"></span> <a href="http://www.younggalleryweekend.com/" target="_blank" class="ygw"><img src="<?php echo get_bloginfo('template_url') ?>/img/ygw-logo.png" width="56" height="48" alt=""></a><span class="spacer"></span> <a href="http://www.bcnstreetart.xyz/" target="_blank" class="streetart"><img src="<?php echo get_bloginfo('template_url') ?>/img/streetart-logo.png" width="45" height="45" alt=""></a></p>
</div>-->
</div>

<div class="intro-logo">
	<span data-text="Art" class="backgroundclip textshadow word-art">Art </span> 
	<span data-text="seen" class="backgroundclip textshadow size word-seen">seen </span> 
	<span data-text="in" class="backgroundclip textshadow word-in">in </span> 
	<span data-text="ZH&nbsp;'17" class="backgroundclip textshadow word-bcn">ZH&nbsp;'17</span>
</div>

	    	
</div></div>

	</section><!-- /#art-viewer -->


	<script>
	<?php echo 'var user_viewing_data = "' . get_user_meta( get_current_user_id(), 'vvi', true) . '";'; ?>
	<?php echo 'var user_voting_data = "' . get_user_meta( get_current_user_id(), 'vvo', true) . '";'; ?>
	<?php echo 'var user_id = "' . get_current_user_id() . '";'; ?>
	</script>

	<?php
	get_footer(); ?>
			

