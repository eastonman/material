<?php
/**
 * 这是由Viosey 基于 Google Material Design 开发的 Typecho 主题
 * 由Manyang901继续维护和更新
 *
 * @package Theme.Material
 * @author Viosey&manyang901
 * @version 1.3.0
 * @link https://github.com/manyang901/material
 */

$this->need('inc/header.php'); ?>

<!-- Standalone CSS Calling For Index -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/material.min.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/style.min.css" />
        <?php else: ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/header.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/index.css'); ?>" />
        <?php endif; ?>
<!-- Standalone CSS END-->

</head>

<body class="mdui-drawer-body-left" >

	<div>

		<main>

			<!-- Header & Appbar & Title -->
			<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide header-responsive" >
				<div class="mdui-toolbar mdui-color-theme mdui-color-white" >

					<!--<div class="mdui-toolbar-spacer"></div>-->
					<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#sidebar', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>

                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline header-center-title"  >
						<?php $this->options->title(); ?>
					</a>

				</div>

			</header>
			<!-- Header & Appbar & Title End -->


			<!-- Blog Header(picture&avatar&slogan) Began -->
            <div class="mdui-container mdui-appbar-with-toolbar" >


				<div class="mdui-row">
                	<!-- Main Picture -->
	                <div class="mdui-col-xs-12 mdui-col-sm-8">
						<div class="mdui-card top-card">
							<div class="mdui-card-media" >
							<a href="#"><img class="main-pic" src="<?php $this->options->themeUrl('img/MainPic.jpg') ?>" /></a>
							</div>
						</div>
					</div>
                	<!-- Main Picture End -->
                	
                	<!--Blog Info-->
                	<div class="mdui-col-xs-12 mdui-col-sm-4" >
                		<div class="mdui-card top-card" >
                			<div class="mdui-card-media" >
                				<img class="main-logo" src="<?php $this->options->themeUrl('img/Gravatar.png') ?>" >
                			</div>
                	
                
                		</div>
                
                	</div>
                	<!--Blog Info End-->
                	
            	</div>
            </div>





			<?php $this->need('inc/sidebar.php'); ?>
			<?php $this->need('inc/footer.php'); ?>


