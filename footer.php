    <?php get_sidebar( 'newsletter' ); ?>
    <div class="footer">
        <div class="footer-container">
            <div class="footer-container--newsletter">
                <div class="footer-decoration-one">
                    <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/664f0bbc2914eff773855b0f_decoration-01.svg" alt="footer-shape-one" class="footer-shape-one">
                    <div class="footer-shape-five"></div>
                    <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/664f0bbc2914eff773855b0f_decoration-01.svg" alt="footer-shape-two" class="footer-shape-two">
                </div>
                <div class="logo">
                    <?php echo get_custom_logo(); ?>
                    <p>Societatea Română de Gastroenterologie și Hepatologie</p>
                </div>
                <div class="newsletter">
                    <h3>Abonează-te la newsletter</h3>
                    <p>Înscrieți-vă cu e-mailul pentru a primi știri și actualizări SRGH.</p>
                    <div class="newsletter-form">
                        <label for="">
                            <input type="text" placeholder="Adaugă adresa de email">
                        </label>
                        <button>Abonează-te</button>
                    </div>
                    <div class="newsletter-media">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <!--<a href=""><i class="fa-brands fa-twitter"></i></a>-->
                    </div>
                </div>
            </div>
            <div class="footer-container--data">
                <div class="footer-decoration-two">
                    <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/664f0bbc2914eff773855b0f_decoration-01.svg" alt="footer-shape-one" class="footer-shape-one">
                    <div class="footer-shape-five"></div>
                    <img src="https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/664f0bbc2914eff773855b0f_decoration-01.svg" alt="footer-shape-two" class="footer-shape-two">
                </div>
                <div class="menu">
                    <div class="menu-wrapper">
                        <div class="menu-wrapper--col">
                            <h3>Pagini</h3>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'wp_srghtheme_footerOne_menu',
                                    'sort_column' => 'menu_order',
                                    'menu-id' =>'footerOne-menu',
                                    'depth' => 0,
                                    'container' =>'false' ,
                                    'menu_class' => 'footer-menu',
                                ));
                            ?>
                        </div>
                        <div class="menu-wrapper--col">
                            <h3>Pentru membri</h3>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'wp_srghtheme_footerTwo_menu',
                                    'sort_column' => 'menu_order',
                                    'menu-id' =>'footerTwo-menu',
                                    'depth' => 0,
                                    'container' =>'false' ,
                                    'menu_class' => 'footer-menu',
                                ));
                            ?>
                        </div>
                        <div class="menu-wrapper--col">
                            <h3>Informatii de contact</h3>
                            <p>Institutul Clinic Fundeni – Bucuresti, Soseaua Fundeni nr. 258, Sectia I Gastroenterologie, Sector 2</p>
                            <p style="margin-top: 20px;"><span style="padding-right: 10px;"><i class="fa-regular fa-envelope"></i></span>contact@srgh.ro</p>
                        </div>     
                    </div>
                    <p class="copyright"><b>Copyright © 2024 SRGH.</b> Utilizarea acestui site web reprezintă acceptarea Politicii de confidențialitate și a Termenilor și condițiilor.</p>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>