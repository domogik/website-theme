<?php include ('_header_common.php'); ?>

<div id="content">
    <div id="main_content"><!-- main text area -->
        <div class="post" id="post-<?php the_ID(); ?>">
            <?php if(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
            <p class="postmetadata">
            <?php the_time('j F Y') ?> par <?php the_author() ?> | 
            Cat&eacute;gorie: <?php the_category(', ') ?> | 
            <?php edit_post_link(pll__('edit'), ' &#124; ', '');  ?>
            </p>

            <div class="post_content">
                <?php the_content(); ?>
                <div class="comments-template">
                    <?php if (!in_category('20')) comments_template(); ?><!-- exclude comments on category News -->
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
