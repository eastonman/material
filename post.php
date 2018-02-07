<?php $this->need('inc/header.php'); ?>

<!-- Standalone CSS Calling For Index -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/material.min.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/style.min.css" />
        <?php else: ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/header.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/post.css'); ?>" />
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

                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-center"  >
						<?php $this->options->title(); ?>
					</a>

				</div>

			</header>
			<!-- Header & Appbar & Title End -->
				
				
			<div class="mdui-container-fluid mdui-appbar-with-toolbar" >
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
                                            <img  src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                                        <?php else: ?>
                                            <?php $this->author->gravatar(64,'X',NULL,"mdui-card-header-avatar"); ?>
                                        <?php endif; ?>

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
