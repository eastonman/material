<?php
/**
 * 友链Links
 *
 * @package custom
 * @author Viosey&manyang901
 *
 */

$this->need('inc/header.php'); ?>



<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?>" >

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


			<div class="mdui-container-fluid mdui-appbar-with-toolbar pjax-load" >
				<div class="mdui-row" >
					<div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1">
						<!--Post Content Md Card Begin-->
						<div class="mdui-card" >

							<div class="mdui-card-primary" >
								<div clas="mdui-card-primary-title mdui-typo">
									<h1><?php $this->title() ?></h1>
								</div>
								
							</div>

							<div class="mdui-card-content">
								<ul class="mdui-list">
									<?php getFieldLinks($this); ?>        	            
								</ul>
							</div>

						</div>
						<!--Post Content MD Card End -->
					</div>
				</div>
			</div>


<?php include('inc/sidebar.php'); ?>
<?php include('inc/footer.php'); ?>
