<?php
/**
 * 这是由Viosey 基于 Google Material Design 开发的 Typecho 主题
 * 由Manyang901继续维护和更新
 *
 * @package New.Material
 * @author Viosey & Manyang901
 * @version 2.5.0
 * @link https://github.com/manyang901/material
 *
 */

$this->need('inc/header.php'); ?>



<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?> mdui-theme-accent-<?php $this->options->AccentColor(); ?> <?php if (in_array('DarkTheme', $this->options->FunctionSwitch)) { echo 'mdui-theme-layout-dark'; }?>" >

		<main>

			<!-- Auto Hiding Header & Appbar & Title -->
			<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide header-responsive" >
				<div class="mdui-toolbar mdui-color-theme mdui-color-white" >

					<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#sidebar', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>

                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-center"  >
						<?php $this->options->title(); ?>
					</a>

				</div>
			</header>
			<!-- Header & Appbar & Title END -->


			<div class="mdui-container-fluid mdui-appbar-with-toolbar pjax-load" >
				<div class="mdui-row mdui-p-b-4" >
					<div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1">
						<!--Post Content Md Card Begin-->
						<div class="mdui-card" >

							<div class="mdui-card-primary" >
								<div clas="mdui-card-primary-title mdui-typo">
									<h1><?php $this->title() ?></h1>
								</div>

							</div>

							<div class="mdui-card-content mdui-typo">
								<?php $this->content(); ?>
							</div>

						</div>
						<!--Post Content MD Card End -->
					</div>
				</div>
			</div>


<?php include('inc/sidebar.php'); ?>
<?php include('inc/footer.php'); ?>
