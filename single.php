<?php include ('_header_common.php'); ?>

<div id="content">
    <div id="main_content"><!-- main text area -->
        <div class="post" id="post-<?php the_ID(); ?>">
            <?php if(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
            <p class="postmetadata">
            <?php the_time('j F Y') ?><?php echo __('by', $MY_TEXTDOMAIN); ?><?php the_author() ?> | 
            <?php echo __('Category', $MY_TEXTDOMAIN); ?>:&nbsp;<?php the_category(', ') ?> | 
            <?php echo __('Edit', $MY_TEXTDOMAIN); ?>
            </p>

            <div class="post_content">
                <?php the_content(); ?>
                <div class="comments-template">
                    <!-- exclude comments for News category -->
                    <?php if (!in_category('news-'.pll_current_language())) comments_template(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div id="sidebar_content"> <!-- sidebar area -->
        <?php get_sidebar(); ?>
    </div>

</div><!-- end of div content -->

<?php get_footer(); ?>

</body>
</html>
