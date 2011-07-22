<?php get_header(); ?>
	<div id="content">
    

    
<div class="pagecontent">
    
  <div id="bd" class="yui-navset">
	    
    <div id="yui-main">
		<div class="yui-b" >
			<div class="yui-g">
            
            <div class="blognavigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            <div style="clear:left;"></div>
            <div class="clear"></div></div>
		

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<!-- item -->
				<div class="item entry" id="post-<?php the_ID(); ?>">
				          <div class="itemhead">
				            <h3><?php the_title(); ?></h3>
				            
				          </div>
						  <div class="storycontent">
								<?php the_content('Read more &raquo;'); ?>
						  </div>
                          
				 </div>
<!-- end item -->



		<?php endwhile; ?>

		<div class="blognavigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
			<div style="clear: left;">
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?></div>
    
    </div>
    		</div>
	</div></div></div>
    
   


<!-- end sidebar -->
    
    <div class="clear"></div>
    </div>
    

    <!--closes content-->
    
    <div class="bottom"><img src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/images/spacer.gif" alt="Top of the Web Designer site" /></div><!--adds the top drop shadow to the web design-->
    
    
    

<div class="clear"></div>
</div><!-- closes holder-->



   <div style="clear:both;"></div></div>
<?php get_footer();?>

