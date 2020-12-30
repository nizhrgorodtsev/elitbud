<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ElitBud
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-reverse">
            <nav class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'footer-menu',
                    )
                );
                ?>
            </nav>
            <div class="footer-row">
                <div>
                    <div class="site-branding">
                        <a href="http://elitbud/" class="custom-logo-link" rel="home" aria-current="page"><img
                                    src="<?php echo get_theme_mod('your_theme_footer_logo') ?>" class="custom-logo"
                                    alt="ЕлітБУД"></a>
                        <div class="copyright">
                            <?php echo wp_date('Y'); ?> Будівельна компанія "ЕлітБуд". <br> Всі права захищено
                        </div>
                    </div><!-- .site-branding -->
                </div>
                <div>
                    <div class="flex-contacts footer-reverse">
                        <div class="social">
                            <?php
                            $socials = get_field('social', 'options');
                            foreach ($socials as $social) {
                                echo '<a href="' . $social['link']['url'] . '" target="' . $social['link']['target'] . '"><img src="' . wp_get_attachment_image_url($social['icon'], 'full') . '" alt=""></a>';
                            }
                            ?>
                        </div>
                        <div class="phone-section">
                        <div class="text-phones">Центральний відділ<br>продажу квартир</div>
                        <div class="naumber-phones">
                            +38 050 455 9983 <br> +38 096 977 9983
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
