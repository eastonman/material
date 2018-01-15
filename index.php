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

$this->need('header.php');?>

    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">

        <main class="mdl-layout__content" id="main">

			<div id="top"></div>

            <!-- Sidebar hamburger button -->
            <button class="MD-burger-icon sidebar-toggle">
              <span class="MD-burger-layer"></span>
            </button>
			<!-- Sidebar Hamburger ButtonEnd -->


			<!-- Blog Header(picture&avatar&slogan) Began -->
			<div class="demo-blog__posts mdl-grid">

                <!-- Main Picture -->
                <div class="mdl-card daily-pic mdl-cell mdl-cell--8-col index-top-block">
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

				<!-- Author avatar&name -->
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                <!-- Avatar -->
					<div id="author-avatar">
                    	<?php if (!empty($this->options->avatarURL)): ?>
                        	<img src="<?php $this->options->avatarURL() ?>" width="32px" height="32px" />
                        <?php else: ?>
                            <?php $this->author->gravatar(32); ?>
                        <?php endif; ?>
                    </div>
                    <!-- Author Name -->
					<div>
                    	<span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                    </div>
                </div>
            	<!-- Author Info End -->
			</div>
			<!-- Blog Header End -->


            <!-- Blog info -->
            <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop index-top-block">

				<!-- Search -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" method="post" action="">
                    <label id="search-label" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent mdl-shadow--4dp" for="search">
                    <!-- For modern browsers. -->
                        <i class="material-icons mdl-color-text--white" role="presentation">search</i>
                    </label>

                    <form id="search-form" method="post" action="" class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input search-input" type="text" name="s" id="search">
                        <label id="search-form-label" class="mdl-textfield__label" for="search">Enter your query...</label>
                    </form>
            	</div>
            	<!-- Search End -->


                <!-- LOGO -->
                <div class="something-else-logo mdl-color--white mdl-color-text--grey-600">

                    <!-- Load logo -->
					<?php if (!empty($this->options->logoLink)): ?>
                        <a href="<?php $this->options->logoLink() ?>">
                    <?php endif; ?>
                    <?php if (!empty($this->options->logo)): ?>
                        <img src="<?php $this->options->logo() ?>">
                    <?php else: ?>
                        <?php if (!empty($this->options->CDNURL)): ?>
                            <img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/MaterialLOGO.png">
                        <?php else: ?>
                            <img src="<?php $this->options->themeUrl('img/MaterialLOGO.png') ?>">
                        <?php endif; ?>
                    <?php endif; ?>
                        </a>
                </div>



						<!-- Infomation -->
                            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                                <div>
                                    <strong><?php $this->options->title();  ?></strong>
                                </div>


								<div class="section-spacer"></div>


                                <!-- Pages button -->
                                <button id="show-pages-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                	<i class="material-icons" role="presentation">view_carousel</i>
                                	<span class="visuallyhidden">Pages</span>
								</button>
								<!-- Show All the page exist in the system -->
                                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="show-pages-button">
                                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                    <?php while ($pages->next()): ?>
                                    <a href="<?php $pages->permalink(); ?>" class="md-menu-list-a" title="<?php $pages->title(); ?>">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php $pages->title(); ?>
                                        </li>
                                    </a>
                                    <?php endwhile; ?>
                                </ul>
                                <!-- Pages shown End -->



								<!-- Show All Availble Actions Including Sharing -->
                                <!--  Menu button-->
                                <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                    <i class="material-icons" role="presentation">more_vert</i>
                                    <span class="visuallyhidden">show menu</span>
                                </button>
                                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">

                                    <!-- 文章的RSS地址连接 -->
                                    <a href="<?php $this->options->feedUrl(); ?>" class="md-menu-list-a">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php if ($this->options->langis == '0'): ?> Article RSS
                                            <?php else: ?> 文章 RSS
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    
                                    <a class="md-menu-list-a" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->options->siteUrl(); ?>">
                                        <li class="mdl-menu__item">
                                            <?php if ($this->options->langis == '0'): ?> Share to Facebook
                                            <?php else: ?> 分享到 Facebook
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a class="md-menu-list-a" href="https://telegram.me/share/url?url=<?php $this->options->siteUrl(); ?>&text=<?php $this->options->title(); ?>" >
                                        <li class="mdl-menu__item">
                                            <?php if ($this->options->langis == '0'): ?> Share to Telegram
                                            <?php else: ?> 分享到 Telegram
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $this->options->title(); ?>&url=<?php $this->options->siteUrl(); ?>&via=<?php $this->author->screenName(); ?>">
                                        <li class="mdl-menu__item">
                                            <?php if ($this->options->langis == '0'): ?> Share to Twitter
                                            <?php else: ?> 分享到 Twitter
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $this->options->siteUrl(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                        <li class="mdl-menu__item">
                                            <?php if ($this->options->langis == '0'): ?> Share to Google+
                                            <?php else: ?> 分享到 Google+
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a class="md-menu-list-a" href="http://service.weibo.com/share/share.php?appkey=&title=<?php $this->options->title(); ?>&url=<?php $this->options->siteUrl(); ?>&pic=&searchPic=false&style=simple ">
                                        <li class="mdl-menu__item">
                                            <?php if ($this->options->langis == '0'): ?> Share to Weibo
                                            <?php else: ?> 分享到新浪微博
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                            <!-- Infomation End-->
				</div>
				<!-- Blog Info End-->
					
					
					
            <!-- Output Top Articles -->            
			<?php if ($this->is('index')): ?>
<?php
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
$sticky_posts = $db->fetchAll($this->db
    ->select()->from($prefix.'contents')
    ->orWhere('cid = ?', $this->options->sticky_1)
    ->orWhere('cid = ?', $this->options->sticky_2)
    ->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
rsort($sticky_posts);//对数组逆向排序，即大ID在前
foreach ($sticky_posts as $sticky_posts) {
    $result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
    $post_views = number_format($result['views']);
    $post_title = htmlspecialchars($result['title']);
    $post_date = date('M d,Y', $result['created']);
    $permalink = $result['permalink'];
    /*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
    echo '
                            <!-- Article module -->
                            <div class="mdl-article-top mdl-cell mdl-cell--12-col '.((!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch))?"fade out":"").' ">
                                <p class="article-headline-p-top"><a href="'.$permalink.'" target="_self"><span style="color:">[置顶]&nbsp;</span><span style="color:#757575">'.$post_title .'</span></a></p>
                            </div>
                            '."\n\r";
                        }
                    ?>
                            <?php endif; ?>
              <!-- Output Of Top Article End-->




			<?php while ($this->next()): ?>

                            <!-- Article module -->
                            <div class="mdl-card mdl-cell mdl-cell--12-col article-module <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>fade out<?php endif; ?>">

                                <!-- Article link & title -->
                                <?php if ($this->options->ThumbnailOption == '1'): ?>
                                <div class="mdl-card__media mdl-color-text--grey-50 lazyload" data-src="<?php showThumbnail($this); ?>">
                                    <p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
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

                            <?php endwhile; ?>

                            <nav class="demo-nav mdl-cell mdl-cell--12-col">
                                <?php $this->pageLink(
                        '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_back</i>
                        </button>'); ?>
                                <div class="section-spacer"></div>
                                page
                                <?php if ($this->_currentPage>1) {
                            echo $this->_currentPage;
                        } else {
                            echo 1;
                        }?> of
                                <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                                <div class="section-spacer"></div>
                                <?php $this->pageLink(
                        '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_forward</i>
                        </button>', 'next'); ?>
                            </nav>

                    </div>




                    <!--lazy load js-->

                                <script src="https://cdn.bootcss.com/vanilla-lazyload/10.4.1/lazyload.min.js"></script>
                                <script>
                                    var myLazyLoad = new LazyLoad({
                                        elements_selector: ".lazyload"
                                        });
                                </script>

                    <?php include('sidebar.php'); ?>
                    <?php include('footer.php'); ?>
