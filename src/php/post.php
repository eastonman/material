<?php
/**
 * 这是由Viosey 基于 Google Material Design 开发的 Typecho 主题
 * 由Manyang901继续维护和更新
 *
 * @package New.Material
 * @author Viosey & Manyang901
 * @version 2.5.0
 * @link https://github.com/manyang901/material
 */

$this->need('inc/header.php'); ?>

<!-- Standalone CSS Calling For Index -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link class="pjax-load" rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/post.css" />
        <?php else: ?>
            <link class="pjax-load" rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/post.css'); ?>" />
        <?php endif; ?>
<!-- Standalone CSS END-->

<link rel="preload" href="<?php $this->options->themeUrl('css/index.css') ?>" as="style">

</head>

<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?> mdui-theme-accent-<?php $this->options->AccentColor(); ?> <?php if (in_array('DarkTheme', $this->options->FunctionSwitch)) { echo 'mdui-theme-layout-dark'; }?>">

		<main id="main">

			<!-- Header & Appbar & Title -->
			<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide header-responsive" >
				<div class="mdui-toolbar mdui-color-theme mdui-color-white" >

					<!--<div class="mdui-toolbar-spacer"></div>-->
					<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#sidebar', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>

                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-center"  >
						<?php $this->options->title(); ?>
					</a>

				</div>

			</header>
			<!-- Header & Appbar & Title End -->


			<div class="mdui-container-fluid mdui-appbar-with-toolbar pjax-load" >
				<div class="mdui-row" >
					<div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1">
						<!--Post Content Md Card Begin-->
						<div class="mdui-card" >

							<div class="mdui-card-media post-card-media" >
								<img src="<?php showThumbnail($this); ?>">
								<div class="mdui-card-primary mdui-card-media-covered mdui-card-media-covered-gradient" >
									<div clas="mdui-card-primary-title mdui-typo">
										<h1><?php $this->title() ?></h1>
									</div>
								</div>
							</div>

							<div class="mdui-card-header" >
                            	<?php if (!empty($this->options->avatarURL)): ?>
                                	<img class="mdui-card-header-avatar" src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                                <?php else: ?>
                                    <?php $this->author->gravatar(64,'X',NULL,"mdui-card-header-avatar"); ?>
                                <?php endif; ?>

                                <!--Author Name-->
                                        <span class="mdui-card-header-title mdui-typo"><a  href="<?php $this->author->permalink(); ?>">
                                            <?php $this->author(); ?></a>
                                        </span>

                                        <span class="mdui-card-header-subtitle" >
                                            <?php if ($this->options->langis == '0'): ?>
                                                <?php $this->date('F j, Y'); ?>
                                            <?php else: ?>
                                                <?php $this->dateWord(); ?>
                                            <?php endif; ?>
                                        </span>
                                        <!--Row Of Subtitle End-->

                                <!-- favorite
								<?php $allplugin = Typecho_Plugin::export(); ?>
								<?php if (array_key_exists('TeStat', $allplugin['activated'])): ?>
									<button id="article-functions-like-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon btn-like" data-cid="<?php $this->cid();?>" data-num="<?php $this->likesNum();?>">
                                		<i class="material-icons mdl-badge mdl-badge--overlap" role="presentation" data-badge="<?php $this->likesNum();?>">favorite</i>
                                		<span class="visuallyhidden">favorites</span>
                            		</button>
                    			<?php endif; ?> -->

                            </div>

							<div class="mdui-card-content mdui-typo">
								<?php $this->content(); ?>
							</div>

						</div>
						<!--Post Content MD Card End -->
					</div>
				</div>
			</div>

		<?php $this->need('inc/comments.php'); ?>


			<!-- theNext thePrev button -->
			<div class="mdui-container mdui-m-b-4 pjax-load">
            <nav class="mdui-row">
<?php $this->theNext('%s', null, array('title' => '
<div class="mdui-col-xs-4">
<button class="mdui-btn mdui-btn-raised mdui-ripple round-btn mdui-color-white mdui-text-color-theme-accent" role="presentation">
<i class="mdui-icon material-icons">arrow_back</i>
&nbsp;Newer
</button>
</div> ', 'tagClass' => 'prev-content')); ?>
                <div class="mdui-col-xs-4"></div>
<?php $this->thePrev('%s', null, array('title' => '
<div class="mdui-col-xs-4 mdui-text-right">
<button class="mdui-btn mdui-btn-raised mdui-ripple round-btn mdui-color-white mdui-text-color-theme-accent" role="presentation">
Older&nbsp;&nbsp;
<i class="mdui-icon material-icons">arrow_forward</i>
</button>
</div>', 'tagClass' => 'prev-content')); ?>
            </nav>
            </div>
        <?php include('inc/sidebar.php'); ?>
        <?php include('inc/footer.php'); ?>

        <!-- Execute getViewsStr one time to let $views++ -->
        <?php if (in_array('ViewCount',$this->options->FunctionSwitch)): ?>
        	<?php getViewsStr($this); ?>
        <?php endif; ?>
