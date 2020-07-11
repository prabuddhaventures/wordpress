<?php
/*
 * Template Name: Home Page
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
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider1" class="nivoSlider1">
       <?php 
	if (function_exists('get_thethe_image_slider')) {
		print get_thethe_image_slider('HomeBanner');
	}
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_top_banner_txt">  
<div class="home_content"> 
  <?php query_posts("showposts=5&post_type=page&page_id=7");
                        if (have_posts())
                            while (have_posts()) : the_post();
                                ?>
                            <article>
        <?php the_content(); ?>
                            </article>
    <?php endwhile; // end of the loop.  ?>  
               <div class="content_top_banner_txt_r_btn">
                    <div class="cleck_demo">
                        <div>
                            <a href="?page_id=14"><input type="button"  class="cleck_demo_btn" title="Prabuddha Solar Products" value="Prabuddha Solar Products" > </a></div>
                        <div class="cleck_demo_shadow"><img src="<?php bloginfo('template_url'); ?>/images/demo_shadow.png" alt="img" /></div>
                    </div>
                    <div class="need_demo">
                        <div>
        <a href="?page_id=10"><input type="button"  class="need_demo_btn" title="Prabuddha Solar Services" value="Prabuddha Solar Services" /></a>
<div class="cleck_demo_shadow"><img src="<?php bloginfo('template_url'); ?>/images/demo_shadow.png" alt="img" /></div>
                        </div>
                       
                    </div>
                </div>

</div>        
        </div>

    </div>
 <!---   <div class="content_bottom">
<?php
query_posts('posts_per_page=3&cat=8');
if (have_posts())
    while (have_posts()) : the_post();
        ?>                	
                <div class="content_bottom_l" <?php if($post->ID==178){ ?> style="margin-left:30px;" <?php } ?>> 
                    <div class="content_bottom_l_left">
                        <?php $imgSrc = get_post_meta($post->ID, 'Footer_Product_Image', $single); ?>
                        <img src="<?php echo $imgSrc; ?>" <?php if($post->ID==178){ ?>style="margin-left:50px;" <?php } ?> width="75" height="75"  alt="img"/></div>
                    <div class="content_bottom_l_right" <?php if($post->ID==178){ ?> style="width:150px;" <?php } ?>>
                        <h3 >
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h3>
        
                    </div>
                </div> 
        <?php endwhile; // end of the loop.  ?>    

    </div>  ----!>
    
  <div class="content_bottom">
                	
                <div class="content_bottom_l" > 
                    <div class="content_bottom_l_left">
                                                <img src="wp-content/uploads/2012/12/home1.png"  width="75" height="75"  alt="img"/></div>
                    <div class="content_bottom_l_right" >
                        <h3 >
                            <a href="?page_id=12#COMMERCIAL"> <span style="color:#808080;">Commercial and </span> <span style="color:#f7941e;">Industrial</span> </a>
                        </h3>
        
                    </div>
                </div> 
                        	
                <div class="content_bottom_l"  style="margin-left:30px;" > 
                    <div class="content_bottom_l_left">
                                                <img src="wp-content/uploads/2012/12/tel1.png" style="margin-left:50px;"  width="75" height="75"  alt="img"/></div>
                    <div class="content_bottom_l_right"  style="width:150px;" >
                        <h3 >
                            <a href="?page_id=12#TELECOM"> <span style="color:#808080;">Telecom</span> </a>
                        </h3>
        
                    </div>
                </div> 
                        	
                <div class="content_bottom_l" > 
                    <div class="content_bottom_l_left">
                                                <img src="wp-content/uploads/2012/12/soler1.png"  width="75" height="75"  alt="img"/></div>
                    <div class="content_bottom_l_right" >
                        <h3 >
                            <a href="?page_id=12#RURAL_OFF"> <span style="color:#808080;">Rural / Domestic </span> <span style="color:#f7941e;">Community</span> </a>
                        </h3>
        
                    </div>
                </div> 
            

    </div>
  
    
<?php get_footer(); ?>