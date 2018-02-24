<?php
/**
 * 这是由Viosey 基于 Google Material Design 开发的 Typecho 主题
 * 由Manyang901继续维护和更新
 *
 * @package Theme.Material
 * @author Viosey&manyang901
 * @version 2.1.0
 * @link https://github.com/manyang901/material
 */

$this->need('inc/header.php'); ?>

<!-- Standalone CSS Calling For Index -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/shared.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/index.css" />
        <?php else: ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/shared.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/index.css'); ?>" />
        <?php endif; ?>
<!-- Standalone CSS END-->

</head>

<!-- Html Head End-->




<!-- Html Body Start-->

<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?>" >

	<div>


        <!--Conten Of Index Page Begin-->

		<main>

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




			<!-- Blog Header(picture&avatar&slogan) Began -->
            <div class="mdui-container mdui-appbar-with-toolbar" >

                <!--First Row Of Content-->
                <div class="mdui-row">

                	<!-- Left Main Picture -->
	                <div class="mdui-col-xs-12 mdui-col-md-7 mdui-col-offset-md-1">
						<div class="mdui-card top-card">
							<div class="mdui-card-media" >
                                <a href="<?php $this->options->MainPicHref(); ?>">
                                    <?php if (!empty($this->options->MainPic )): ?>
                                        <img src="<?php $this->options->MainPic(); ?>">
                                    <?php else: ?>
                                        <img class="main-pic" src="<?php $this->options->themeUrl('img/MainPic.jpg') ?>" />
                                    <?php endif; ?>
                                </a>
							</div>
						</div>
					</div>
                	<!-- Main Picture End -->

                	<!--Right Part(Blog Info) Begin-->
                	<div class="mdui-col-xs-12 mdui-col-md-3" >
                		<div class="mdui-card top-card mdui-valign" >
                			<div class="mdui-card-media mdui-center" >
                                <a href="<?php $this->options->LogoHref(); ?>">
                                    <?php if (!empty($this->options->Logo )): ?>
                                        <img src="<?php $this->options->Logo(); ?>">
                                    <?php else: ?>
                				        <img class="main-logo" src="<?php $this->options->themeUrl('img/Avatar.jpg') ?>" >
                                    <?php endif; ?>
                                </a>
                			</div>


                		</div>

                	</div>
                	<!--Blog Info End-->

                </div>
                <!--First Row Of content End-->
            </div>
            <!--Blog Header End-->



            <!--Blog Posts Output Begin-->
            <div class="mdui-container" >

                <?php while ($this->next()): ?>

                        <!-- Each Post Occupy One MD Row-->
						<div class="mdui-row" >
                            <!-- Article Location -->
                            <div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1" >

                                <!--Md Card Used to Contain Post Info Begin-->
								<div class="mdui-card">
                                    <!-- Article link & title -->
                                	<?php if ($this->options->ThumbnailOption == '1'): ?>
                                        <div class="mdui-card-media index-post-card-media" >

                                            <!--Article ThumbNail-->
                                            <picture>
	    									    <img src="<?php showThumbnail($this); ?>" >
                                            </picture>
											<!--Article Title Displays Above ThumbNail-->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a>
												</div>
                                            </div>
                                            <!--Article Title End-->
		    							</div>


                                    <?php elseif ($this->options->ThumbnailOption == '2'): ?>

                                        <div class="mdui-card-media index-post-card-media" >

                                            <!--Article ThumbNail-->
                                            <picture>
	    									    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAA0NDQ0ODQ4QEA4UFhMWFB4bGRkbHi0gIiAiIC1EKjIqKjIqRDxJOzc7STxsVUtLVWx9aWNpfZeHh5e+tb75+f8BDQ0NDQ4NDhAQDhQWExYUHhsZGRseLSAiICIgLUQqMioqMipEPEk7NztJPGxVS0tVbH1pY2l9l4eHl761vvn5///CABEIA+gGQAMBIgACEQEDEQH/xAAVAAEBAAAAAAAAAAAAAAAAAAAAA//aAAgBAQAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//xAAVAQEBAAAAAAAAAAAAAAAAAAAABv/aAAgBAhAAAAClAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//xAAVAQEBAAAAAAAAAAAAAAAAAAAABv/aAAgBAxAAAACQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//xAAUEAEAAAAAAAAAAAAAAAAAAADg/9oACAEBAAE/AENR/8QAFBEBAAAAAAAAAAAAAAAAAAAAwP/aAAgBAgEBPwBE5//EABQRAQAAAAAAAAAAAAAAAAAAAMD/2gAIAQMBAT8AROf/2Q==" >
                                            </picture>
											<!--Article Title Displays Above ThumbNail-->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a>
												</div>
                                            </div>
                                            <!--Article Title End-->
		    							</div>
                                    <?php elseif ($this->options->ThumbnailOption == '3'): ?>

                                        <div class="mdui-card-media index-post-card-media" >

                                            <!--Article ThumbNail-->
                                            <picture>

                                                <source media="(min-width: 1024px)" data-srcset="<?php randomThumbnail($this); ?>" type="image/jpeg">
                                                <img alt="ThumbNail" data-src="<?php randomThumbnail($this); ?>" >

                                            </picture>

											<!--Article Title Displays Above ThumbNail-->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a>
												</div>
                                            </div>
                                            <!--Article Title End-->
		    							</div>

                                    <?php endif; ?>


                                    <!-- Article content -->
                                    <div class="mdui-card-content mdui-clearfix">
                                        <!--  -->
                                        <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;


                                        <span class="mdui-typo mdui-float-right" >
                                    		<a  href="<?php $this->permalink(); ?>" target="_self">
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
                                    <!--Article Content End-->

	    							<div class="mdui-divider"></div>

                                    <!-- Article info-->

                                    <!-- Author avatar -->
                                    <div class="mdui-card-header mdui-float-left" >
                                        <?php if (!empty($this->options->avatarURL)): ?>
                                            <img  src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
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

                                    </div>
                                    <!--Md Card Header End-->


                                    <!--Right Part Of Md Card Header(Under) -->
                                    <div class="mdui-typo mdui-float-right index-post-card-header-rightinfo" id="article-category-comment" style="color:<?php $this->options->alinkcolor(); ?>">

                                        <div class="mdui-text-color-pink-accent" >
                                            <?php $this->category(', '); ?>
                                        </div>


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
                                    <!--Right Part Of Md Card Header End-->

                                </div>
                                <!--Md Card Of Article End-->


                            </div>
						</div>
                <?php endwhile; ?>
                <!--Article Md Cards Output End-->

				<!-- Echo Prev & After Page-->
					<div class="mdui-row" >
                            <nav class="">
                                <div class="mdui-col-xs-2">
									<?php $this->pageLink(
                        '<div class=" mdui-float-left">
                            <i class="mdui-icon mdui-btn-icon material-icons mdui-color-transparent mdui-text-color-black mdui-m-y-3 mdui-ripple mdui-color-white" >arrow_back</i>
                        </div>'); ?>
                        		</div>

                                <div class="mdui-text-center mdui-col-xs-8 mdui-m-y-3">page
                                <?php if ($this->_currentPage>1) {
                            echo $this->_currentPage;
                        } else {
                            echo 1;
                        }?> of
                                <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                                </div>

                            	<div class="mdui-col-xs-2" >
                                <?php $this->pageLink(
                        '<div class="mdui-float-right ">
                            <i class="mdui-icon mdui-btn-icon material-icons mdui-color-transparent mdui-text-color-black mdui-m-y-3 mdui-ripple" >arrow_forward</i>
                        </div>', 'next'); ?>
                        		</div>
                            </nav>

					</div>
					<!-- Echo Navigation Icon End-->


			</div>
			<!-- Posts Output MD Container End-->

		</div>
        <!--Blog Post Output End-->






<?php $this->need('inc/sidebar.php'); ?>
<?php $this->need('inc/footer.php'); ?>


