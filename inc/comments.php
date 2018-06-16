<?php $this->comments()->to($comments); ?>
<?php define('__langis__', $this->options->langis); ?>
<?php //echo __langis__; ?>


<?php function threadedComments($comments, $options)
{
    $commentClass = '';
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
	<!--Mdui 框架 mdui-card overflow是 hidden 此处强制改为 visible-->
    <div 
    	id="li-<?php $comments->theId(); ?>"
    	style="overflow: visible;"
    	class="comment mdui-card comment-body mdui-p-b-1 mdui-m-y-2
    		<?php
    			if ($comments->_levels > 0) {
        			echo ' comment-child';
        			$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    			} else {
        			echo ' comment-parent';
    			}
    			$comments->alt(' comment-odd', ' comment-even');
    			echo $commentClass; 
    		?>
    ">

    <!-- Comment info -->
    <div class="comment header mdui-card-header">

        <!-- Comment avatar -->
        <div class="mdui-card-header-avatar mdui-icon mdui-btn-icon">
            <?php $comments->gravatar(42); ?>
        </div>
        
        <!--Commenter name -->
        <div class="mdui-card-header-title mdui-typo"><?php $comments->author(); ?>&nbsp;</div>
        
        <!--Comment date -->
        <div class="mdui-card-header-subtitle"><?php $comments->date('Y-m-d, H:i'); ?></div>
    </div>

    <!-- Comment content -->
    <div class="mdui-card-content">
        <?php $comments->content(); ?>
    </div>

    <!-- Comment actions -->
    <div class="mdui-card-actions">

        <!-- like 
        <button id="comment-like-button" class="mdui-btn mdui-ripple mdui-btn-icon" >
                <i class="mdui-icon material-icons mdui-text-color-black" role="presentation">thumb_up</i>
                <span class="mdui-hidden">like comment</span>
        </button>

         dislike 
        <button id="comment-dislike-button" class="mdui-btn mdui-ripple mdui-btn-icon">
                <i class="mdui-icon material-icons mdui-text-color-black" role="presentation">thumb_down</i>
                <span class="mdui-hidden">dislike comment</span>
        </button>
        -->
        
        
        <!-- reply -->
		<?php if (__langis__ == '0'): ?>
                <?php $comments->reply('
                    <button id="comment-reply-button" class="round-btn mdui-m-l-2 mdui-btn mdui-ripple mdui-btn-raised mdui-color-theme-accent">
				    Reply
                    </button>'); ?>
        <?php elseif (__langis__ == '1'): ?>
                <?php $comments->reply('
                    <button id="comment-reply-button" class="round-btn mdui-m-l-2 mdui-btn mdui-ripple mdui-btn-raised mdui-color-theme-accent">
                    回复
                    </button>'); ?>
        <?php elseif (__langis__ == '2'): ?>
                <?php $comments->reply('
                    <button id="comment-reply-button" class="round-btn mdui-m-l-2 mdui-btn mdui-ripple mdui-btn-raised mdui-color-theme-accent">
                    回復
                    </button>'); ?>
        <?php endif; ?>
        

        <!-- share -->
        <?php if (__langis__ == '0'): ?>
            <button id="comment-share-<?php $comments->theId(); ?>-button" class="round-btn mdui-m-r-2 mdui-btn mdui-ripple mdui-float-right mdui-btn-raised mdui-color-theme-accent" mdui-menu="{target: '#comment-share-list-<?php $comments->theId(); ?>'}">
                Share
            </button>
        <?php elseif (__langis__ == '1'): ?>
            <button id="comment-share-<?php $comments->theId(); ?>-button" class="round-btn mdui-m-r-2 mdui-btn mdui-ripple mdui-float-right mdui-btn-raised mdui-color-theme-accent" mdui-menu="{target: '#comment-share-list-<?php $comments->theId(); ?>'}">
                分享
            </button>
        <?php elseif (__langis__ == '2'): ?>
            <button id="comment-share-<?php $comments->theId(); ?>-button" class="round-btn mdui-m-r-2 mdui-btn mdui-ripple mdui-float-right mdui-btn-raised mdui-color-theme-accent" mdui-menu="{target: '#comment-share-list-<?php $comments->theId(); ?>'}">
                分享
            </button>
        <?php endif; ?>
        

        <ul id="comment-share-list-<?php $comments->theId(); ?>" class="mdui-menu" for="comment-share-<?php $comments->theId(); ?>-button">
        	<li class="mdui-menu-item">
            	<a class="md-menu-list-a" target="view_window" href="<?php $comments->permalink(); ?>">
                Open in New Tab
            	</a>
        	</li>

        	<li class="mdui-menu-item">
            	<a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $comments->content(); ?>+from&url=<?php $comments->permalink(); ?>">
                Share to Twitter
            	</a>
            </li>

            <li class="mdui-menu-item">
            	<a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $comments->permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                Share to Google+
            	</a>
            </li>
        </ul>
        
    </div>

    <!-- Comment answers -->
<?php if ($comments->children) { ?>
        <!--是否嵌套评论判断开始-->
        <div class="mdui-container">
            <?php $comments->threadedComments($comments, $options); ?>
            <!--嵌套评论所有内容-->
        </div>
<?php } ?>
        <!--是否嵌套评论判断结束-->

</div>

<?php
} ?>



<!-- 使用原生评论 -->

<div class="mdui-container pjax-load ">

    <?php if ($this->allow('comment')): ?>
    	
    	<div class="mdui-row">
    		<div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1 comments">
    			<?php $comments->listComments(); ?>
    		</div>
		</div>

    	<div id="<?php $this->respondId(); ?>" class="respond mdui-card mdui-p-a-4 mdui-m-b-4">

            <!-- Input form start -->
        	<form method="post" action="<?php $this->commentUrl() ?>">

                <!-- If user has login -->
                <?php if ($this->user->hasLogin()): ?>

            	    <!-- Display user name & logout -->
            	    <p style="color:#8A8A8A;" class="mdui-typo">Logged in as
                	    <a href="<?php $this->options->adminUrl(); ?>" style="font-weight:400"><?php $this->user->screenName(); ?></a>.
                	    <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" style="font-weight:400">Logout &raquo;</a>
            	    </p>

                <!-- If user didn't login -->
                <?php else: ?>

            	    <!-- Input name -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	    <label for="author" class="mdui-textfield-label">
                                <?php if ($this->options->langis == '0'): ?>
                                    Name*
                                <?php elseif ($this->options->langis == '1'): ?>
                                    昵称*
                                <?php endif; ?>
                            </label>

                            <input type="text" name="author" class="mdui-textfield-input" />
                	    </div>
            	    </div>

            	    <!-- Input email -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	    <label for="mail" class="mdui-textfield-label">
                                <?php if ($this->options->langis == '0'): ?>
                                    Email*
                                <?php elseif ($this->options->langis == '1'): ?>
                                    邮箱*
                                <?php endif; ?>
                            </label>

                            <input type="email" name="mail" class="mdui-textfield-input" />
                	    </div>
            	    </div>

            	    <!-- Input website -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	
                    	    <!--  placeholder="http://"-->
                    	    <label for="url" class="mdui-textfield-label">
                                <?php if ($this->options->langis == '0'): ?>
                                    Website
                                <?php elseif ($this->options->langis == '1'): ?>
                                    网站
                                <?php endif; ?>
                            </label>

                            <input type="url" name="url" id="visitor-url" class="mdui-textfield-input " />
                    	</div>
            	    </div>

                <?php endif; ?>

                <!-- Input comment content -->
                <div class="mdui-textfield mdui-textfield-floating-label" id="comment-input-div">
                    <label for="comment" class="mdui-textfield-label">
                        <?php if ($this->options->langis == '0'): ?>
                            Join the discussion
                        <?php elseif ($this->options->langis == '1'): ?>
                            加入讨论吧...
                        <?php endif; ?>
                    </label>

                    <textarea name="text"  id="comment" class="mdui-textfield-input"></textarea>
                </div>

                <!-- Submit comment content button -->
			    <?php if (__langis__ == '0') {
                    $comments->reply('
                        <button id="comment-button" class="round-btn mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-m-t-2 mdui-ripple mdui-float-right">
                            Submit
                        </button>'); 
                } elseif (__langis__ == '1') {
                    $comments->reply('
                        <button id="comment-button" class="round-btn mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-m-t-2 mdui-ripple mdui-float-right">
                            提交评论
                        </button>'); 
                } elseif (__langis__ == '2') {
                   $comments->reply('
                        <button id="comment-button" class="round-btn mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-m-t-2 mdui-ripple mdui-float-right">
                            提交評論
                        </button>'); 
                } else {
                    $comments->reply('
                        <button id="comment-button" class="round-btn mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-m-t-2 mdui-ripple mdui-float-right">
                            Submit
                        </button>'); 
                }?>

            </form>
            <!-- Input form END -->

        </div>

    
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php else: ?>

		<div class="mdui-chip mdui-typo">
        	<span class="mdui-chip-icon"><i class="mdui-icon material-icons" > comment</i></span>
        	<span class="mdui-chip-title">评论已关闭</span>
    	</div>
    <?php endif; ?>
</div>