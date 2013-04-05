<?php include('_header_common.php'); ?> <!-- ouvrir header.php -->
<div id="subbanner"></div>
<div class='wrapper'>
    <main id="content" role='main'><!-- boite du content -->
        <article class="post" id="post-<?php the_ID(); ?>"><!-- appelle l'article ayant tel id -->
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <div class="post_content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
        <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?><!-- appelle le footer -->
</body>
</html>