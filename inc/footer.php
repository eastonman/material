<div class="mdui-container-fuild">
	 <!--Footer-->
        <footer class="mdui-row mdui-shadow-2 mdui-color-white" id="bottom">
            <!--mdl-mini-footer-left-section
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center">
                <?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdui-icon" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-twitter.png);">
                    <?php else: ?>
                        <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdui-icon  social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-twitter.png'); ?>);">
                            <?php endif; ?>
                            <span class="visuallyhidden">Twitter</span>
                        </button></a>
                    <?php endif;?>
                    <?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdui-icon" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-facebook.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-facebook.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Facebook</span>
                                    </button></a>
                <?php endif;?>


                <?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->GithubURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-github.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->GithubURL() ?>" target="view_window"><button class="mdui-icon" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-github.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Github</span>
                                    </button></a>
                <?php endif;?>



                <?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->TelegramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-telegram.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->TelegramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-telegram.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Telegram</span>
                            </button></a>
                <?php endif;?>


                <?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->LinkedinURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-linkedin.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->LinkedinURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-linkedin.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Linkedin</span>
                            </button></a>
                <?php endif;?>

            </div> -->

            <!--copyright-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center" id="copyright">Copyright &copy;
                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?>
            </div>

            <?php if (class_exists("Uptime_Plugin")): ?>
                <div id="copyright">
                    <?php Uptime_Plugin::show(); ?>
                </div>
            <?php endif; ?>

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
<script src="<?php $this->options->themeUrl('js/sidebar.js'); ?>"></script>
</body>

</html>
