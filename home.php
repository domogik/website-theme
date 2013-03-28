<?php get_header(); ?> <!-- ouvrir header.php -->

    <section id='content_home' role='main' class='wrapper'>
    
        <section id='first'>
            <div class="col" id="multitechno"><a href="/?page_id=228">
                <h2><?php echo __('Multi-technology', 'domogik_v1'); ?></h2>
                <p style="text-align:center;"><?php echo __('Domogik evolves with the latest technologies', 'domogik_v1'); ?></p></a>
            </div>
            <div class="col" id="html5"><a href="/?page_id=230">
                <h2><?php echo __('Web interface', 'domogik_v1'); ?></h2>
                <p style="text-align:center;"><?php echo __('Web user interface', 'domogik_v1'); ?></p></a>
            </div>
            <div class="col" id="opensource"><a href="/?page_id=197">
                <h2><?php echo __('Fully customizable', 'domogik_v1'); ?></h2>
                <p style="text-align:center;"><?php echo __('With the documented API it becomes easy to modify, develop your own plugin or interface', 'domogik_v1'); ?></p></a>
            </div>
        </section>
        
    <div id="searchform">
        <li><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
    </div>

    <section id='second'><!-- last posts area -->
        <div class="col" id='col_left'>
            <h2>
                <?php
                $news_cat_id = get_category_by_slug('news-'.pll_current_language())->term_id;
                echo(get_cat_name($news_cat_id)); 
                ?>
            </h2> 
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
                <li id="titre_article_home">
                <p><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?> </a><br><span class="date"><?php the_date('j F Y'); ?></span> 
                </li>
                
                
                <?php the_excerpt(); ?>
            <?php
            } // end foreach
            ?>
            <div class="voir_articles"><a href="<?php echo(get_category_link($news_cat_id)) ; ?> "><?php echo __('View all posts', 'domogik_v1'); ?></a></div>
        </div>
        

    <section id='second'>
        <div class="col" id='col_middle'>
            <h2>
                <?php
                $blog_cat_id = get_category_by_slug('blog-'.pll_current_language())->term_id;
                echo(get_cat_name($blog_cat_id)); 
                ?>
            </h2> 
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
                <li id="titre_article_home">
                <p><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?> </a><br><span class="date"><?php the_date('j F Y'); ?></span> 
                </li>
                
                <?php the_excerpt(); ?>
            <?php
            } // end foreach
            ?>
            <div class="voir_articles"><a href="<?php echo(get_category_link($blog_cat_id)) ; ?> "><?php echo __('View all posts', 'domogik_v1'); ?></a></div>
        </div>
            
        <div class="col" id='col_right'>
            <h2>Twitter</h2>
        </div>
        <div style="clear: both"></div>
        
    </section>
       
   </section>
   
</section>

<div class="navigation"><!-- links to previous and next pages -->
	<?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
</div>

</div>

<?php get_footer(); ?>


</body>
</html>
