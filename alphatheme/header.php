<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Alpha by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head() ?>
</head>

<body class="landing is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="">
            <nav id="nav">

                <?php
                $menu_args = array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                );
                wp_nav_menu($args);
                ?>

            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <h2><?php echo get_bloginfo('name') ?></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta, mollitia quibusdam, nisi opti.</p>

        </section>