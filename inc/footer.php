
</main>
<div class="mdui-container-fluid pjax-load bottom-mod" id="bottom">
		<!--Footer-->
        <footer class="mdui-row mdui-shadow-2 mdui-color-white bottom">

            <!--Footer Left SNS Icons Begin-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center footer-sns">
        		<!--Twitter Icon-->
                <?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->TwitterURL() ?>" class="mdui-color-white" target="view_window">
                    	<i class="mdui-icon mdui-text-color-black-icon icon-twitter_10 "></i>
                    </a>
                <?php else: ?>
                <?php endif; ?>


                <!-- FaceBook Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
                	<a href="<?php $this->options->FacebookURL() ?>" class="mdui-color-white" target="view_window">
                		<i class="mdui-icon mdui-text-color-black-icon icon-facebook_6" > </i>
                	</a>
                <?php else: ?>
                <?php endif; ?>

                <!-- Github Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->GithubURL() ?>" class="mdui-color-white" target="view_window">
                    	<i class="mdui-icon mdui-text-color-black-icon icon-github" ></i>
                    </a>
                <?php else: ?>
                <?php endif;?>


                <!--Telegram Icon-->
                <?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->TelegramURL() ?>" class="mdui-color-white" target="view_window">
                        <i class="mdui-icon mdui-text-color-black-icon icon-telegram" ></i>
                    </a>
                <?php endif;?>

                <!-- Linkedin Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
					<a href="<?php $this->options->LinkedinURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon mdui-text-color-black-icon icon-linkedin" ></i>
                    </a>
                <?php endif;?>

				<!-- Youtube Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowYoutube', $this->options->footersns)) : ?>
					<a href="<?php $this->options->YoutubeURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon mdui-text-color-black-icon icon-youtube" ></i>
                    </a>
                <?php endif;?>

                <!-- Steam Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowSteam', $this->options->footersns)) : ?>
					<a href="<?php $this->options->SteamURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon mdui-text-color-black-icon icon-steam" ></i>
                    </a>
                <?php endif;?>

                <!-- Niconico Icon -->
                <?php if (!empty($this->options->footersns) && in_array('ShowNiconico', $this->options->footersns)) : ?>
					<a href="<?php $this->options->NiconicoURL() ?>" class="mdui-color-white" target="view_window">
						<i class="mdui-icon mdui-text-color-black-icon icon-niconico" ></i>
                    </a>
                <?php endif;?>

            </div>
            <!--Footer Left SNS END-->

            <!--copyright-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-text-center mdui-typo copyright">

            	Copyright &copy;

                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?><br>
                博客建立于
                <?php echo timesince($this->options->FoundDate); ?>

                <!--Analysis code-->
                <br>
                <?php $this->options->analysis(); ?>
            </div>

            <!--mdl-mini-footer-right-section-->
            <div class="mdui-col-xs-12 mdui-col-md-4 mdui-float-right mdui-text-center">
                <div>
                    <div class="mdui-typo">Powered by <a href="http://typecho.org" target="_blank" rel="noopener" class="footer-develop-a">Typecho</a></div>
                    <div class="mdui-typo">Theme by <a href="https://kucloud.win" target="_blank" rel="noopener" class="footer-develop-a">Manyang901</a></div>
                </div>
            </div>
        </footer>

</div>

<a class="mdui-fab mdui-fab-mini mdui-fab-fixed mdui-color-theme-accent mdui-ripple mdui-fab-hide" id="scrolltop" href="#header" data-scroll>
    <i class="mdui-icon material-icons">expand_less</i>
</a>






<script src="//cdn.jsdelivr.net/npm/mdui@0.4.2/dist/js/mdui.min.js"></script>
<script type="text/javascript">
    // Using MDUI JQ
    var $$ = mdui.JQ;
</script>

<script src="<?php $this->options->themeUrl('js/search.js') ?>" type="text/javascript"></script>

<script type="text/javascript">
    //Search JS
    searchJQ();
</script>

<script src="<?php $this->options->themeUrl('js/scrolltop.js') ?>" type="text/javascript"></script>


<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    var scroll = new SmoothScroll('[data-scroll]');
</script>

<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php if (in_array('PJAX', $this->options->FunctionSwitch)): ?>
    <script src="//cdn.jsdelivr.net/npm/pjax@0.2.7/pjax.min.js"></script>
<?php endif; ?>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.css">
<script src="//cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.js"></script>


<script>
    //js used to toggle sidebar
    var SideBarDropdown = new mdui.Collapse('#sidebar-header-collapse');

    document.getElementById('sidebar-header-collapse-controller').addEventListener('click' , function() {
	    SideBarDropdown.toggle('#sidebar-header-collapse-item');
    });
</script>

<?php if (in_array('LazyLoad' ,$this->options->FunctionSwitch)): ?>
<script src="//cdn.jsdelivr.net/npm/vanilla-lazyload@10.19.0/dist/lazyload.min.js" > </script>

<script>
    //lazyload
    var myLazyLoad = new LazyLoad();
</script>
<?php endif; ?>

<?php if (in_array('PJAX', $this->options->FunctionSwitch)): ?>
<!--PJAX Js Event-->
<script>
    var pjax = new Pjax({
        elements: "a", // default is "a[href], form[action]"
        selectors: ["title", ".pjax-load"]
    });

	document.addEventListener('pjax:send', function() { NProgress.start(); });
	document.addEventListener('pjax:complete',
		function() { 
        NProgress.set(0.6);
        //close sidebar automatically in <1024px device
		var inst = new mdui.Drawer('#sidebar');
            if (document.documentElement.clientWidth < 1024) {
                inst.close();
            }
        mdui.mutation();

        //recall lazyload
        myLazyLoad.update();

        //Search js event
        searchJQ();
        
        //reinitialize highlight.js
        hljs.initHighlighting.called = false;
        hljs.initHighlighting();
	});
    document.addEventListener('pjax:success', function() {NProgress.done(); } );
</script>
<?php endif; ?>


</body>

</html>
