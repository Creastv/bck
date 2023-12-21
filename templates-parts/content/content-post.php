<article class="card-post <?php echo $post->ID; ?>">
    <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php the_post_thumbnail('post-futured', array( 'alt' => get_the_title() )); ?>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php  the_title(); ?> ">
    <?php endif; ?>
    </a>
    <div class="meta-group">
        <div class="meta meta-pub">
            <span><?php _e('Opublikowano: ', 'go' ); ?> </span>
            <time class="meta meta-data-pub published" datetime="<?php the_time('Y-m-d m:s') ?>"> <span> <?php the_time('d.m.Y');?></span></time>
        </div>
    </div>
    <h2 class="entry-title ">
        <a href="<?php the_permalink(); ?>">
        <?php //the_title(); ?>
        <?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?>
        </a>
    </h2>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>
