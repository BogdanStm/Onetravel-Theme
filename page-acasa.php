<?php get_header(); ?>
<main id="primary" class="site-main">
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