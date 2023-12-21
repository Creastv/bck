<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<div class="mw-person">
    <div class="mw-person__wraper">
        <div class="mw-person__nav">
            <div class="mw-person__nav__wrap">
            <?php    
            $terms = get_terms('person_group');
            if ( !empty( $terms ) && !is_wp_error( $terms ) ){
                echo "<ul>";
                foreach ( $terms as $term ) {
                echo '<li> <a href="#' . str_replace(' ', '-', $term->name) . '"> ' . $term->name . ' </a></li>';
                }
                echo "</ul>";
            } ?>
            </div>
        </div>
        <div class="mw-person__persons">
            
            <?php 
            foreach($terms as $term) {
                $posts = get_posts(
                    array(
                       'post_type' => 'mw_person',
                       'tax_query' => array(
                           array(
                               'taxonomy' => 'person_group',
                               'field' => 'slug',
                               'terms' => $term->slug
                           )
                       ),
                       
                       'posts_per_page' => -1
                    )
                );
                echo '<div class="anchor-point" id="' . str_replace(' ', '-', $term->name) . '" > </div>';
                echo '<div class="anchor" > <h2>' . $term->name . '</h2></div>';
                echo '<div class="mw-person__persons__wrap">';
                foreach($posts as $post) {
                    get_template_part( 'templates-parts/content/content', 'mw_person' ); 
                }
                echo '</div>';
            }
            ?>
            </div>
            
        </div>
    </div>
</div>

<?php else : ?>
    <header class="entry-header">
        <h1 class='text-center'><?php _e( 'Nic nie znaleziono', 'go'); ?></h1>
    </header>
<?php endif; ?>
<script>
let menuSection = document.querySelectorAll(".mw-person__nav li");
// for clickable event
menuSection.forEach((v) => {
  v.onclick = () => {
    setTimeout(() => {
      menuSection.forEach((j) => j.classList.remove("active"));
      v.classList.add("active");
    }, 300);
  };
});

// for window scrolldown event
window.onscroll = () => {
  let mainSection = document.querySelectorAll(".anchor");

  mainSection.forEach((v, i) => {
    let rect = v.getBoundingClientRect().y;
    if (rect < window.innerHeight - 400) {
      menuSection.forEach((v) => v.classList.remove("active"));
      menuSection[i].classList.add("active");
    }
  });
};

</script>
<?php get_footer();
