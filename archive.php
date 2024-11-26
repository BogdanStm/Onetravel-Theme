<?php get_header(); ?>

<div class="archive container">
    <div class="archive-container d-flex flex-md-row flex-column justify-content-between align-items-center">
        <div class="archive-title">
            <?php single_term_title(); ?>
        </div>    
        <div class="search-container--form">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="archive-content">
        <div class="blog-post row">
            <?php if(have_posts()) : 
                    while(have_posts()) : the_post();
            ?>
            <div class="newpost-box col-md-4">
                <div class="newpost-box--content">
                    <a class="target-box" id="featured-image" href="<?php the_permalink(); ?>">
                        <div class="featured-image" id="featured-image">
                        <?php if ( the_post_thumbnail() ):?>
                            <img src="<?php the_post_thumbnail(); ?>" alt="retete">
                        <?php endif?>
                        </div>
                    </a>
                    <div class="newpost-meta d-flex flex-row justify-content-between mb-2 mt-2">
                        <div class="newpost-meta--duration"><i class="fa-regular fa-clock"></i><span><?php the_field('durata') ?></span><span class="p-2">min</span></div>
                        <?php 
                            $terms = get_the_terms( $query->ID, 'categorie');
                            $onecat= $terms[0];
                        ?>
                        <div class="newpost-meta--cat"><?php echo $onecat->name ?></div>
                    </div>
                    <div class="newpost-title"><?php the_title(); ?></div>
                </div>
            </div> 
            <?php
                    endwhile;
                endif;
            ?>
            <div class="blog-next alignleft"><?php next_posts_link( 'Inainte' ); ?></div>
            <div class="blog-previous alignright"><?php previous_posts_link( 'Inapoi' ); ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>