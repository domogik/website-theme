<?php include ('header_single.php'); ?><!-- To have a header be different on a different template page  -->

<div id="content">
	<div id="main_content"><!-- main text area -->
		<div class="post" id="post-<?php the_ID(); ?>"><!-- appelle l'article ayant tel id -->
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="postmetadata"><!-- insertion date, auteur, categorie -->
    	<?php the_time('j F Y') ?> par <?php the_author() ?> | 
		Cat&eacute;gorie: <?php the_category(', ') ?> | 
		<?php edit_post_link(pll__('edit'), ' &#124; ', '');  ?>
		</p>

		<div class="post_content">
    	<?php the_content(); ?>
    	<div class="comments-template">
    	<?php if (!in_category('20')) comments_template(); ?><!-- exclude comments on category News -->
    	</div>
		</div><!-- end of div post content -->

		</div><!-- end of div post -->
		
	</div><!-- end of main content -->

<?php endwhile; ?>

	<div class="navigation">
	<?php posts_nav_link(__('Next page', $MY_TEXTDOMAIN), __('Previous page', $MY_TEXTDOMAIN)); ?>
	</div>

<?php endif; ?>

	<div id="sidebar_content"> <!-- sidebar area -->
	<?php get_sidebar(); ?>
	</div>

</div><!-- end of div content -->

<?php get_footer(); ?>

</body>
</html>
