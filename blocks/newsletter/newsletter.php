<?php
/*
* Newsletter Block Template
*/


$title = get_field('title');
$description = get_field('description');
$button = get_field('button');
$button_url = get_field('button_url');
?>


<div class="newsletter d-flex flex-column justify-content-center align-items-center">
    <div class="newsletter-container">
        <h1 class="newsletter-container--title"><?php echo esc_html($title);?></h1>
        <p class="newsletter-container--desc"><?php echo esc_html($description);?></p>
        <a href="<?php echo esc_html($button_url);?>" class="newsletter-container--btn"><?php echo esc_html($button); ?></a>
    </div>
</div>