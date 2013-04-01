<?php global $MY_TEXTDOMAIN; ?>
<div class="col" id='sidebar'>
    <h2><?php echo(__("Categories", $MY_TEXTDOMAIN)); ?></h2>
    <ul>
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
    <h2><?php echo(__("Archives", $MY_TEXTDOMAIN)); ?></h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <hr/>
    <?php wp_register(); ?>
    <?php wp_loginout(); ?>
    <?php wp_meta(); ?> <!-- Allow adding callbacks after the sidebar. -->
</div>
