<?php
 /* Template Name: Wizytówka
 * Template Post Type: mw_room
 * 
 * */ 
get_header(); 


$logo = get_field('logo');
$contact = get_field('dane_kontaktowe');
$socialmedia = get_field('kanaly_spolecznosciowe');
$address = get_field('adres');

while ( have_posts() ) : the_post(); ?>
<article class="post-single-two post-single-two--wizytowka hentry">
<div class="post-single-two__wrap">
    <div class="sidebar">
        <div class="siderbar_wrap">
        <div class="img">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php the_post_thumbnail('meddium'); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail-person.png">
            <?php endif; ?>
            <?php if($logo) : ?>
                <div class="logo">
                <?php echo wp_get_attachment_image( $logo, 'full' );?>
                </div>
            <?php endif; ?>
        </div>
        <?php if($contact) : ?>
        <div class="info info-contact">
            <?php if($contact['tytu']) : ?>
            <h4><?php echo $contact['tytu']; ?></h4>
            <?php endif; ?>
            <ul>
                <?php if($contact['nr_telefonu']) : ?>
                    <li>
                        <a href="tel:<?php echo $contact['nr_telefonu']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 22 22">
                        <g id="Grupo_135" data-name="Grupo 135" transform="translate(2568.152 -339.407)">
                            <path id="Trazado_725" data-name="Trazado 725" d="M-2552.6,396.231a2.779,2.779,0,0,0,2.008-.68c.681-.645,1.334-1.319,1.973-2.007a1.385,1.385,0,0,0,.335-1.28,1.914,1.914,0,0,0-.574-.94q-1.217-1.215-2.434-2.43a3.622,3.622,0,0,0-.32-.286,1.492,1.492,0,0,0-1.158-.341,1.826,1.826,0,0,0-1.046.587q-.762.758-1.517,1.523c-.137.138-.279.223-.475.116-.4-.219-.819-.414-1.206-.656a14.974,14.974,0,0,1-3.025-2.562,12.25,12.25,0,0,1-2.317-3.26c-.153-.342-.15-.4.11-.66.487-.486.976-.969,1.461-1.457a1.858,1.858,0,0,0,.595-1.044,1.666,1.666,0,0,0-.591-1.452c-.828-.834-1.654-1.67-2.5-2.49a2.278,2.278,0,0,0-.684-.467,1.493,1.493,0,0,0-1.716.432c-.58.565-1.15,1.14-1.721,1.714a2.347,2.347,0,0,0-.616,1.067,4.908,4.908,0,0,0,.026,2.382,15.065,15.065,0,0,0,1.977,4.617,22.05,22.05,0,0,0,10.071,8.788A8.966,8.966,0,0,0-2552.6,396.231Zm-4.646-15.944a5.962,5.962,0,0,1,4.985,4.835l1.656-.286a7.5,7.5,0,0,0-6.41-6.192Z" transform="translate(0 -34.824)" fill="#ad8641"></path>
                            <path id="Trazado_726" data-name="Trazado 726" d="M-2373.327,339.407c.488.112.98.209,1.463.34a12.171,12.171,0,0,1,5.75,3.466,12.408,12.408,0,0,1,3,5.406c.082.306.149.616.223.925v.085l-1.635.294a10.944,10.944,0,0,0-9.145-8.871l.217-1.645Z" transform="translate(-183.26)" fill="#ad8641"></path>
                            <path id="Trazado_728" data-name="Trazado 728" d="M-2377.72,418.437l.229-1.628a7.431,7.431,0,0,1,6.349,6.132l-1.64.283A5.9,5.9,0,0,0-2377.72,418.437Z" transform="translate(-179.497 -72.957)" fill="#ad8641"></path>
                        </g>
                        </svg>
                        <span><?php echo $contact['nr_telefonu']; ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($contact['adres_email']) : ?>
                    <li>
                        <a href="mailto:<?php echo $contact['adres_email']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 23.697 16.292">
                        <g id="Grupo_136" data-name="Grupo 136" transform="translate(1683.2 127.202)">
                            <path id="Trazado_729" data-name="Trazado 729" d="M-1683.2-75.2l7.977,5.25c-.069.05-.12.09-.174.125q-3.809,2.41-7.619,4.817a1.411,1.411,0,0,1-.183.083Z" transform="translate(0 -48.994)" fill="#ad8641"></path>
                            <path id="Trazado_730" data-name="Trazado 730" d="M-1403.584-64.925a1.4,1.4,0,0,1-.183-.083q-3.811-2.407-7.619-4.817c-.051-.033-.1-.068-.179-.122l7.982-5.253Z" transform="translate(-255.919 -48.994)" fill="#ad8641"></path>
                            <path id="Trazado_731" data-name="Trazado 731" d="M-1670.18-127.2h10.249a1.483,1.483,0,0,1,1.488.991.291.291,0,0,1-.137.409q-3.859,2.526-7.705,5.07c-1.242.818-2.486,1.634-3.724,2.458a.262.262,0,0,1-.344,0q-5.73-3.783-11.467-7.554a.239.239,0,0,1-.117-.318,1.472,1.472,0,0,1,1.279-1.047c.107-.009.216-.007.323-.007Z" transform="translate(-1.17 0)" fill="#ad8641"></path>
                            <path id="Trazado_732" data-name="Trazado 732" d="M-1682.42,37.666c.078-.052.14-.1.2-.136q4.445-2.813,8.889-5.628a.308.308,0,0,1,.4,0c.591.406,1.2.789,1.791,1.19a.839.839,0,0,0,1.029,0c.607-.409,1.223-.806,1.831-1.213a.238.238,0,0,1,.305-.012q4.51,2.861,9.026,5.714c.038.024.074.054.107.078a1.434,1.434,0,0,1-1.37,1.247c-.062,0-.123,0-.185,0h-20.457a1.458,1.458,0,0,1-1.48-.932C-1682.362,37.883-1682.384,37.785-1682.42,37.666Z" transform="translate(-0.735 -149.817)" fill="#ad8641"></path>
                        </g>
                        </svg>
                        <span><?php echo $contact['adres_email']; ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
           
        </div>
        <?php endif; ?>
        <?php if($socialmedia) : ?>
        <div class="info info--socialmedia">
            <?php if($socialmedia['tytul']) : ?>
            <h4><?php echo $socialmedia['tytul']; ?></h4>
            <?php endif; ?>
            <ul>
                <?php if($socialmedia ['twitter']) : ?>
                    <li>
                        <a href="<?php echo $socialmedia ['twitter']; ?>" target="_blank" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.759" height="31.767" viewBox="0 0 31.759 31.767">
                            <g  data-name="Grupo 127" transform="translate(-114.553 -4434.678)">
                                <path id="Op_component_3" data-name="Op component 3" d="M129.472,4435.178h1.922a1.606,1.606,0,0,0,.231.049,14.624,14.624,0,0,1,6.5,2.018,15.183,15.183,0,0,1,7.452,10.663c.1.558.158,1.126.236,1.689v1.922c-.045.366-.083.733-.135,1.1a15.4,15.4,0,0,1-18.418,12.976,14.725,14.725,0,0,1-9.054-5.728,15,15,0,0,1-3.007-11.386,14.8,14.8,0,0,1,3.705-8.088,15.073,15.073,0,0,1,8.909-4.981C128.363,4435.314,128.919,4435.254,129.472,4435.178Zm9.8,24.4-7.154-10.414,6.582-7.654c-.462,0-.84.015-1.217-.005a.628.628,0,0,0-.563.253c-1.03,1.213-2.071,2.417-3.109,3.624l-2.384,2.771c-.08-.114-.149-.209-.216-.307q-2.091-3.042-4.178-6.088a.491.491,0,0,0-.459-.252c-1.552.01-3.1,0-4.655.006-.086,0-.172.01-.313.019l6.889,10.029-6.9,8.019c.472,0,.871-.012,1.267,0a.549.549,0,0,0,.485-.222q2.813-3.283,5.637-6.558c.062-.072.127-.142.2-.228l.226.327q2.21,3.215,4.415,6.434a.485.485,0,0,0,.459.247c1.541-.01,3.083-.005,4.625-.005Z" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                                <path id="Op_component_4" data-name="Op component 4" d="M137.136,4458.468c-.67,0-1.278-.025-1.882.01a.809.809,0,0,1-.8-.413q-5.254-7.548-10.531-15.081c-.056-.081-.109-.163-.2-.3a11.051,11.051,0,0,0,1.433-.012,1.437,1.437,0,0,1,1.514.782c3.394,4.913,6.827,9.8,10.248,14.693C136.98,4458.237,137.039,4458.326,137.136,4458.468Z" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                            </g>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($socialmedia ['facebook']) : ?>
                    <li>
                        <a href="<?php echo $socialmedia ['facebook']; ?>" target="_blank" aria-label="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.794" height="30.808" viewBox="0 0 30.794 30.808">
                        <path id="Op_component_8" data-name="Op component 8" d="M167.333,4465.963h-1.925a1.508,1.508,0,0,0-.229-.051,14.871,14.871,0,0,1-4.01-.856,15.393,15.393,0,1,1,12.917-27.806,14.979,14.979,0,0,1,7.45,10.687c.1.55.156,1.108.232,1.663v1.865c-.017.1-.038.192-.051.29-.083.6-.137,1.215-.252,1.813a15.377,15.377,0,0,1-12.443,12.16C168.462,4465.822,167.9,4465.885,167.333,4465.963Zm.066-17.319c0-.742-.024-1.443.007-2.142a.966.966,0,0,1,.973-.99c.438-.039.88-.026,1.321-.039.347-.01.486-.133.492-.468q.015-.842,0-1.684a.409.409,0,0,0-.47-.459c-.641,0-1.283-.016-1.924.009a3.12,3.12,0,0,0-3.126,2.637,12.952,12.952,0,0,0-.118,1.944c-.015.388,0,.777,0,1.2-.543,0-1.051,0-1.56,0-.387,0-.525.142-.528.526,0,.6,0,1.2,0,1.8,0,.515.1.619.609.62.488,0,.976,0,1.488,0,0,.149,0,.257,0,.366q0,2.917-.009,5.834c0,.4.06.457.45.458q.947,0,1.894,0c.421,0,.49-.068.49-.485q0-2.9,0-5.8v-.33a.569.569,0,0,1,.1-.032l1.924-.006c.482,0,.577-.092.628-.562.063-.578.13-1.155.206-1.73.066-.506-.064-.667-.569-.668C168.93,4448.643,168.18,4448.644,167.4,4448.644Z" transform="translate(-150.975 -4435.155)" fill="#d54d27"/>
                        </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($socialmedia ['instagram']) : ?>
                    <li>
                        <a href="<?php echo $socialmedia ['instagram']; ?>" target="_blank" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.796" height="31.867" viewBox="0 0 31.796 31.867">
                            <g id="Grupo_128" data-name="Grupo 128" transform="translate(-186.405 -4434.658)">
                                <path id="Op_component_5" data-name="Op component 5" d="M201.4,4435.158h1.864a1.75,1.75,0,0,0,.232.049,14.656,14.656,0,0,1,6.479,2.006,15.2,15.2,0,0,1,7.487,10.689c.105.559.159,1.127.236,1.691v1.864c-.017.1-.036.193-.051.29-.125.8-.195,1.614-.383,2.4a15.391,15.391,0,1,1-18-18.681C199.972,4435.329,200.69,4435.259,201.4,4435.158Zm.919,7.7c-1.012,0-2.024,0-3.037,0a4.584,4.584,0,0,0-4.678,4.682q0,3.022,0,6.044a4.585,4.585,0,0,0,4.66,4.67q3.037.006,6.074,0a4.582,4.582,0,0,0,4.662-4.667q.006-3.036,0-6.074a4.584,4.584,0,0,0-4.645-4.655C204.346,4442.854,203.334,4442.857,202.321,4442.857Z" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                                <path id="Op_component_6" data-name="Op component 6" d="M202.311,4456.7c-1.042,0-2.085.012-3.127,0a3.007,3.007,0,0,1-2.985-2.538,3.112,3.112,0,0,1-.038-.539c0-2.044-.01-4.089,0-6.133a3,3,0,0,1,2.547-3.038,3.343,3.343,0,0,1,.568-.036q3.021,0,6.043,0a3.008,3.008,0,0,1,3.128,3.123q.012,3.022,0,6.043a3.01,3.01,0,0,1-3.131,3.121c-1,.006-2,0-3.007,0Zm-.007-2.168a3.977,3.977,0,1,0-3.977-4A3.97,3.97,0,0,0,202.3,4454.533Zm4.014-6.98a.981.981,0,0,0,.975-.974.986.986,0,1,0-.975.974Z" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                                <path id="Op_component_7" data-name="Op component 7" d="M204.732,4450.553a2.427,2.427,0,1,1-2.422-2.424A2.415,2.415,0,0,1,204.732,4450.553Z" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                            </g>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($socialmedia ['youtube']) : ?>
                    <li>
                        <a href="<?php echo $socialmedia ['youtube']; ?>" target="_blank" aria-label="YouTuBe">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.818" height="31.838" viewBox="0 0 31.818 31.838">
                        <path id="Op_component_1" data-name="Op component 1" d="M222.851,4451.524V4449.6c.018-.087.04-.174.053-.262.1-.692.163-1.395.313-2.077a15.395,15.395,0,1,1,17.686,18.463c-.561.1-1.126.159-1.69.236h-1.925a1.165,1.165,0,0,0-.2-.049,13.694,13.694,0,0,1-3.81-.787,15.184,15.184,0,0,1-10.186-11.881C222.979,4452.677,222.931,4452.1,222.851,4451.524Zm15.432-6.752c-1.644,0-3.287-.005-4.931,0a3.065,3.065,0,0,0-3.21,3.216q0,2.571,0,5.141a3.065,3.065,0,0,0,3.207,3.219q4.9.01,9.8,0a3.062,3.062,0,0,0,3.21-3.216q.005-2.571,0-5.141a3.805,3.805,0,0,0-.077-.805,3.04,3.04,0,0,0-3.1-2.413C241.55,4444.765,239.917,4444.771,238.283,4444.771Z" transform="translate(-222.351 -4434.622)" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                        <path id="Op_component_2" data-name="Op component 2" d="M236.144,4448.092l4.244,2.475-4.244,2.464Z" transform="translate(-222.643 -4434.622)" fill="#d54d27" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                        </svg>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="info info-address">
           <?php if($address) : ?>
            
            <ul>
                <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 17.761 23.699">
                    <path  data-name="Shape 697" d="M1130.754,6133.7a41.443,41.443,0,0,1-3.794-4.2,29.708,29.708,0,0,1-3.584-5.538,13.067,13.067,0,0,1-1.282-3.96,8.49,8.49,0,0,1,1.226-5.736,8.689,8.689,0,0,1,6.215-4.155,8.9,8.9,0,0,1,9.662,11.953,22.531,22.531,0,0,1-2.92,5.49,43.058,43.058,0,0,1-5.012,5.925c-.075.075-.155.145-.232.217Zm.138-18.879a4.071,4.071,0,1,0,4.072,4.076A4.074,4.074,0,0,0,1130.892,6114.818Z" transform="translate(-1122.011 -6109.999)" fill="#ad8641"></path>
                </svg>
                    <?php echo $address ? '<span>' . $address . '</span>' : false; ?>
                </li>
            </ul>
           <?php endif; ?>
        </div>
        </div>
    </div>
    
    <div class="content">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <div class="entry-content">
             <?php the_content(); ?>
        
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

<?php endwhile;
get_footer();
