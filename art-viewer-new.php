<?php
/**
 * Template Name: Art Viewer New
 *
 * @package ArtSeenIn2016
 * @subpackage ArtSeenIn2016
 * @since ArtSeenIn2016
 */

function get_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		//check ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		//to check ip is pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}

function check_ip() {
	$ip        = get_ip();
	$voted_ips = get_option( 'asib_voted_ips', array() );
	$has_voted = $voted_ips[$ip];

	// If their IP is in the array of voted IPs, they've voted.
	if ( $has_voted > 0 ) {
		if ( $voted_ips[$ip] <= 5 ) {
			$voted_ips[$ip]++;
			update_option( 'asib_voted_ips', $voted_ips );
			return true;
		} else {
			return false;
		}
	} else {
		$voted_ips[$ip] = 1;
		update_option( 'asib_voted_ips', $voted_ips );
		return true;
	}
}

if ($_SERVER['QUERY_STRING'] ) {
	parse_str($_SERVER['QUERY_STRING']);
	$cookie_name = "pid";
	$cookie_value = $pid;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

$voteOK = is_user_logged_in() || isset($_COOKIE['uviews']) || check_ip();

get_header(); ?>

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
<?php if ( $voteOK ) { ?>
	<div class="intro-text">
		<div class="lang-buttons">
			<a href="#!" class="demo-pill ctrl-btn es-ca">Català</a>
			<a href="#!" class="demo-pill ctrl-btn es-es">Castellano</a>
			<a href="#!" class="demo-pill ctrl-btn en-en">English</a>
		</div>
		<p><span class="lang-ca">Entre Artssspot i Opening BCN hem seleccionat 100 de les millors obres d'art que hem vist aquest any, ara et toca a tu: </span><span class="lang-es">Entre Artssspot y Opening BCN hemos seleccionado 100 de las
	mejores obras de arte que hemos visto este año, ahora te toca a tí: </span><span class="lang-en">Between Artssspot and Opening BCN we have selected 100 of the
	best works of art that we have seen this year, now it's up to you:</span></p>
	<p><span class="lang-ca">Repassa la selecció, vota els teus favorits, però sobretot, descobreix el millor art de Barcelona de 2017.</span><span class="lang-es">Repasa la selección, vota tus favoritos, pero sobre todo, descubre el mejor arte de Barcelona de 2017.</span><span class="lang-en">Review the selection, vote your favorites, but above all, discover the best art of Barcelona in 2017.</span></p>
	<a href="#" class="nav-btn vote-start"><i class="icon-arrow-right shdw-b-brown"></i></a>
	<!-- <p>Una iniciativa de:</p>
	<p><a href="http://www.artssspot.com" target="_blank" class="artssspot"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-artssspot.png" width="100" height="100" alt=""></a><span class="spacer"></span><a href="https://www.facebook.com/opening.bcn" target="_blank" class="opening"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-opening.png" width="70" height="70" alt=""></a></p>
	<div class="info-col">
		<p>Colaboradores:</p>
		<p><a href="http://www.poblenouurbandistrict.com/" target="_blank" class="pud"><img src="<?php echo get_bloginfo('template_url') ?>/img/pud-logo.png" width="60" height="55" alt=""></a><span class="spacer"></span> <a href="http://www.younggalleryweekend.com/" target="_blank" class="ygw"><img src="<?php echo get_bloginfo('template_url') ?>/img/ygw-logo.png" width="56" height="48" alt=""></a><span class="spacer"></span> <a href="http://www.bcnstreetart.xyz/" target="_blank" class="streetart"><img src="<?php echo get_bloginfo('template_url') ?>/img/streetart-logo.png" width="45" height="45" alt=""></a></p>
	</div>-->
	</div>
<?php } else { ?>
	<div class="login-modal-wrapper">
		<div class="login-modal">
			<span class="demo-pill">
				<span class="lang-ca">Ja hem rebut una votació des de aquesta connexió. Per poder guardar la teva, necessitem que te registres.</span>
				<span class="lang-es">Ya hemos recibido una votacion desde tu conexión. Para poder guardar la tuya, necesitamos que te registres.</span>
				<span class="lang-en">We have already received a vote from your connection. In order to save yours, we need you to register.</span>
			</span>
			<span class="lang-ca">Entra amb una xarxa social:</span>
			<span class="lang-es">Entra con una red social:</span>
			<span class="lang-en">Sign in with a social network:</span>
			<?php echo do_shortcode('[apsl-login-lite]'); ?>
			<span class="lang-ca">O amb el teu mail:</span>
			<span class="lang-es">O con tu mail:</span>
			<span class="lang-en">Or with your mail:</span>
			<div class="login-form">
				<span class="register-btn btn form-active" onclick="jQuery('.form-active').removeClass('form-active');jQuery(this).addClass('form-active');jQuery('.lwa-register').addClass('form-active');">
					<span class="lang-ca">Registre</span>
					<span class="lang-es">Registro</span>
					<span class="lang-en">Register</span>
				</span>
				<span class="login-btn btn" onclick="jQuery('.form-active').removeClass('form-active');jQuery(this).addClass('form-active');jQuery('.lwa-form').addClass('form-active');">Login</span>
				<?php echo do_shortcode('[login-with-ajax template="modal-register" registration="1"]'); ?>
			</div>
		</div>
<?php } ?>

<div class="intro-logo">
	<span data-text="Art" class="backgroundclip textshadow word-art">Art </span> 
	<span data-text="seen" class="backgroundclip textshadow size word-seen">seen </span> 
	<span data-text="in" class="backgroundclip textshadow word-in">in </span> 
	<span data-text="BCN&nbsp;'17" class="backgroundclip textshadow word-bcn">BCN&nbsp;'17</span>
</div>

	    	
</div></div>

	</section><!-- /#art-viewer -->


	<script>
	<?php 
	//$userviews = get_user_meta( get_current_user_id(), 'vvi', true);
	//$tempArray = explode(", ", $userviews);
	//if ( sizeof($tempArray) >= 100 ) {
	//	$userviews = done;
	//}
		echo 'var user_viewing_data = "' . get_user_meta( get_current_user_id(), 'vvi', true) . '";'; 
	?>
	<?php echo 'var user_voting_data = "' . get_user_meta( get_current_user_id(), 'vvo', true) . '";'; ?>
	<?php echo 'var user_id = "' . get_current_user_id() . '";'; ?>
	<?php echo 'var voteOK = "' . $voteOK . '";'; ?>
	</script>

	<?php
	get_footer(); ?>
			

