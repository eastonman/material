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

<!-- Standalone Css Calling For Index -->
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
            <div class="mdui-appbar-with-toolbar" >

                <!-- Main Picture -->
                <div class="">
                	<div class="mdui-grid-tile">
						<a href="#"><img src="<?php $this->options->themeUrl('img/MainPic.jpg') ?>" /></a>
						<div class="mdui-grid-tile-actions mdui-grid-tile-actions-gradient">
   						 <div class="mdui-grid-tile-text">
    							<div class="mdui-grid-tile-title">Halcyon Days</div>
    						</div>
  				  	</div>
					</div>
                    <?php if (!empty($this->options->MainPic )): ?>
                     <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->MainPic(); ?>)">
                    <?php else: ?>
                <!-- If MainPic url haven't set , load default hiyou.jpg-->


                        <?php if (!empty($this->options->CDNURL)): ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/hiyou.jpg)">
                        <?php else: ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->themeUrl('img/hiyou.jpg') ?>)">
                        <?php endif; ?>
                    <?php endif; ?>

                    <!-- Slogan appear on the index page-->
                    <p class="index-top-block-slogan"><a href="<?php $this->options->MainPicLink() ?>"><?php $this->options->slogan() ?></a></p>
                </div>
                <!-- Main Picture End -->





			<?php $this->need('inc/sidebar.php'); ?>
			<?php $this->need('inc/footer.php'); ?>


