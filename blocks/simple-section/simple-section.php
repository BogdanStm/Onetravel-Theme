<?php
/*
* Simple Section Block Template
*/

$image = get_field('image');
$title = get_field('title');
// $content = get_field('content');
$bgcolor = get_field('background_color');
$txtcolor = get_field('text_color');
$reverse = get_field('reverse_column');
?>

<div class="block">
    <div class="simpleSection" style="background-color: <?php echo esc_html($bgcolor);?>">
        <?php if ($reverse) {?>
        <div class="simpleSection-container" style="flex-direction: row-reverse">
        <?php } else { ?>
        <div class="simpleSection-container">
        <?php }; ?>
            <div class="simpleSection-container--img">
                <img src="<?php echo esc_html($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>">
            </div>
            <div class="simpleSection-container--content">
                <h1 style="color: <?php echo esc_html($txtcolor); ?>"><?php echo esc_html($title); ?></h1>
                <p style="color: <?php echo esc_html($txtcolor); ?>"><?php the_field('content')?></p>
            </div>
        </div>
    </div>
</div>