<?php get_header(); ?>
<div class='wrapper'>
    <main id="content" role='main'>
        <?php if(have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <div class="post_content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php edit_post_link(__('Edit', $MY_TEXTDOMAIN), ' &#124; ', ''); ?>
        <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>
</body>
</html>
