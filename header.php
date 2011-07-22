<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/style.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/jquery.lightboxclone-0.6.js/jquery.lightboxclone-0.6.js"></script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/js/jquery.dimensions.min.js"></script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/js/jquery.ahover.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/jquery.lightboxclone-0.6.js/jquery.lightboxclone-0.6.css" media="screen" />



<script type="text/javascript"> 
        $(function() {
            $('a[rel*=lightbox]').lightBoxClone({fixedNavigation:true});
        });
		
		
		
		
        </script>

</head>

<body>

    <div class="holder">
	<div id="nav"><a href="<?php echo get_option('home'); ?>" title="Freelance Designer home"><img src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/images/logo.png" alt="Sacramento Web Designer" /></a>
    
    <ul>
<?php wp_list_pages('title_li='); ?>
</ul>
    
    <div class="clear"></div>
    </div> <!-- header-->
    

    <div class="top"><img src="<?php echo get_option('home'); ?>/wp-content/themes/wordscape/images/spacer.gif" alt="Top of the Web Designer site" /></div><!--adds the top drop shadow to the web design-->