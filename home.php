<?php include('header_home.php'); ?>
<div id="subbanner"></div>
<div class='wrapper'>
    <main id='content_home' role='main'>    
        <section id='first'>
            <div class="col" id="multitechno">
                <!--a href="/?page_id=228"-->
                    <h2><?php echo __('Multi-technology', $MY_TEXTDOMAIN); ?></h2>
                    <p class="description"><?php echo __('Domogik evolves with the latest technologies (Teleinfo, x10, plcbus, mirror, ipx800, Onewire...). Other technologies are coming soon (zwave, rfxcom...).', $MY_TEXTDOMAIN); ?></p>
                <!--/a-->
            </div>
            <div class="col" id="html5">
            <!--a href="/?page_id=230"-->
                <h2><?php echo __('Web interface', $MY_TEXTDOMAIN); ?></h2>
                <p class="description"><?php echo __("Domogik comes with a user interface so that you can use it quickly.", $MY_TEXTDOMAIN); ?></p>
            <!--/a-->
            </div>
            <div class="col" id="opensource">
            <!--a href="/?page_id=197"-->
                <h2><?php echo __('Fully customizable', $MY_TEXTDOMAIN); ?></h2>
                <p class="description"><?php echo __('With the documented API it becomes easy to modify, develop your own plugin or interface', $MY_TEXTDOMAIN); ?></p>
            <!--/a-->
            </div>
            <div class='clear'></div>
        </section>
        
        <div id='second'><!-- last posts area -->
            <section class="col" id='col_left'>
                <h2>|
                    <?php
                    $news_cat_id = get_category_by_slug('news-'.pll_current_language())->term_id;
                    echo(get_cat_name($news_cat_id)); 
                    ?>
                </h2>
                <ul>
                <?php
                
                $news_args = array(
                    'posts_per_page'  => 5,
                    'offset'          => 0,
                    'category'        => $news_cat_id,
                    'orderby'         => 'post_date',
                    'order'           => 'DESC',
                    'post_type'       => 'post',
                    'post_status'     => 'publish',
                    'suppress_filters' => true 
                );
                $articles = get_posts($news_args);
                foreach($articles as $post) {
                    setup_postdata($post);
                ?>
                    <li class="home_single_title">
                    <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?> </a><br><span class="date"><?php the_date('j F Y'); ?></span> 
                    <?php the_excerpt(); ?>
                    </li>
                    
                    
                <?php
                } // end foreach
                ?>
                </ul>
                <div class="view_posts"><a href="<?php echo(get_category_link($news_cat_id)) ; ?> ">><?php echo __('View all posts', $MY_TEXTDOMAIN); ?></a></div>
            </section>
    
            <section class="col" id='col_middle'>
                <h2>|
                    <?php
                    $blog_cat_id = get_category_by_slug('blog-'.pll_current_language())->term_id;
                    echo(get_cat_name($blog_cat_id)); 
                    ?>
                </h2>
                <ul>
                <?php
                $blog_args = array(
                    'posts_per_page'  => 5,
                    'offset'          => 0,
                    'category'        => $blog_cat_id,
                    'orderby'         => 'post_date',
                    'order'           => 'DESC',
                    'post_type'       => 'post',
                    'post_status'     => 'publish',
                    'suppress_filters' => true 
                );
                $articles = get_posts($blog_args);
                foreach($articles as $post) {
                    setup_postdata($post);
                ?>
                    <li class="home_single_title">
                    <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?> </a><br><span class="date"><?php the_date('j F Y'); ?></span> 
                    <?php the_excerpt(); ?>
                    </li>                
                <?php
                } // end foreach
                ?>
                </ul>
                <div class="view_posts"><a href="<?php echo(get_category_link($blog_cat_id)) ; ?> ">><?php echo __('View all posts', $MY_TEXTDOMAIN); ?></a></div>
            </section>
                
            <section class="col" id='col_right'>
                <h2>| Twitter</h2>
                <?php include('twitter.php') ?>
            </section>        
        </div>
    </main>
</div> 
<?php get_footer(); ?>

</body>
</html>
