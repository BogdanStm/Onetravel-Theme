<?php
/*
 * The main template file
 *
 * @package SRGH Theme
 */

get_header();
?>
<main id="primary" class="site-main">
<div class="header">
	<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );?>
	<img class="header-image" src="<?php echo $thumbnail[0]; ?>" alt="header-image">
	<div class="header-title">
		<?php echo get_the_title() ?>
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