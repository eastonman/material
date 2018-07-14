<?php 
if ($this->options->langis == '0') {
    require_once(dirname(__FILE__) . '/lang/en-us.php');
} elseif ($this->options->langis == '1') {
    require_once(dirname(__FILE__) . '/lang/zh-cn.php');
} elseif ($this->options->langis == '2') {
    require_once(dirname(__FILE__) . '/lang/zh-tw.php');
}
$MultiLang = new LangDict();
?>



<?php $this->comments()->to($comments); ?>
<?php define('__langis__', $this->options->langis); ?>


<?php function threadedComments($comments, $options) {
    if (!isset($MultiLang)) {
        $MultiLang = new LangDict();
    }
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
            <?php $comments->gravatar(40); ?>
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
        
        <!-- reply -->
            <?php $comments->reply('
                    <button id="comment-reply-button" class="round-btn mdui-m-l-2 mdui-btn mdui-ripple mdui-btn-raised mdui-text-color-theme-accent">' .
				    $MultiLang->get('Reply') .
                    '</button>'); ?>
        

        <!-- share -->
            <button id="comment-share-<?php $comments->theId(); ?>-button" class="round-btn mdui-m-r-2 mdui-btn mdui-ripple mdui-float-right mdui-btn-raised mdui-text-color-theme-accent" mdui-menu="{target: '#comment-share-list-<?php $comments->theId(); ?>'}">
                <?php echo $MultiLang->get('Share'); ?>
            </button>
        
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
            	    <p style="color:#8A8A8A;" class="mdui-typo">
                        <?php echo $MultiLang->get('Logged in as'); ?>
                	    <a href="<?php $this->options->adminUrl(); ?>" style="font-weight:400"><?php $this->user->screenName(); ?></a>.
                	    <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" style="font-weight:400">
                            <?php echo $MultiLang->get('Logout'); ?> &raquo;
                        </a>
            	    </p>

                <!-- If user didn't login -->
                <?php else: ?>

            	    <!-- Input name -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	    <label for="author" class="mdui-textfield-label">
                                <?php echo $MultiLang->get('Name') . '*'; ?>
                            </label>

                            <input type="text" name="author" class="mdui-textfield-input" />
                	    </div>
            	    </div>

            	    <!-- Input email -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	    <label for="mail" class="mdui-textfield-label">
                                <?php echo $MultiLang->get('Email') . '*'; ?>
                            </label>

                            <input type="email" name="mail" class="mdui-textfield-input" />
                	    </div>
            	    </div>

            	    <!-- Input website -->
            	    <div class="login-form-group">
                	    <div class="mdui-textfield mdui-textfield-floating-label">
                    	
                    	    <!--  placeholder="http://"-->
                    	    <label for="url" class="mdui-textfield-label">
                                <?php echo $MultiLang->get('Website'); ?>
                            </label>

                            <input type="url" name="url" id="visitor-url" class="mdui-textfield-input " />
                    	</div>
            	    </div>

                <?php endif; ?>

                <!-- Input comment content -->
                <div class="mdui-textfield mdui-textfield-floating-label" id="comment-input-div">
                    <label for="comment" class="mdui-textfield-label">
                        <?php echo $MultiLang->get('Join the discussion'); ?>
                    </label>

                    <textarea name="text"  id="comment" class="mdui-textfield-input"></textarea>
                </div>

                <!-- Submit comment content button -->
			    <?php $comments->reply('
                        <button id="comment-button" class="round-btn mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-m-t-2 mdui-ripple mdui-float-right">' .
                            $MultiLang->get('Submit') .
                        '</button>'); 
                ?>

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