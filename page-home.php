<?php
/*
 * The main template file
 *
 * @package SRGH Theme
 */

get_header();
?>
<main id="primary" class="site-main">
<div class="video">
	<div class="video-src">
		<video playsinline="" autoplay="" loop="" muted="" src="https://aimee.ro/onetravel/OT-hd_1920_1080_24fps%202.mp4"></video>
	</div>
	<div class="video-title">
		Welcome to <img src="https://oneevents.ro/wp-content/uploads/2024/12/Logo_One-Travel-Events_final-03.png" alt="logo">
	</div>
</div>
<?php
the_content(
	sprintf(
		wp_kses(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'srghtheme' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		wp_kses_post( get_the_title() )
	)
);
?>


<?php get_footer(); ?>