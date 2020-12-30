<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ElitBud
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div id="over"></div>
	<header id="masthead" class="site-header container">
        <div class="header-row">
            <div>
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->
            </div>
            <div>
                <div class="flex-contacts">
                    <div class="social">
                        <?php
                        $socials = get_field('social', 'options');
                        foreach ($socials as $social) {
                            echo '<a href="' . $social['link']['url'] . '" target="' . $social['link']['target'] . '"><img src="' . wp_get_attachment_image_url($social['icon'], 'full') . '" alt=""></a>';
                        }
                        ?>
                    </div>
                    <div class="text-phones">Центральний відділ<br>продажу квартир</div>
                    <div class="naumber-phones">
                        +38 050 455 9983 <br> +38 096 977 9983
                    </div>
                </div>

            </div>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="menuToggle(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="social">
                <?php
                $socials = get_field('social', 'options');
                foreach ($socials as $social) {
                    echo '<a href="' . $social['link']['url'] . '" target="' . $social['link']['target'] . '"><img src="' . wp_get_attachment_image_url($social['icon'], 'full') . '" alt=""></a>';
                }
                ?>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'container' => '',
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->

	</header><!-- #masthead -->
