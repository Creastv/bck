<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<div class="mw-class">
    <span class="anchor-search"></span>
    <div class="mw-class__wraper">
        <div class="mw-class__nav">
            <div class="mw-class__nav__wrap">
                <h3>Znajdź zajęcia</h3>
            <?php echo do_shortcode('[searchandfilter id="75390"]'); ?>
            </div>
        </div>
        <div class="mw-class__search">
            <?php echo do_shortcode('[searchandfilter id="75390" show="results"]'); ?>
        </div>
    </div>
</div>


<?php else : ?>
    <header class="entry-header">
        <h1 class='text-center'><?php _e( 'Nic nie znaleziono', 'go'); ?></h1>
    </header>
<?php endif; ?>

<?php get_template_part( 'templates-parts/parts/zajecia-instruktorzy' );?>
<?php get_footer();
