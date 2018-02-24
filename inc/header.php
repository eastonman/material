<!DOCTYPE HTML>
<html>
    <head>
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="<?php $this->options->ChromeThemeColor(); ?>" />

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes" />
		<link rel="manifest" href="<?php $this->options->siteUrl('manifest.json'); ?>">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="PolyQY">
        <meta name="apple-mobile-web-app-title" content="PolyQY">
        <meta name="msapplication-starturl" content="/">

        <!-- <link rel="icon" sizes="192x192" href="favicon-highres.png" /> -->

		<!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-title" content="Material Design Lite" />
        <!-- <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" /> -->
        <!-- All Icons On ios and browsers -->
        <?php if (!empty($this->options->IconUrl)): ?>
        	<link rel="apple-touch-icon" sizes="57x57" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-57x57.png ">
    		<link rel="apple-touch-icon" sizes="60x60" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-60x60.png ">
	    	<link rel="apple-touch-icon" sizes="72x72" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-72x72.png ">
    		<link rel="apple-touch-icon" sizes="76x76" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-76x76.png ">
    		<link rel="apple-touch-icon" sizes="114x114" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-114x114.png ">
    		<link rel="apple-touch-icon" sizes="120x120" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-120x120.png ">
    		<link rel="apple-touch-icon" sizes="144x144" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-144x144.png ">
    		<link rel="apple-touch-icon" sizes="152x152" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-152x152.png ">
    		<link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->IconUrl(); ?>/img/icon/apple-icon-180x180.png ">
    		<link rel="icon" type="image/png" sizes="192x192"  href="<?php $this->options->IconUrl(); ?>/img/icon/android-icon-192x192.png ">
    		<link rel="icon" type="image/png" sizes="32x32" href="<?php $this->options->IconUrl(); ?>/img/icon/favicon-32x32.png ">
    		<link rel="icon" type="image/png" sizes="96x96" href="<?php $this->options->IconUrl(); ?>/img/icon/favicon-96x96.png ">
    		<link rel="icon" type="image/png" sizes="16x16" href="<?php $this->options->IconUrl(); ?>/img/icon/favicon-16x16.png ">
    		<meta name="msapplication-TileColor" content="#ffffff">
    		<meta name="msapplication-TileImage" content="<?php $this->options->IconUrl(); ?>/img/icon/ms-icon-144x144.png ">
    
        <?php else: ?>
        	
            <link rel="apple-touch-icon" sizes="57x57" href="<?php $this->options->themeUrl('img/icon/apple-icon-57x57.png') ?>">
    		<link rel="apple-touch-icon" sizes="60x60" href="<?php $this->options->themeUrl('img/icon/apple-icon-60x60.png') ?>">
	    	<link rel="apple-touch-icon" sizes="72x72" href="<?php $this->options->themeUrl('img/icon/apple-icon-72x72.png') ?>">
    		<link rel="apple-touch-icon" sizes="76x76" href="<?php $this->options->themeUrl('img/icon/apple-icon-76x76.png') ?>">
    		<link rel="apple-touch-icon" sizes="114x114" href="<?php $this->options->themeUrl('img/icon/apple-icon-114x114.png') ?>">
    		<link rel="apple-touch-icon" sizes="120x120" href="<?php $this->options->themeUrl('img/icon/apple-icon-120x120.png') ?>">
    		<link rel="apple-touch-icon" sizes="144x144" href="<?php $this->options->themeUrl('img/icon/apple-icon-144x144.png') ?>">
    		<link rel="apple-touch-icon" sizes="152x152" href="<?php $this->options->themeUrl('img/icon/apple-icon-152x152.png') ?>">
    		<link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->themeUrl('img/icon/apple-icon-180x180.png') ?>">
    		<link rel="icon" type="image/png" sizes="192x192"  href="<?php $this->options->themeUrl('img/icon/android-icon-192x192.png') ?>">
    		<link rel="icon" type="image/png" sizes="32x32" href="<?php $this->options->themeUrl('img/icon/favicon-32x32.png') ?>">
    		<link rel="icon" type="image/png" sizes="96x96" href="<?php $this->options->themeUrl('img/icon/favicon-96x96.png') ?>">
    		<link rel="icon" type="image/png" sizes="16x16" href="<?php $this->options->themeUrl('img/icon/favicon-16x16.png') ?>">
    		<meta name="msapplication-TileColor" content="#ffffff">
    		<meta name="msapplication-TileImage" content="<?php $this->options->themeUrl('img/icon/ms-icon-144x144.png') ?>">
    	<?php endif; ?>
        <!-- META END -->

		<!--Website Title-->
        <title>
            <?php $this->archiveTitle('', '', ' - '); ?>
            <?php $this->options->title(); ?>
        </title>
        <!--Website Title End-->

        <!--Traditional Type of favicon Settings-->
        <link rel="icon" type="image/ico" href="<?php $this->options->favicon(); ?>">
        <!--Favicon Settings End-->

        <!--Using Default SEO Info Output By Typecho Itself-->
        <?php $this->header(); ?>




        <!-- EXTERNAL CSS BEGIN -->
        <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('img/fontcustom/fontcustom.css'); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/shared.css'); ?>" />

        <!-- MDUI css-->
        <link rel="stylesheet" href="//cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css" />
		<!--EXTERNAL CSS END-->


		<!-- Style Setting Begin-->
		<!-- Predefined Customize Style Setting-->
		<style>
			#view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }

            body,h1,h2,h3,h4,h5,h6 {
                font-family: <?php $this->options->CustomFonts(); ?>;
            }

            a {
                color: <?php $this->options->alinkcolor(); ?> ;
            }


            .mdl-card__media,
            #search-label,
            #search-form-label:after,
            .sidebar-colored .sidebar-header,
            .sidebar-colored .sidebar-badge{
                background-color: <?php $this->options->ThemeColor(); ?> !important;
            }

            .sidebar-colored .sidebar-nav li:hover > a,
            .sidebar-colored .sidebar-nav li:hover > a i,
            .sidebar-colored .sidebar-nav li > a:hover,
            .sidebar-colored .sidebar-nav li > a:hover i,
            .sidebar-colored .sidebar-nav li > a:focus i,
            .sidebar-colored .sidebar-nav > .open > a,
            .sidebar-colored .sidebar-nav > .open > a:hover,
            .sidebar-colored .sidebar-nav > .open > a:focus{
                color: <?php $this->options->ThemeColor(); ?> !important;
            }
        </style>
		<!-- Customize Style End-->

		<!-- nprogress Loading Line -->
		<?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>
        	<style>
                .fade {
                  transition: all <?php $this->options->loadingbuffer(); ?>ms linear;
                  -webkit-transform: translate3d(0,0,0);
                  -moz-transform: translate3d(0,0,0);
                  -ms-transform: translate3d(0,0,0);
                  -o-transform: translate3d(0,0,0);
                  transform: translate3d(0,0,0);
                  opacity: 1;
                }

                .fade.out {
                  opacity: 0;
                }
            </style>
        <?php endif; ?>
        <!-- nprogress Loading Line End-->

        <!--Background Settings Begin-->
        <?php if ($this->options->BackgroundType =='0') : ?>
            <style>
                body{
                    <?php if (!empty($this->options->BgContent)): ?>
                        background-color: <?php $this->options->BgContent(); ?>;
                    <?php else: ?>
                        background-color: #F5F5F5;
                    <?php endif; ?>
                }
                .demo-blog .something-else .mdl-card__supporting-text{
                    background-color: #fff;
                }
                .MD-burger-layer{
                    background-color: #666;
                }
                .demo-blog .demo-blog__posts>.demo-nav,
                .demo-nav a,
                .demo-blog--blogpost .demo-back{
                    color: #666;
                }
            </style>

		<?php elseif ($this->options->BackgroundType == '1'): ?>
            <style>
                body{
                    <?php if (!empty($this->options->BgContent)): ?>
                        background-image: url(<?php $this->options->BgContent(); ?>);
                    <?php else: ?>
                        <?php if (!empty($this->options->CDNUrl)): ?>
                            background-image: url(<?php $this->options->CDNUrl() ?>/MaterialCDN/img/Background.jpg);
                        <?php else: ?>
                            background-image: url(<?php $this->options->themeUrl('img/Background.jpg'); ?>);
                        <?php endif; ?>
                    <?php endif; ?>
                }
            </style>
        <?php endif; ?>

        <!--Background Settings End-->




        <!--Analysis code-->
		<?php $this->options->analysis(); ?>


