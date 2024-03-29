<?php global $MY_TEXTDOMAIN; ?>
<!DOCTYPE html>
<!-- This page is included in all pages but in the home page -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <title>
        <?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
    </title>
 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="Bluefish 2.2.4" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php echo(get_stylesheet_uri()); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
</head>
<body>
    <div class='wrapper'>
        <nav id="languages">
            <ul>
                <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0));?>
            </ul>
        </nav>
    </div>
    <header id='header'>
        <div class='wrapper'>
            <a href='<?php bloginfo('url'); ?>' id='home'><div id='logo'></div>Domogik<div class='sub'><?php echo __('Free Home Automation', $MY_TEXTDOMAIN); ?></div></a>
            <nav id='primary'>
                <ul>
                    <?php
                        $downloadPageId = get_page_by_title('Download')->ID;
                        $downloadPageId = pll_get_post($downloadPageId, pll_current_language());
                        $downloadLink = get_page_link($downloadPageId);
                    ?>
                    <li class="separator"><a href="<?php echo($downloadLink); ?>"><?php echo __('Download', $MY_TEXTDOMAIN); ?></a></li>
                    <li class="separator"><a href="http://docs.domogik.org"><?php echo __('Documentation', $MY_TEXTDOMAIN); ?></a></li>
                    <li class="separator"><a href="http://forum.domogik.org"><?php echo __('Forum', $MY_TEXTDOMAIN); ?></a></li>
                    <li class="separator"><a href="http://repo.domogik.org/package"><?php echo __('Packages', $MY_TEXTDOMAIN); ?></a></li>
                    <li><a href="http://wiki.domogik.org"><?php echo __('Dev', $MY_TEXTDOMAIN); ?></a></li>
                </ul>
                <select>
                    <option value="">Select a link</option>
                    <option value="http://docs.domogik.org"><?php echo __('Documentation', $MY_TEXTDOMAIN); ?></option>
                    <option value="http://forum.domogik.org"><?php echo __('Forum', $MY_TEXTDOMAIN); ?></option>
                    <option value="http://repo.domogik.org/package"><?php echo __('Packages', $MY_TEXTDOMAIN); ?></option>
                    <option value="http://tracker.domogik.org"><?php echo __('Tracker', $MY_TEXTDOMAIN); ?></option>
                    <option value="http://wiki.domogik.org"><?php echo __('Dev', $MY_TEXTDOMAIN); ?></option>
                </select>
            </nav>
            <form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /><input type="submit" id="searchsubmit" aria-label='<?php _e("Search", $MY_TEXTDOMAIN); ?>' value="" />
            </form>
        </div>
    </header>
