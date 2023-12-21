<article class="card-mw-room <?php echo $post->ID; ?>">
   
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php the_post_thumbnail('person-futured', array( 'alt' => get_the_title(), 'title' => get_the_title() )); ?>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail-person.png" alt="<?php the_title(); ?>">
    <?php endif; ?>
    
    <a href="<?php the_permalink(); ?>">
    <div class="card-mw-room__content">
        <h2 class="entry-title ">
          <?php the_title(); ?>
        </h2>
    </div>
    </a>
</article>
