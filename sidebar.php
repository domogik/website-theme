

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
 
<!-- CONTENU DE LA SIDEBAR -->
 
<?php endif; ?>

<div class="sidebar_list">

	<li><h2>Categories</h2>
		<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?><!-- appelle la liste des catégories dans la base de données (wp_list_cats) -->
		</ul>
	</li>
	<!-- <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>insertion des autres pages du blog -->
	<li><h2>Archives</h2>
		<ul>
		<?php wp_get_archives('type=monthly'); ?><!-- archives mensuelles -->
		</ul>
	</li>

	<!-- <li><h2>Infos Meta</h2>
	<ul>
	<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
		<?php wp_meta(); ?><!-- n’est pas utilisé mais doit être présente dans le template. -->
 
 </div>
 

	
