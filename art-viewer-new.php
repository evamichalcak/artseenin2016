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
			        <li id="loaderSlide" class="slide-dimension"><div class="loading shdw-t-grey">Loading...<div class="loader"><span id="loader-percentage">0</span>%</div></div></li>
			    </ul>
			</div><!-- /#tinderslide -->

			<div class="actions-container slide-dimension">
				<div class="actions">
			        <a href="#" class="dislike"><i class="icon-x shdw-b-brown"></i></a>
			        <a href="#" class="like"><i class="icon-heart-shape-outline shdw-b-brown"></i></a>
			    </div><!-- /.actions -->
		    </div><!-- /.actions-container -->

	    </div><!-- /.tinder-container -->
	    <div id="howToIntro" class="intro-container"><div class="intro-wrapper">
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

<div class="intro-logo">
	<span data-text="Art" class="backgroundclip textshadow">Art </span> 
	<span data-text="seen" class="backgroundclip textshadow size">seen </span> 
	<span data-text="in" class="backgroundclip textshadow">in </span> 
	<span data-text="BCN&nbsp;'17" class="backgroundclip textshadow">BCN&nbsp;'17</span>
</div>

	    	<!-- <p>Hemos seleccionado 100 de las
mejores obras de arte que hemos visto este año, ahora te toca a tí: </p><p>Repasa la selección, vota tus favoritos pero sobre todo, descubre el mejor arte de Barcelona de 2017.</p></div></div>

	</section><!-- /#art-viewer -->


	<script>
	<?php echo 'var user_viewing_data = "' . get_user_meta( get_current_user_id(), 'vvi', true) . '";'; ?>
	<?php echo 'var user_voting_data = "' . get_user_meta( get_current_user_id(), 'vvo', true) . '";'; ?>
	<?php echo 'var user_id = "' . get_current_user_id() . '";'; ?>
	</script>

	<?php
	get_footer(); ?>
			

