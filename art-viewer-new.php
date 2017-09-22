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
		
			<div id="tinderslide">
				<div class="more-action">+</div>
			    <ul id="tinderslideList" class="slide-dimension">
			        <li id="loaderSlide" class="slide-dimension"><div class="loading">Loading...<div class="loader"><span id="loader-percentage">0</span>%</div></div></li>
			    </ul>
			</div><!-- /#tinderslide -->

			<div class="actions-container slide-dimension">
				<div class="actions">
			        <a href="#" class="dislike"><i></i></a>
			        <a href="#" class="like"><i class="icon-heart-shape-outline"></i></a>
			    </div><!-- /.actions -->
		    </div><!-- /.actions-container -->

	    </div><!-- /.tinder-container -->

	</section><!-- /#art-viewer -->


	<script>
	<?php echo 'var user_viewing_data = "' . get_user_meta( get_current_user_id(), 'vvi', true) . '";'; ?>
	<?php echo 'var user_voting_data = "' . get_user_meta( get_current_user_id(), 'vvo', true) . '";'; ?>
	<?php echo 'var user_id = "' . get_current_user_id() . '";'; ?>
	</script>

	<?php
	get_footer(); ?>
			

