<!DOCTYPE html>
<!-- This page is included in all pages but in the home page -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <title>
        <?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
    </title>
 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="Bluefish 2.0.3" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php echo(get_stylesheet_uri()); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
 
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
</head>
<body>

<header id='header'>
<div class="lang-item">
    <?php echo(pll_current_language()); ?>
</div>
    
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>    
    
<div class='wrapper'>
    <a href="<?php bloginfo('url'); ?>" id='home'>Domogik<div class='sub'><?php echo __('Free Home Automation', $MY_TEXTDOMAIN); ?></div></a>
    <nav id='primary'>
        <ul>
            <li class="separator"><a href="http://docs.domogik.org"><?php echo __('Download', $MY_TEXTDOMAIN); ?></a></li>
            <li class="separator"><a href="http://docs.domogik.org"><?php echo __('Documentation', $MY_TEXTDOMAIN); ?></a></li>
            <li class="separator"><a href="http://forum.domogik.org"><?php echo __('Forum', $MY_TEXTDOMAIN); ?></a></li>
            <li class="separator"><a href="http://repo.domogik.org/package"><?php echo __('Packages', $MY_TEXTDOMAIN); ?></a></li>
            <li><a href="http://wiki.domogik.org"><?php echo __('Dev', $MY_TEXTDOMAIN); ?></a></li>
        </ul>
    </nav>
</div>
</header>