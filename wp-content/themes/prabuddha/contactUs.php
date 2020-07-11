<?php
/*
 * Template Name: Contact Us Page
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();

function prabudha_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'prabudha_excerpt_length');
?>
<div class="content">
    <div class="content_top">
        <div class="content_top_banner">

                        <!-------------------------------BANNER----------------->



            <div id="wrapper">


                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider1">
        
                      <?php /*?>  <?php
                        query_posts("showposts=10&cat=6");
                        if (have_posts())
                            while (have_posts()) : the_post();
                                ?>

                                <?php $bannerSrc = get_post_meta($post->ID, 'Home_Page_Banner', $single); ?>

                                <img src="<?php echo $bannerSrc; ?>" data-thumb="<?php echo $bannerSrc; ?>" width="1024px" height="380px" title="#htmlcaption<?php echo $post->ID; ?>" alt="" data-transition="slideInLeft" />  
                            <?php endwhile;  // end of the loop.   ?><?php */?>
   	 <img src="<?php bloginfo('template_url') ?>/images/contactus_bnr.jpg"  width="1024px" height="300px"  alt=""  />  

                    </div>

                     <?php /*?> <?php
                        query_posts("showposts=10&cat=6");
                        if (have_posts())
                            while (have_posts()) : the_post();
                                ?>

                        <div id="htmlcaption<?php echo $post->ID; ?>" class="nivo-html-caption" style=" width: 50%; float: right;">
                            <h2 style="text-align:right;float:right; width:100%;padding:0px; margin:0px;">
                                    <?php echo $slogan = get_post_meta($post->ID, 'Banner_Slogan', $single); ?>
                            </h2>
                            <p style="text-align:right;float:right; width:100%;padding:0px; margin:0px;">
                                <?php echo $text = get_post_meta($post->ID, 'Banner_Text', $single); ?>
                            </p>
                             <?php 
                              $learnMore = get_post_meta($post->ID, 'Learn_More_Link_Banner', $single); 
                              if($learnMore=="yes") {?>
                            <a style="color:#F7941E !important;" href="<?php the_permalink(); ?>" >Learn More</a>
                            <?php } ?>
                        </div>
                     <?php endwhile;  // end of the loop.   ?><?php */?>
                </div>


            </div>


            <!----------------------------END  BANNER------------------->


            <div class="content_top_banner_txt">
                <div class="content_top_banner_txt_l">
                    
                          <div class="website_news">
                         <?php // dynamic_sidebar( 'getengaged-widget-area' ); ?>
                              
                        <?php
                        query_posts("post_type=page&page_id=396");
                        if (have_posts())
                            while (have_posts()) : the_post();
                                ?>
                            <?php the_content(); ?>
                            <?php endwhile; // end of the loop.   ?>
                              
                              

                    </div>
                    
                    <div class="website_news" style="margin-top:10px;">
                         <?php dynamic_sidebar( 'getengaged-widget-area' ); ?>

                    </div>

                </div>
                <div class="content_top_banner_txt_m">
                    <img src="<?php bloginfo('template_url'); ?>/images/con_mid.jpg" alt="img" /></div>
                <div class="content_top_banner_txt_r">
                    <div class="content_top_banner_txt_r_top">

                        <?php
                        query_posts("post_type=page&page_id=20");
                        if (have_posts())
                            while (have_posts()) : the_post();
                                ?>

                                <article>
                                    <?php the_content(); ?>

                                </article>

                            <?php endwhile; // end of the loop.   ?>

                    </div>
                    <div class="content_top_banner_txt_r_btn">

                    </div>
                </div>
            </div>	
        </div>

    </div>
    <div class="content_bottom">
           <?php dynamic_sidebar( 'contac-widget-area' ); ?>
    </div>

<?php get_footer(); ?>