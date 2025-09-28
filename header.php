<?php

if (is_woocommerce_activated()) {
    global $woocommerce;
    $cart_items_number = $woocommerce->cart->get_cart_contents_count();
}

$global_phone_number = get_field("global_phone_number", "options");
$global_phone_number_display = get_field("global_phone_number_display", "options");
$global_logo = get_field("global_logo", "options");
$theme_sign = get_field("theme_sign", "options");
$global_email = get_field("global_email", "options");
$global_terms_and_conditions = get_field("global_terms_and_conditions", "options");
$global_privacy_policy = get_field("global_privacy_policy", "options");
$global_social_media = get_field("global_social_media", "options");
$header_button = get_field("header_button", "options");
$cart_icon = get_field("cart_icon", "options");

$body_classes = get_body_class();

?>

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>

    <body <?php if(!is_front_page()) { body_class('theme-subpage'); } else { body_class('theme-frontpage'); } ?>>
        <div class="preloader">
            <div class="preloader__logo"><?php if(!empty($theme_sign)) { echo wp_get_attachment_image($theme_sign, 'full', '', ["class" => ""]); } else { echo ''; } ?></div>
        </div>
        <header class="header <?php if(!is_front_page()) { echo 'header--subpage'; } ?>">
            <div class="container">
                <nav class="nav <?php if(!is_front_page()) { echo 'nav--subpage'; } ?>">
                    <a href="/" class="nav__logo <?php if(!is_front_page()) { echo 'nav__logo--subpage'; } ?>">
                        <?php if(!empty($global_logo)) { echo wp_get_attachment_image($global_logo, 'full', '', ["class" => ""]); } else { echo 'Logo'; } ?>
                    </a>
                    <div class="nav__content <?php if(!is_front_page()) { echo 'nav__content--subpage'; } ?>">
                        <?php $menu_class = is_front_page() ? 'nav__menu' : 'nav__menu nav__menu--subpage'; echo wp_nav_menu(['theme_location' => 'Navigation', 'container' => 'ul', 'menu_class' => $menu_class]); ?>

                        <div class="hamburger nav__hamburger <?php if(!is_front_page()) { echo 'nav__hamburger--subpage'; } ?>">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    

