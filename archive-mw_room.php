<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<div class="mw-room">
    <div class="mw-room__wrap">
        <?php while ( have_posts() ) : the_post(); 
        get_template_part( 'templates-parts/content/content', 'mw_room' ); 
        endwhile; ?>
    </div>
</div>
<?php if(paginate_links()) { ?>
<div class="go-pagination">
    <?php pagination_bars(); ?>
</div>
<?php } ?>

<?php else : ?>
    <header class="entry-header">
        <h1 class='text-center'><?php _e( 'Nic nie znaleziono', 'go'); ?></h1>
    </header>
<?php endif; ?>

<?php get_footer();
