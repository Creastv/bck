<?php get_header(); ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<?php if ( have_posts() ) : ?>
<?php if(get_post_type( get_the_ID() ) == 'mw_event') : ?>
    <div class="mw-event mw-event__tax">
        <span class="anchor-search"></span>
        <div class="mw-event__wraper">
            <div class="mw-event__nav">
                <div class="mw-event__nav__wrap">
                    <h3>Znajdź repertuar</h3>
                <?php echo do_shortcode('[searchandfilter id="75569"]'); ?>
                </div>
            </div>
            <div class="mw-event__search">
                <?php echo do_shortcode('[searchandfilter id="75569" show="results"]'); ?>
            </div>
        </div>
    </div>
<?php else : ?>   

<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post(); 
        if(get_post_type( get_the_ID() ) == 'mw_event') :
            get_template_part( 'templates-parts/content/content', 'mw_event' ); 
            elseif (get_post_type( get_the_ID() ) == 'mw_class') :
                get_template_part( 'templates-parts/content/content', 'mw_class' ); 
            elseif (get_post_type( get_the_ID() ) == 'mw_person') :
                get_template_part( 'templates-parts/content/content', 'mw_person' ); 
            elseif (get_post_type( get_the_ID() ) == 'mw_room') :
                get_template_part( 'templates-parts/content/content', 'mw_room' ); 
            elseif (get_post_type( get_the_ID() ) == 'page') :
                get_template_part( 'templates-parts/content/content', 'page' );
            else: 
            get_template_part( 'templates-parts/content/content', 'post' ); 
            endif;
    endwhile; ?>
</div>
<?php if(paginate_links()) { ?>
<div class="go-pagination">
    <?php pagination_bars(); ?>
</div>
<?php } ?>
<?php endif; ?>
<?php else : ?>
    <header class="entry-header">
        <h1 class='text-center'><?php _e( 'Nic nie znaleziono', 'go'); ?></h1>
    </header>
<?php endif; ?>

<?php get_footer();
