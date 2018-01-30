<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay "></div>

<!-- Material sidebar
<aside id="sidebar" class="sidebar sidebar-colored  sidebar-fixed-left" role="navigation">


</aside>-->
<!-- SideBar Using MDUI Begin-->
<div class="mdui-drawer mdui-drawer-full-height drawer-mod sidebar" id="sidebar">
	<div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->themeUrl() ?>img/sidebarheader.jpg );">

		<div class="mdui-collapse" mdui-collapse="{accordion: true}">
			<div class="mdui-collapse-item" >
				<div class="mdui-collapse-item-header sidebar-brand">
					<i class="mdui-collapse-item-arrow mdui-icon material-icons mdui-ripple">arrow_drop_down</i>
				</div>

				<!--Content Show When Clicking Arrow On the SideBar Header-->
				<li class="mdui-collapse-item-body drop">
					<ul>
					<?php if ($this->user->hasLogin()): ?>
                    <li>
                        <a href="<?php $this->options->adminUrl(); ?>" tabindex="-1">
                            <i class="mdui-icon material-icons">account_circle</i>
                            <?php if ($this->options->langis == '0'): ?> Profile
                            <?php elseif ($this->options->langis == '1'): ?> 用户概要
                            <?php elseif ($this->options->langis == '2'): ?> 使用者概要
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl('options-theme.php'); ?>" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">settings</i>
                            <?php if ($this->options->langis == '0'): ?> Settings
                            <?php elseif ($this->options->langis == '1'): ?> 设置外观
                            <?php elseif ($this->options->langis == '2'): ?> 設置外觀
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->logoutUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">exit_to_app</i>
                            <?php if ($this->options->langis == '0'): ?> Exit
                            <?php elseif ($this->options->langis == '1'): ?> 退出登录
                            <?php elseif ($this->options->langis == '2'): ?> 退出登錄
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->loginUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="mdui-icon material-icons">fingerprint</i>

                            <?php if ($this->options->langis == '0'): ?> Login
                            <?php elseif ($this->options->langis == '1'): ?> 用户登录
                            <?php elseif ($this->options->langis == '2'): ?> 使用者登錄
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->adminUrl('register.php'); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">person_add</i>
                            <?php if ($this->options->langis == '0'): ?> Register
                            <?php elseif ($this->options->langis == '1'): ?> 用户注册
                            <?php elseif ($this->options->langis == '2'): ?> 使用者註冊
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endif; ?>

				</ul>
				</li>
  </div>
</div>


	</div>
	<!-- User dropdown  -->
            <li class="dropdown">
                <ul id="settings-dropdown" class="dropdown-menu">

                </ul>
            </li>

  <ul class="mdui-list">
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">move_to_inbox</i>
    <div class="mdui-list-item-content">Inbox</div>
  </li>
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">send</i>
    <div class="mdui-list-item-content">Outbox</div>
  </li>
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon"></i>
    <div class="mdui-list-item-content">Trash</div>
  </li>
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon"></i>
    <div class="mdui-list-item-content">Spam</div>
  </li>
</ul>
</div>
