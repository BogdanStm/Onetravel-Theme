<div class="blog-post row">
    <?php
        $args = array(
            'post_type' => 'retete',
            'posts_per_page' => 3,
            'offset' => 1,
            'orderby'=>'date',
        );

        $query = new WP_Query( $args ); 
    ?>
    <?php
        if ($query->have_posts() ):
            while ($query->have_posts()) : $query->the_post(); ?> 
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
        else:
    ?>
        <p> Ups! Nu ai creat nicio reteta, asteptam un deliciu!</p>
    <?php endif;
    ?>
</div>
<div class="blog-post row">
    <?php
        $args = array(
            'post_type' => 'retete',
            'posts_per_page' => 2,
            'offset' => 4,
            'orderby'=>'date',
        );

        $query = new WP_Query( $args ); 
    ?>
    <?php
        if ($query->have_posts() ):
            while ($query->have_posts()) : $query->the_post(); ?> 
            <div class="newpost-box col-of-2 col-md-6">
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
        else:
    ?>
        <p> Ups! Nu ai creat nicio reteta, asteptam un deliciu!</p>
    <?php endif;
    ?>
</div>