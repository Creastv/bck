<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<?php get_template_part('templates-parts/parts/grid', 'mw_events'); ?> 
<div class="mw-event">
    <span id="anchor-search" class="anchor-search"></span>
    <div class="mw-event__wraper">
        <div class="mw-event__nav">
            <div class="mw-event__nav__wrap">
                <h3>Znajdź wydarzenie</h3>
            <?php echo do_shortcode('[searchandfilter id="75569"]'); ?>
            </div>
        </div>
        <div class="mw-event__search">
            <?php echo do_shortcode('[searchandfilter id="75569" show="results"]'); ?>

        </div>
    </div>
</div>


<?php else : ?>
    <header class="entry-header">
        <h1 class='text-center'><?php _e( 'Nic nie znaleziono', 'go'); ?></h1>
    </header>
<?php endif; ?>

<?php get_footer();
