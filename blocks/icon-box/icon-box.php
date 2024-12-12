<?php
/*
* Icon Box Block Template
*/
$iconsBox = get_field('icons_box')
?>

<div class="block">
    <?php foreach($iconsBox as $iconBox) {?>
    <div class="info">
        <div class="info-icon"><i class="<?php echo $iconBox['icon'] ?>"></i></div>
        <div class="info-content">
            <div class="info-content--name"><?php echo $iconBox['name']; ?></div>
            <div class="info-content--text"><?php echo $iconBox['text']; ?></div>
        </div>
    </div>
    <?php }; ?>
</div>