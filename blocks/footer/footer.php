<?php 
/*
* Footer Block Template 
*/

$title_about = get_field('title_about');
$description_about = get_field('description_about');
$button_about = get_field('button_about');
$button_url_about = get_field('button_url_about');

$title_media = get_field('title_media');
$description_media = get_field('description_media');
$button_media = get_field('button_media');
$button_url_media = get_field('button_url_media');
?>

<div class="footer-hero container d-flex flex-column flex-md-row justify-content-between">
    <div class="footer-hero--col col-md-6">
        <h1><?php echo esc_html($title_about); ?></h1>
        <p><?php echo esc_html($description_about); ?></p>
        <a href="<?php echo esc_html($button_url_about); ?>"><?php echo esc_html($button_about);?></a>
    </div>
    <div class="footer-hero--col col-md-6">
        <h1><?php echo esc_html($title_media); ?></h1>
        <p><?php echo esc_html($description_media); ?></p>
        <a href="<?php echo esc_html($button_url_media); ?>"><?php echo esc_html($button_media);?></a>
    </div>
</div>