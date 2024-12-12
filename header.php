<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="nav">
            <div class="nav-container">
                <div class="nav-container--menu">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <div class="menu-mobile" id="menu-mobile">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'wp_srghtheme_primary_menu',
                                    'sort_column' => 'menu_order',
                                    'menu-id' =>'primary-menu',
                                    'depth' => 0,
                                    'container' =>'false' ,
                                    'menu_class' => 'menu-primary',
                                ));
                            ?>
                        </div>
                        <div class="menu-desktop">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'wp_srghtheme_primary_menu',
                                    'sort_column' => 'menu_order',
                                    'menu-id' =>'primary-menu',
                                    'depth' => 0,
                                    'container' =>'false' ,
                                    'menu_class' => 'menu-primary',
                                ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="nav-container--btn">
                    <div class="icons">
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                    </div>
                    <div class="mobile-toggle">
                        <button class="mobile-toggle--open" id="mobile-toggle--open"><i class="fa-solid fa-bars"></i></button>
                        <button class="mobile-toggle--close" id="mobile-toggle--close"><i class="fa-solid fa-x"></i></button>
                    </div>
                    <a href="http://localhost:8888/Onetravel/index.php/contact/" class="contact">Contacteaza-ne</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>