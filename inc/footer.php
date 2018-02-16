

<div class="mdui-container-fluid">
		<!--Footer-->
        <footer class="mdui-row mdui-shadow-2 mdui-color-white" id="bottom">

            <!--Footer Left SNS Icons Begin-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center footer-sns">
        		<!--Twitter Icon-->
                <?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->TwitterURL() ?>" class="mdui-color-white" target="view_window">
                    	<i class="mdui-icon icon-twitter_10 "></i>
                    </a>
                <?php else: ?>
                <?php endif; ?>


                <!-- FaceBook Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
                	<a href="<?php $this->options->FacebookURL() ?>" class="mdui-color-white" target="view_window">
                		<i class="mdui-icon icon-facebook_6" > </i>
                	</a>
                <?php else: ?>
                <?php endif; ?>

                <!-- Github Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->GithubURL() ?>" class="mdui-color-white" target="view_window">
                    	<i class="mdui-icon icon-github" ></i>
                    </a>
                <?php else: ?>
                <?php endif;?>


                <!--Telegram Icon-->
                <?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->TelegramURL() ?>" class="mdui-color-white" target="view_window">
                        <i class="mdui-icon icon-telegram" ></i>
                    </a>
                <?php endif;?>

                <!-- Linkedin Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
					<a href="<?php $this->options->LinkedinURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon icon-linkedin" ></i>
                    </a>
                <?php endif;?>

				<!-- Youtube Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowYoutube', $this->options->footersns)) : ?>
					<a href="<?php $this->options->YoutubeURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon icon-youtube" ></i>
                    </a>
                <?php endif;?>

                <!-- Steam Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowSteam', $this->options->footersns)) : ?>
					<a href="<?php $this->options->SteamURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon icon-steam" ></i>
                    </a>
                <?php endif;?>

                <!-- Niconico Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowNiconico', $this->options->footersns)) : ?>
					<a href="<?php $this->options->NiconicoURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon icon-niconico" ></i>
                    </a>
                <?php endif;?>

            </div>
            <!--Footer Left SNS END-->

            <!--copyright-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center" id="copyright">

            	Copyright &copy;

                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?>
            </div>

            <!--mdl-mini-footer-right-section-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-float-right mdui-text-center">
                <div>
                    <div class="mdui-typo">Powered by <a href="http://typecho.org" target="_blank" class="footer-develop-a">Typecho</a></div>
                    <div class="mdui-typo">Theme by <a href="https://blog.kucloud.win" target="_blank" class="footer-develop-a">Manyang901</a></div>
                </div>
            </div>
        </footer>

</div>






</main>

<script src="//cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/vanilla-lazyload/10.4.2/lazyload.min.js"></script>
<script src="<?php $this->options->themeUrl('js/sidebar.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/lazyload.js'); ?>"></script>

<!--Register Service Worker-->
        <script>
            // Register the service worker
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('<?php $this->options->siteUrl('/serviceworker.js'); ?>', {scope: '<?php $this->options->siteUrl(''); ?>'} ).then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);

                }).catch(function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            }
        </script>
</body>

</html>
