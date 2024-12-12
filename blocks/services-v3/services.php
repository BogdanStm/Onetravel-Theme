<?php
/*
* Services V3 Block Template
*/

$subTitle = get_field('sub_title');
$title = get_field('title');
$desc = get_field('desc');
$btn = get_field('btn');
$services = get_field('services');
?>

<div class="block">
    <div class="servicesV3">
        <div class="servicesV3-container">
            <div class="servicesV3-container--content">
                <div class="subTitle"><?php echo esc_html($subTitle); ?></div>
                <div class="title"><?php echo esc_html($title); ?></div>
                <div class="desc"><?php echo esc_html($desc); ?></div>
                <div class="button-light"><a href="<?php echo esc_html($btn); ?>"><span>About us</span><i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="servicesV3-container--service">
                <?php foreach($services as $service) { ?>
                <div class="service">
                    <div class="service-title"><?php echo $service['service_title']; ?></div>
                    <div class="service-desc"><?php echo $service['service_desc']; ?></div>
                    <div class="service-btn">
                        <a href="<?php echo $service['service_btn']; ?>" class="button-arrow"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</div>