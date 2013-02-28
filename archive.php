<?php get_header(); ?> <!-- ouvrir header.php -->
</div>
<div id="content"><!-- boite du content -->
<div class="post" id="post-<?php the_ID(); ?>"><!-- appelle l'article ayant tel id -->
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="postmetadata"><!-- insertion date, auteur, categorie -->
 
		<?php the_time('j F Y') ?> par <?php the_author() ?> | 
		Cat&eacute;gorie: <?php the_category(', ') ?> | 
		<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
 <!--  -->
</p>
<div class="post_content">
<?php the_excerpt(); ?><!-- affiche que les premieres lignes du contenu -->
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?><!-- appelle la sidebar -->
<?php get_footer(); ?><!-- appelle le footer -->
</body>
</html>