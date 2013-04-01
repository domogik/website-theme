<!-- Simply paste the following code anywhere in your theme files, where you want the tweets to be displayed.
Don't forget to update the code with your username on line 3. Max items to display can be defined on line 4. -->

<?php
include_once(ABSPATH . WPINC . '/feed.php');
$rss = fetch_feed('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=domogik');
$maxitems = $rss->get_item_quantity(5);
$rss_items = $rss->get_items(0, $maxitems);
?>

<ul>
    <?php 
    if ($maxitems == 0) {
        echo("<li>".__("No tweet.")."</li>");
    }
    else
    // Loop through each feed item and display each item as a hyperlink.
    foreach ($rss_items as $item) :
    ?>
        <li>
            <a href='<?php echo $item->get_permalink(); ?>'>
            <?php echo $item->get_title(); ?>
            </a>
        </li>
    <?php

    endforeach; 
    ?>
</ul>

