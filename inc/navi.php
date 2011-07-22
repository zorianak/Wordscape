<div id="menu">
<ul>
<li class="<?php if ( is_home() or is_archive() or is_paged() or is_search() or (function_exists('is_tag') and is_tag()) ) { ?>current_page_item<?php } else { ?>page_item<?php } ?>">
<a title="Get back to the frontpage" href="<?php echo get_settings('home'); ?>">
Home</a></li>
<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>
</ul>
</div>	