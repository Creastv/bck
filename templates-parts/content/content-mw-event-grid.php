
<?php
$cat = get_the_terms( get_the_ID() , 'class_cat' );
$ticket = get_field('kup_bilet', get_the_ID());
$link = get_field('link', get_the_ID());
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$sub = get_field('zapisz_sie', get_the_ID());
$form = get_field('formularz', get_the_ID());
$rowDate = get_field('data', get_the_ID());
$date = date("d/m/Y", strtotime($rowDate));
$time = get_field('godzina', get_the_ID());

$now = date("d/m/Y");
$open = false;

if($date >= $now){
    $open = true;
} 
?>

<article class="card-event card-event--grid <?php echo get_the_ID(); ?>">
    <div class="img" >
        <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
            <?php the_post_thumbnail('post-futured' , array( 'alt' => get_the_title(), 'title' => get_the_title() )); ?>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?>">
        <?php endif; ?>
        <div class="extras">
            <div class="cat">
            <?php  if ( $cat != null ){
                foreach( $cat as $term ) { ?>
               <span class="class_color" <?php echo get_field('kolor', $term ) ? 'style="background-color: ' . get_field('kolor', $term ) . ' " ' : false; ?> > <?php echo $term->name;?></span>
              <?php  } 
            } ?>
            </div>
            <div class="content">
                <div class="start">
                    <?php  if ( ($date != null) || ($time != null)  ){ ?>
                    <div class="date">
                        <div class="date__wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.011" height="30.972" viewBox="0 0 31.011 30.972">
                        <path data-name="Kształt 10" d="M23.057,30.972a20.2,20.2,0,0,1-2.069-.524,7.27,7.27,0,0,1-4.547-7.92,7.011,7.011,0,0,1,4.969-5.813,6.913,6.913,0,0,1,7.554,1.929,6.861,6.861,0,0,1,1.691,7.107,7.07,7.07,0,0,1-5.766,5.106c-.207.042-.414.077-.621.115Zm.592-12.219a4.907,4.907,0,1,0,.015,0ZM4.3,30.972a.6.6,0,0,0-.135-.054A4.7,4.7,0,0,1,.477,28.185,10.941,10.941,0,0,1,0,26.677V6.715A10.116,10.116,0,0,1,.506,5.148,4.7,4.7,0,0,1,4.7,2.428c.54-.03,1.084,0,1.658,0,0-.39,0-.749,0-1.11a1.213,1.213,0,1,1,2.42-.01c0,.361,0,.721,0,1.1h5.449c0-.4-.013-.811,0-1.219a1.206,1.206,0,0,1,2.412.008c.012.392,0,.785,0,1.2h5.512c0-.4-.015-.812,0-1.22A1.2,1.2,0,0,1,24,.19,1.167,1.167,0,0,1,24.567,1.2c.01.391,0,.784,0,1.218.355,0,.695.006,1.033,0a5.946,5.946,0,0,1,2.232.307,4.8,4.8,0,0,1,3.139,4.343c.036,2.359.016,4.718.009,7.077a1.207,1.207,0,1,1-2.414-.029c-.006-2.237,0-4.475,0-6.713A2.38,2.38,0,0,0,27.2,5.1a2.422,2.422,0,0,0-.9-.237c-.56-.038-1.125-.012-1.729-.012,0,.366,0,.724,0,1.083a1.214,1.214,0,1,1-2.419,0c0-.352,0-.7,0-1.076H16.643v.992c0,.851-.473,1.4-1.2,1.406a1.234,1.234,0,0,1-1.218-1.391c0-.331,0-.661,0-1.009H8.773c0,.4.013.808,0,1.215a1.207,1.207,0,0,1-2.414-.034c-.009-.39,0-.781,0-1.231a15.509,15.509,0,0,0-2.072.119,2.352,2.352,0,0,0-1.859,2.28c0,.08,0,.161,0,.242q0,9.255,0,18.51a2.361,2.361,0,0,0,1.372,2.327,3.026,3.026,0,0,0,1.225.255c2.975.021,5.951.013,8.925.008a1.34,1.34,0,0,1,1.021.369,1.2,1.2,0,0,1-.348,1.933c-.09.043-.182.08-.273.121Zm19.285-6.121a1.16,1.16,0,0,1-1.12-1.135q-.034-1.3,0-2.6a1.2,1.2,0,0,1,2.4,0c.02.43,0,.862,0,1.331.239,0,.431-.011.621,0a1.207,1.207,0,0,1,1.136,1.221,1.191,1.191,0,0,1-1.142,1.183q-.475.017-.951.018T23.582,24.852Zm-16.05-.415a1.207,1.207,0,1,1,.033,0Zm4.09-1.214a1.208,1.208,0,1,1,1.209,1.214A1.213,1.213,0,0,1,11.622,23.222Zm0-5.257a1.208,1.208,0,1,1,1.214,1.208H12.83A1.214,1.214,0,0,1,11.622,17.965ZM7.562,19.173a1.208,1.208,0,1,1,1.212-1.211,1.213,1.213,0,0,1-1.212,1.211Zm10.519-5.262a1.216,1.216,0,1,1,.013,0Zm-10.527,0a1.214,1.214,0,1,1,.01,0ZM11.622,12.7a1.208,1.208,0,1,1,1.216,1.207H12.83A1.214,1.214,0,0,1,11.622,12.7ZM22.152,12.7a1.208,1.208,0,1,1,1.21,1.214A1.214,1.214,0,0,1,22.152,12.7Z" fill="#d54d27"/>
                        </svg>
                        <div class="inf">
                        <?php echo $date ? '<span>' . $date . '</span>' : false; ?>
                        
                        <?php echo $time ? '<span>' . $time . '</span>' : false; ?>
                        </div>
                        </div>
                    </div>
                    <?php } ?>
                    <h2>  <a href="<?php the_permalink(); ?>" ><?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?></a> </h2>
                </div>
                <div class="end">
                <a class="readmore" href="<?php the_permalink(); ?>" >Czytaj więcej</a>
                <?php  if ( $open && $ticket != null  ){ ?>
                <div class="buy">
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
                <?php } ?>

                <?php  if ($open && $sub  != null && $form  ){ ?>
                <div class="info__item info__item--buy ">
                    <a href="<?php the_permalink(); ?>#zapisy" class="btn">Zapisz się</a>
                </div>
                <?php } ?>
                </div>

            </div>
        </div>
    </div>
</article>
