<?php $_postcounter = 0; ?>
<?php query_posts('showposts=2'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <!-- If the post is in the category we want to exclude, we simply pass to the next post. -->
 
 <?php if ($_postcounter > 2) continue; ?>
 
                                <ul class="blogpostsfront">
                                
                                <li> <?php
	if ( has_post_thumbnail() )
		the_post_thumbnail( 'thumbnail' );
	else
		
?>
                                
                                <h3><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,850); ?></a></h3><br />
                                <?php echo substr(get_the_excerpt(),0,115) ?>... (<a href="<?php the_permalink(); ?>">read more</a>)
                                </li>
                                </ul>
                                



 <?php endwhile; else: ?>

 <?php endif; ?>
 
				
                           
                            

<?php wp_reset_query(); ?>
