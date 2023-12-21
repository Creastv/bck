<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>



<?php if ( $query->have_posts() ) { ?>
    <div class="event-wraper">
        <?php while ($query->have_posts()) { $query->the_post(); ?>
            <?php  if(get_post_type( get_the_ID() ) == 'mw_class') : ?>
                <?php get_template_part( 'templates-parts/content/content', 'mw_class' );  ?>
            <?php endif; ?>
            <?php  if(get_post_type( get_the_ID() ) == 'mw_event') : ?>
                <?php get_template_part( 'templates-parts/content/content', 'mw_event' );  ?>
            <?php endif; ?>
        <?php } ?>
    </div>
  
    <?php
}
else
{
	echo "<h1 class='text-center' style='margin-top:20px'>Nic nie znaleziono</h1> ";
}
?>