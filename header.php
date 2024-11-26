<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MC4VBHM5');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B4KXBYS52P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B4KXBYS52P');
</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MC4VBHM5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="nav">
            <div class="nav-container">
                <div class="nav-container--top">
                    <div class="top">
                        <div class="top-left">
                            <div class="logo">
                                <?php echo get_custom_logo(); ?>
                                <p>Societatea Română de Gastroenterologie și Hepatologie</p>
                            </div>
                        </div>
                        <div class="top-right">
                            <div class="top-right--menu">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'wp_srghtheme_top_menu',
                                        'sort_column' => 'menu_order',
                                        'menu-id' =>'primary-menu',
                                        'depth' => 0,
                                        'container' =>'false' ,
                                        'menu_class' => 'menu-top',
                                    ));
                                ?>
                                <?php if (is_user_logged_in()): ?>
                                <div class="devino-membru">
                                    <a href="https://srgh.ro/membership-account/" class="devino-membru--btn"><span>Contul meu</span><span><i class="fa-solid fa-user"></i></span></a>
                                </div>
                                <?php else: ?>
                                <div class="devino-membru">
                                    <a href="https://srgh.ro/membership-levels/" class="devino-membru--btn"><span>Loghează-te</span><span><i class="fa-solid fa-user"></i></span></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-container--menu">
                    <div class="menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'wp_srghtheme_primary_menu',
                                'sort_column' => 'menu_order',
                                'menu-id' =>'primary-menu',
                                'depth' => 0,
                                'container' =>'false' ,
                                'menu_class' => 'menu-container',
                            ));
                        ?>
                    </div>
                    <div class="mobile">
                        <div class="mobile--toggle" id="mobile--toggle"><i class="fa-solid fa-bars"></i></div>
                        <div class="mobile--menu" id="mobile--menu">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'wp_srghtheme_primary_menu',
                                    'sort_column' => 'menu_order',
                                    'menu-id' =>'primary-menu',
                                    'depth' => 0,
                                    'container' =>'false' ,
                                    'menu_class' => 'mobile-container',
                                ));
                            ?>
                        </div>        
                    </div>
                    <div class="right">
                        <div class="search">
                            <label for="search">
                                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                <!-- <input type="search" id="search" placeholder="Căutați..."> -->
                            </label>
                        </div>
                        <div class="gtranslate">
                            <?php echo do_shortcode("[gtranslate]")?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>