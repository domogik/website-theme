<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php __("Search", $MY_TEXTDOMAIN); ?>" />
    </div>
</form>
