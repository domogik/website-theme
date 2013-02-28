<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
 
    <title>
        <?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
    </title>
 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="Bluefish 2.0.3" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
 
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
     <link type="text/css" href="css/main.css" rel="stylesheet" media="all" />
    <link type="text/css" href="css/home.css" rel="stylesheet" media="all" />
</head>
<body>

<header id='header'>
<div class="lang-item">
    <?php echo(pll_current_language()); ?>
</div>
    
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>    
    
<div class='wrapper'>
        
<?php if (pll_current_language() == "fr" ) {  ?>
    <a href='./home.php' id='home'><img src="./images/domogik.png" />Domogik<div class='sub'>La domotique libre</div></a>
    <nav id='primary'>
        <ul>
            <li class="separator"><a href="http://docs.domogik.org">T&eacute;l&eacute;charger</a></li>
            <li class="separator"><a href="http://docs.domogik.org">Documentation</a></li>
            <li class="separator"><a href="http://forum.domogik.org">Forum</a></li>
            <li class="separator"><a href="http://repo.domogik.org/package">Packages</a></li>
            <li><a href="http://wiki.domogik.org">Dev</a></li>
        </ul>
    </nav>

    <section id="banner" role="banner">
        <div class='wrapper'>
            Domogik est une solution de domotique libre modulaire bas&eacute;e sur xPL.
        </div>
    </section> 

<?php } ?>

<?php if (pll_current_language() == "en" ) {  ?>
    <a href='http://www.domogik.org' id='home'><img src="images/domogik.png" />Domogik<div class='sub'>Free Home Automation</div></a>
    <nav id='primary'>
        <ul>
            <li class="separator"><a href="http://docs.domogik.org">Download</a></li>
            <li class="separator"><a href="http://docs.domogik.org">Documentation</a></li>
            <li class="separator"><a href="http://forum.domogik.org">Forum</a></li>
            <li class="separator"><a href="http://repo.domogik.org/package">Packages</a></li>
            <li><a href="http://wiki.domogik.org">Dev</a></li>
        </ul>
    </nav>
            
    <section id="banner" role="banner">
        <div class='wrapper'>
            Domogik is a modular open source home automation solution based on xPL.
        </div>
    </section>                 
            
<?php } ?>
            
</div>
</header>
    
<div id="subbanner"></div>
    <li id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
