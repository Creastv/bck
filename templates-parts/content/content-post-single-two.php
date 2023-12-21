<?php 
$cat = get_the_terms( $post->ID , 'class_cat' );
$ins = get_the_terms( $post->ID , 'class_instructor' );
$postType = get_post_type_object(get_post_type());
$sub = get_field('zapisz_sie', $post->ID);
$form = get_field('formularz', $post->ID);

if(get_field('data', $post->ID)) :
$date = date("d/m/Y", strtotime(get_field('data'), $post->ID ));
$time = get_field('godzina', $post->ID);
$now = date("d/m/Y");
$open = false;

if($date >= $now){
    $open = true;
} 
endif;
?>
<article class="post-single-two hentry">
<div class="post-single-two__wrap">
    <div class="sidebar">
        <div class="siderbar_wrap">
        <div class="img">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php the_post_thumbnail('person-futured' , array( 'alt' => get_the_title(), 'title' => get_the_title() )); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail-person.png">
            <?php endif; ?>
         
        </div>
        <?php if(is_singular('mw_room')) : ?>
        <div class="info">
            <?php get_template_part('templates-parts/parts/info', 'mw_room'); ?> 
        </div>
        <?php endif; ?>
        <?php if(is_singular('mw_event')) : ?>
        <div class="info">
            <?php get_template_part('templates-parts/parts/info', 'mw_events'); ?> 
        </div>
        <?php endif; ?>
        <?php if(is_singular('mw_class')) : ?>
        <div class="info">
            <?php get_template_part('templates-parts/parts/info', 'mw_class'); ?> 
        </div>
        <?php endif; ?>
        </div>
    </div>
    
    <div class="content">
        <div class="post-info">
            <?php if ($postType) { ?>
                <span class="type-post"><?php echo esc_html($postType->labels->singular_name); ?></span>
            <?php } ?>
            <?php  if ( $cat != null ){
                foreach( $cat as $term ) { ?>
               <span class="class_color "  <?php echo get_field('kolor', $term ) ? 'style="background-color: ' . get_field('kolor', $term ) . ' " ' : false; ?> ><?php echo $term->name;?></span>
              <?php  } 
            } ?>
        </div>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <div class="entry-content">
            <hr>
        <?php the_content(); ?>
        <?php  if ( $ins != null ){ ?>
            <div class="rel-ins-wrap">
            <div class="title"><h2 class="title__tag">Instruktorzy</h2></div>
               <?php foreach( $ins as $term ) { 
                $id =  get_field('ins', $term )
                ?>
               <div class="rel-ins">
                    <div class="img-list">
                        <?php if (has_post_thumbnail(  $id  ) ): ?>
                            <?php echo wp_get_attachment_image_src( 'thumbnail'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php echo get_the_title($id); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="content-list">
                        <h3><?php echo get_the_title($id); ?> </h3>
                        <p class="desc"><?php echo get_the_excerpt($id); ?> <a href="<?php echo get_the_permalink($id); ?>" class="readmore">Czytaj wicej</a></p>
                        
                    </div>
               </div>
              <?php  } ?>
              </div>
            <?php } ?>
        <?php if(is_singular('mw_event')) : ?>
        <?php  if ( $open && $sub  != null && $form ){ ?>  
            <div  class="form-subs">
                <span id="zapisy"></span>
                <div class="header">
                <h2>Formularz do zapisów</h2>
                </div>
                <?php echo $form; ?>
            </div>
        <?php } ?>
        <?php endif; ?>
        </div>
        <hr>
        <div class="kk-ata">
            <div class="kk-ata__wraper">
                <span><?php _e('Twoja ocena: ', 'go' ); ?></span>
                <?php echo kk_star_ratings(); ?>
            </div>
            <div class="kk-ata__wraper">
                <span><?php _e('Udostępnij: ', 'go' ); ?></span>
                <?php echo do_shortcode("[addtoany]"); ?>
            </div>
        </div>
    </div>
</div>
</article>
