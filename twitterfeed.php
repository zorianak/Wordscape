<?php // Get RSS Feed(s)
include_once(ABSPATH.WPINC.'/feed.php');

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed('http://twitter.com/statuses/user_timeline/2893631.rss');

// Figure out how many total items there are, but limit it to 5. 
$maxitems = $rss->get_item_quantity(3); 

// Build an array of all the items, starting with element 0 (first element).
$rss_items = $rss->get_items(0, $maxitems); 
?>

<ul>
    <?php if ($maxitems == 0) echo '<li>No items.</li>';
    else
    // Loop through each feed item and display each item as a hyperlink.
    foreach ( $rss_items as $item ) : ?>
    <li>
        <a href='<?php echo $item->get_permalink(); ?>'
        title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
        <?php echo $item->get_title(); ?></a>
    </li>
    <?php endforeach; ?>
</ul>