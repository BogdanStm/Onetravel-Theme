<?php
/*
* Posts Block Template
*/

$post_type = get_field('post_type');
$post_per_page = get_field('post_per_page');
$order = get_field('order');

?>

<div class="blog-post d-flex flex-md-row flex-column">
    <?php
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $post_per_page,
            'offset'=> 1,
            'orderby'=> $order,
            // 'category_name' => 'preturi'
        );

        $query = new WP_Query( $args ); 
        if ($query->have_posts() ):
            while ($query->have_posts()) : $query->the_post(); ?> 
            <div class="newpost-box">
                <div class="newpost-box--content">
                    <a href="<?php the_permalink(); ?>">
                    <?php if ( the_post_thumbnail() ):?>
                        <div class="newpost-img"><img src="<?php the_post_thumbnail(); ?>" alt="retete"></div>
                    <?php endif?>
                    </a>
                    <div class="newpost-meta d-flex flex-row justify-content-between mb-2 mt-2">
                        <div class="newpost-meta--duration">2 ore</div>
                        <div class="newpost-meta--cat">Categorie</div>
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