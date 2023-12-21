<?php
$displayPartners = get_field('partnerzy');

$title = get_field('tytul-part', 'options');
$logos = get_field('logotypy', 'options');
?>
<?php if($displayPartners === NULL || $displayPartners == true) : ?>
<div class="f-partners">
    <div class="container-narrow">
        <div class="wrap">
            <div class="col">
                <?php if($title ) : ?>
                    <h3><?php echo $title; ?></h3>
                <?php endif; ?>
            </div>
            <div class="col">
               <div class="swiper partnerz">
                    <div class="swiper-wrapper">
                        <?php foreach($logos as $img) {?>
                        <div class="swiper-slide">
                            <div class="b-partnerzy__item">
                                <?php echo $img['link'] ? '<a href=" ' . $img['link'] . ' " aria-label="logo">' : false; ?>
                                <?php echo wp_get_attachment_image( $img['logo'], 'full'); ?>
                                <?php echo $img['link'] ? '</a>' : false; ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>