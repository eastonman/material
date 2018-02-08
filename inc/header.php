<!DOCTYPE HTML>
<html>
    <head>
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#FFFFFF" />
        
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- <link rel="icon" sizes="192x192" href="favicon-highres.png" /> -->
		
		<!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-title" content="Material Design Lite" />
        <!-- <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" /> -->
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

        <!-- MDUI css-->
        <link rel="stylesheet" href="//cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css" />
		<!--EXTERNAL CSS END-->
			
		<!--Roboto Font Begin-->
		<!-- Deprecated Becase using mdui and bootcdn for roboto fonts -->
		<!-- <?php if ($this->options->FontSource == '0'): ?>
			<link href='https://fonts.proxy.ustclug.org/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css' />
		<?php elseif ($this->options->FontSource == '1'): ?>
        	<style>
            	<?php if (!empty($this->options->CDNUrl)): ?>
                	@font-face {
                        font-family: Roboto;
                        src: url('<?php $this->options->CDNUrl(); ?>/MaterialCDN/fonts/Roboto.ttf');
                    }
                    @font-face {
                        font-family: Roboto;
                        font-weight: 700;
                        src: url('<?php $this->options->CDNUrl(); ?>/MaterialCDN/fonts/Roboto-700.ttf');
                    }
                <?php else: ?>
                    @font-face {
                        font-family: Roboto;
                        src: url('<?php $this->options->themeUrl('fonts/Roboto.ttf'); ?>');
                    }
                    @font-face {
                        font-family: Roboto;
                        font-weight: 700;
                        src: url('<?php $this->options->themeUrl('fonts/Roboto-700.ttf'); ?>');
                    }
                <?php endif; ?>
            </style>
            
		<?php endif; ?> -->
		<!--Roboto Font End-->
       
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
        	
        <!--Backgroung Settings Begin-->
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
        	   
	