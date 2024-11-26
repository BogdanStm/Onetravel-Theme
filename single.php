<?php 

/*
* Single Template
*/

get_header(); ?>

<div class="article" data-barba-namespace="Article">
	<div class="article-main">
		<?php
		while( have_posts() ):
			the_post();
			?>
			<!-- Because of this code you can use gutenberg block for the content -->
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php
		endwhile;
		?>
	</div>
</div>

<?php get_footer(); ?>