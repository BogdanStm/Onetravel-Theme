<?php
/*
* Services Block Template
*/

$subTitle = get_field('sub_title');
$title = get_field('title');
$services = get_field('services');

?>
<div class="block">
    <div class="services">
        <div class="services-subTitle"><?php echo esc_html($subTitle); ?></div>
        <div class="services-title"><?php echo esc_html($title); ?></div>
        <div class="services-container">
            <?php foreach($services as $service) { ?>
            <div class="service">
                <i class="service-icon <?php echo $service['icon']?>"></i>
                <h3 class="service-name"><?php echo $service['name']; ?></h3>
            </div>
            <?php }; ?>
        </div>
    </div>
</div>