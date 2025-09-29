<?php

get_header();
the_post();

$url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$live_code = get_field("live_code", "options");
?>

<main id="main" class="main <?php if (!is_front_page()) { echo 'main--subpage'; } ?> <?php if (strpos($url, 'polityka-prywatnosci') !== false || strpos($url, 'regulamin') !== false) { echo 'main--rules-page'; } ?>">
    <div class="subpage-hero">
        <div class="subpage-hero__background subpage-hero__background--plain"></div>
        <div class="container">
            <div class="subpage-hero__wrapper">
                <div class="subpage-hero__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/play-icon-psd.png" alt="play-icon" />
                </div>
                <h1 class="subpage-hero__title">Transmisja LIVE</h1>
            </div>
        </div>
    </div>

    <?php if(!empty($live_code)):?>
    <div class="live-widget">
        <div class="container">
            <div class="live-widget__wrapper"><?php echo $live_code;?></div>
        </div>
    </div>
    <?php endif;?> <?php the_content(); ?>
</main>
<?php get_footer(); ?>
