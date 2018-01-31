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
	                <div class="mdui-col-xs-12 mdui-col-md-7 mdui-col-offset-md-1">
						<div class="mdui-card top-card">
							<div class="mdui-card-media" >
							<a href="#"><img class="main-pic" src="<?php $this->options->themeUrl('img/MainPic.jpg') ?>" /></a>
							</div>
						</div>
					</div>
                	<!-- Main Picture End -->
                	
                	<!--Blog Info-->
                	<div class="mdui-col-xs-12 mdui-col-md-3" >
                		<div class="mdui-card top-card" >
                			<div class="mdui-card-media" >
                				<img class="main-logo" src="<?php $this->options->themeUrl('img/Gravatar.png') ?>" >
                			</div>
                	
                
                		</div>
                
                	</div>
                	<!--Blog Info End-->
                	
            	</div>
            </div>
            
            
            
            
            <!--Blog Posts Output Begin-->
            <div class="mdui-container" >	

            	<?php while ($this->next()): ?>
						<div class="mdui-row" >
                            <!-- Article module -->
                            <div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1" >

                                <!-- Article link & title -->
                                <?php if ($this->options->ThumbnailOption == '1'): ?>
                                <div class="mdui-card">
									<div class="mdui-card-media" >
										<img src="<?php showThumbnail($this); ?>" >
									</div>
                                    <div class="mdui-card-primary" >
										<p class="mdui-card-primary-title"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
									</div>
                                </div>
                                <?php elseif ($this->options->ThumbnailOption == '2'): ?>
                                <div class="mdl-card__media mdl-color-text--grey-50" style="background-color:<?php $this->options->TitleColor()?> !important;color:#757575 !important;">
                                    <p class="article-headline-p-nopic">
                                        <a href="<?php $this->permalink() ?>" target="_self">
                                        “</br><?php $this->title() ?></br>”
                                    </a>
                                    </p>
                                </div>
                                <?php elseif ($this->options->ThumbnailOption == '3'): ?>


                                <div class="mdl-card__media mdl-color-text--grey-50 lazyload" data-src="<?php randomThumbnail($this); ?>">
                                    <p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
                                </div>
                                <?php endif; ?>

                                <!-- Article content -->
                                <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                                    <!--  $this->content('Continue Reading...');  -->
                                    <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;
                                    <span>
                                <a href="<?php $this->permalink(); ?>" target="_self">
                                    <?php if ($this->options->langis == '0'): ?>
                                        Continue Reading
                                    <?php elseif ($this->options->langis == '1'): ?>
                                        继续阅读
                                    <?php elseif ($this->options->langis == '2'): ?>
                                        繼續閱讀
                                    <?php endif; ?>
                                </a>
                            </span>
                                </div>

                                <!-- Article info-->
                                <div id="article-info">
                                    <div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
                                        <!-- Author avatar -->
                                        <div id="author-avatar">
                                            <?php if (!empty($this->options->avatarURL)): ?>
                                            <img src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                                            <?php else: ?>
                                            <?php $this->author->gravatar(44); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                            <span>
                                        <?php if ($this->options->langis == '0'): ?>
                                            <?php $this->date('F j, Y'); ?>
                                        <?php else: ?>
                                            <?php $this->dateWord(); ?>
                                        <?php endif; ?>
                                    </span>
                                        </div>
                                    </div>
                                    <div id="article-category-comment" style="color:<?php $this->options->alinkcolor(); ?>">
                                        <?php $this->category(', '); ?>
                                        <a href="<?php $this->permalink() ?>">
                                            <!-- 使用原生评论 -->
                                            <?php if ($this->options->commentis == '0'): ?>
                                            <?php echo '|'; ?>
                                            <?php $this->commentsNum('%d 评论'); ?>
                                            <!-- 使用wildfire评论 -->
                                            <?php else: ?>
                                            <?php endif; ?>
                                        </a>

                                    </div>

                                </div>

                            </div>
						</div>
				<?php endwhile; ?>
			</div>






			<?php $this->need('inc/sidebar.php'); ?>
			<?php $this->need('inc/footer.php'); ?>


