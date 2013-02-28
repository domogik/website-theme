<?php get_header(); ?> <!-- ouvrir header.php -->
</div>
<?php if (pll_current_language() == "en" ) {  ?>
    <section id='content' role='main' class='wrapper'>
        <section id='first'>
            <div class="col" id="multitechno"><a href="/?page_id=228">
                <h2>Multi-technology</h2>
                <p style="text-align:center;">Supports a growing number of technologies</p></a>
            </div>
            <div class="col" id="html5"><a href="/?page_id=230">
                <h2> HTML5 + CSS3</h2>
                <p style="text-align:center;">Web user interface using the latest technologies</p></a>
            </div>
            <div class="col" id="opensource"><a href="/?page_id=197">
                <h2>Fully customizable</h2>
                <p style="text-align:center;">With the documented API it becomes easy to modify, develop your own plugin or interface </p></a>
            </div>
        </section>
        
        <?php } ?>
        
<?php if (pll_current_language() == "fr" ) {  ?>
    <section id='content' role='main' class='wrapper'>
        <section id='first'>
            <div class="col" id="multitechno"><a href="/?page_id=82">
                <h2>Multi-technologies</h2>
                <p style="text-align:center;">Supporte un nombre croissant de technologies</p></a>
            </div>
            <div class="col" id="html5"><a href="/?page_id=116">
                <h2> HTML5 + CSS3</h2>
                <p style="text-align:center;">Utilise les dernières technologies</p></a>
            </div>
            <div class="col" id="opensource"><a href="/?page_id=139">
                <h2>Adapté à vos besoins</h2>
                <p style="text-align:center;">Interface et plugins faciles à développer et à modifier </p></a>
            </div>
        </section>
        
        <?php } ?>        
        
    
<div id="content">
    <section id='second'>
        <div class="col" id='col_left'>
            <?php
            if (pll_current_language() == "fr") {
                $news_cat_id = 17;
                // Use it for the link on the bottom and remove this comment
                $news_all_posts = "Voir tous les articles";
            }
            else if (pll_current_language() == "en") {
                $news_cat_id = 20;
                // Use it for the link on the bottom and remove this comment
                $news_all_posts = "View all posts";
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
                <p><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></p>
            <?php
            } // end foreach
            ?>
        </div>

        <div class="col" id='col_middle'>
            <h2>From the Blog</h2>
            </div>
        <div class="col" id='col_right'>
            <h2>From Twitter</h2>
            </div>
        <div style="clear: both"></div>
    </section>

    <div class="navigation"><!-- Lier les différentes pages avec le “post nav link” -->
    <?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
    </div>

</div>

<?php get_footer(); ?>

</body>
</html>
