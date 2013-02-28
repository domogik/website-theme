<?php get_header(); ?> <!-- ouvrir header.php -->
</div>
<div id="content"><!-- boite du content -->
<div class="post" id="post-<?php the_ID(); ?>"><!-- appelle l'article ayant tel id -->
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="post_content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
<?php endif; ?>
</div>
<?php get_footer(); ?><!-- appelle le footer -->
</body>
</html>