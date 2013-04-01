<div class="col" id='sidebar'>
    <h2>Categories</h2>
    <ul>
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
    <!-- <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>insertion des autres pages du blog -->
    <h2>Archives</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
