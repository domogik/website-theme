<?php include('header.php'); ?>

<div id='content' role='main'>
    <div id='post'>
        <?php
        global $post;
        $args = array( 'numberposts' => 10, 'category'=> $_REQUEST['cat']);
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) :  setup_postdata($post); ?>
            <h2>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
                    
            <p class="postmetadata">
            <?php the_time('j F Y') ?>&nbsp;<?php _e('by', $MY_TEXTDOMAIN); ?>&nbsp;<?php the_author() ?> | 
            <?php echo __('Category', $MY_TEXTDOMAIN); ?>:&nbsp;<?php the_category(', ') ?> | 
            <?php edit_post_link(__('Edit', $MY_TEXTDOMAIN), ' &#124; ', ''); ?>
            </p>                
                    
            <div class="post_content">
                <?php the_content(); ?>
                <div class="comments-template">
                    <!-- exclude comments for News category -->
                    <?php if (!in_category('news-'.pll_current_language())) comments_template(); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php get_sidebar(); ?>

    <div style="clear: both"></div>
</div>

<?php include('footer.php'); ?>

</body>
</html>

