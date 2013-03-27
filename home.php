<?php get_header(); ?> <!-- ouvrir header.php -->

<?php if (pll_current_language() == "en" ) {  ?>
    <section id='content_home' role='main' class='wrapper'>
    
        <section id='first'>
            <div class="col" id="multitechno"><a href="/?page_id=228">
                <h2>Multi-technology</h2>
                <p style="text-align:center;">Domogik evolves with the latest technologies</p></a>
            </div>
            <div class="col" id="html5"><a href="/?page_id=230">
                <h2> Web interface </h2>
                <p style="text-align:center;">Web user interface </p></a>
            </div>
            <div class="col" id="opensource"><a href="/?page_id=197">
                <h2>Fully customizable</h2>
                <p style="text-align:center;">With the documented API it becomes easy to modify, develop your own plugin or interface </p></a>
            </div>
        </section>
        
        <?php } ?>
        
<?php if (pll_current_language() == "fr" ) {  ?>
    <section id='content_home' role='main' class='wrapper'>
    
        <section id='first'>
            <div class="col" id="multitechno"><a href="/?page_id=82">
                <h2>Multi-technologies</h2>
                <p style="text-align:center;">Domogik évolue avec les dernières technologies</p></a>
            </div>
            <div class="col" id="html5"><a href="/?page_id=116">
                <h2> Interface web </h2>
                <p style="text-align:center;">Domogik est livré en standard<br>avec une interface web</p></a>
            </div>
            <div class="col" id="opensource"><a href="/?page_id=139">
                <h2>Adapté à vos besoins</h2>
                <p style="text-align:center;">Interface et plugins faciles à développer <br>et à modifier </p></a>
            </div>
        </section>
        
        <?php } ?>  
        

    <section id='second'><!-- last posts area -->
        <div class="col" id='col_left'>
            <?php
            if (pll_current_language() == "fr") {
                $news_cat_id = 17;
            }
            else if (pll_current_language() == "en") {
                $news_cat_id = 20;
            }
            ?>            
            
            <h2><?php echo(get_cat_name($news_cat_id)); ?></h2> 
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
            <div class="voir_articles"><a href="<?php echo(get_category_link($news_cat_id)) ; ?> "><?php echo(pll__('view_all_posts')); ?></a></div>
        </div>
        

    <section id='second'>
        <div class="col" id='col_middle'>
            <?php
            if (pll_current_language() == "fr") {
                $blog_cat_id = 21;
            }
            else if (pll_current_language() == "en") {
                $blog_cat_id = 22;
            }
            ?>            
            
            <h2><?php echo(get_cat_name($blog_cat_id)); ?></h2> 
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
            <div class="voir_articles"><a href="<?php echo(get_category_link($blog_cat_id)) ; ?> "><?php echo(pll__('view_all_posts')); ?></a></div>
        </div>
            
        <div class="col" id='col_right'>
            <img src="./images/twitter.png" /><h2>Twitter</h2>
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
