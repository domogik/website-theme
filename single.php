<?php get_header(); ?>
<div id="subbanner"></div>
<div class='wrapper'>
    <main id='content' role='main'>
        <article id='post'>
            <?php if(have_posts()) : the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            
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
            
            <div class="previous_next">
                <?php previous_post_link() ?> || <?php next_post_link() ?> 
            </div>       
            
            <?php endif; ?> 
        </article>
    
        <?php get_sidebar(); ?>
    </main>
</div>
<?php include('footer.php'); ?>

</body>
</html>

