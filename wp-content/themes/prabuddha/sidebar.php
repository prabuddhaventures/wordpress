<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php if($post->ID==65){ ?>
<div class="website_news"><h2><?php echo get_cat_name(4); ?></h2>
    <ul>
        <?php
        query_posts('posts_per_page=5&cat=4');
        if (have_posts())
            while (have_posts()) : the_post();
                ?>                	

                <li><span class="website_news_li_black"> 
        <?php the_time('d/m/y'); ?> </span>
                    <span class="website_news_li_wigth"> 
                        <a href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a></span>
                </li> 

    <?php endwhile; // end of the loop.  ?>                   			
    </ul>
</div>  
<?php } ?>

