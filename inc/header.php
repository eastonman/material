<!DOCTYPE HTML>
<html <?php if ($this->options->langis == '0') {
                echo "lang=\"en\"";
            } elseif ($this->options->langis == '1') {
                echo "lang=\"zh-Hans\"";
            } elseif ($this->options->langis == '2') {
                echo "lang=\"zh-TW\"";
            } else {
                echo "lang=\"en\"";
            } ?> >
    <head>
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="<?php $this->options->ChromeThemeColor(); ?>" />
        <!-- META END -->

		<!--Website Title-->
        <title>
            <?php $this->archiveTitle('', '', ' - '); ?>
            <?php $this->options->title(); ?>
        </title>
        <!--Website Title End-->

        <!-- Favicon Settings -->
        <?php if (empty($this->options->IconUrl)): ?>
            <link rel="icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>">
        <?php else: ?>
            <link rel="icon" type="image/ico" href="<?php $this->options->IconUrl(); ?>">
        <?php endif; ?>
        <!--Favicon Settings End-->

        <!--Using Default SEO Info Output By Typecho Itself-->
        <?php $this->header(); ?>

        <!-- DNS prefetch-->
        <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
        <link rel="preconnect" href="//secure.gravatar.com" crossorigin="anonymous" />




        <!-- EXTERNAL CSS BEGIN -->
        <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('img/fontcustom/fontcustom.css'); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/shared.css'); ?>" />

        <!-- MDUI css-->

        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@0.4.2/dist/css/mdui.min.css" />
        <link href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/gruvbox-dark.min.css" rel="stylesheet">

		<!--EXTERNAL CSS END-->


		<!-- Style Setting Begin-->
		<!-- Predefined Customize Style Setting-->
		<style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: <?php $this->options->CustomFonts(); ?>;
            }

            pre,code {
                font-family: Consolas, Source Code Pro, Roboto;
            }
            a {
                color: #000 ;
            }

            h1,h2,h3,h4,h5,h6 {
                font-weight: 400;
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


        


