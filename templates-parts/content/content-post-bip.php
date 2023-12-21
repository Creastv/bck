<?php
// $category_object = get_the_category(get_the_ID());
// $category_name = $category_object[0]->name;
?>
<article class="bip-single">
    <div class="bip-single__wrap">
        <div class="bip-single__nav">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/pil-biuletyn.png">
            <?php 
                wp_nav_menu(
                    array(
                    'theme_location' => 'tertiary_menu',
                    )
                );
            ?>
        </div>
        <div class="bip-single__content">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</article>