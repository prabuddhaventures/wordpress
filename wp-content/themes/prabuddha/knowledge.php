	<?php
	/*
	 * Template Name: Knowledge Center Page
	 * To change this template, choose Tools | Templates
	 * and open the template in the editor.
	 */
	
	
	
	get_header();
	?>
	
	
	<div class="aboutbody">
	<div class="aboutbody_box" style="">
	<div style="width:500px; float:left; height:400px;">
	
	<div id="attachments">
	    <?php
	   // $attachments = attachments_get_attachments();
	   // $total_attachments = count( $attachments );
	    if( $total_attachments > 0 ) : 
		?>
	        <ol>
	            <?php for( $i=0; $i < $total_attachments; $i++ ) : ?>
	                <li>
	                    <h3><?php echo $attachments[ $i ]['title']; ?></h3>
	                           
	                <a href="<?php echo $attachments[ $i ]['location']; ?>"  title="<?php echo $attachments[ $i ]['title']; ?>"  target="_blank">Downloads</a>
	                </li>
	            <?php endfor; ?>
	        </ol>
	    <?php endif; ?>
	
	<?php
	  	query_posts("showposts=50&cat=1");
		if (have_posts())
		while (have_posts()) : the_post();
	  ?>
	<?php the_title(); ?>
	                      
	<?php
	//		$args = array( 'post_type' => 'attachment', 'post_status' => publish, 'post_parent' => null, );
		//	$attachments = get_posts( $args );
			 $attachments = attachments_get_attachments();
			 $total_attachments = count( $attachments );
			 if( $total_attachments > 0 ) : 
			 ?> 
			 <ul>
		<?php for( $i=0; $i < $total_attachments; $i++ ) : 
			 ?>
			 <li>
	                    <h3><?php echo $attachments[ $i ]['title']; ?></h3>
	                           
	                <a href="<?php echo $attachments[ $i ]['location']; ?>"  title="<?php echo $attachments[ $i ]['title']; ?>"  target="_blank">Downloads</a>
	                </li>
			 <?php endfor; ?> 
			</ul> 
			 
			<?php endif; ?> 
	      <?php endwhile;  // end of the loop.   ?>
	<?php wp_reset_query(); ?>
	
	</div>
	
	</div>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
			<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>        
	</div>
	</div>
	
	<?php // comments_template( '', true ); ?>
	
	
	
	<?php get_footer(); ?>
	
	
