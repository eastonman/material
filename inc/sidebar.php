<!-- SideBar Using MDUI Begin-->

<div class="mdui-drawer mdui-drawer-full-height drawer-mod sidebar" id="sidebar">
    <!--SideBar Header Begin-->
    <div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->themeUrl() ?>img/sidebarheader.jpg );">


        <i class="sidebar-brand mdui-collapse-item-arrow mdui-icon material-icons mdui-ripple" id="sidebar-header-collapse-controller" >arrow_drop_down</i>



    </div>
    <!--SideBar Header End-->



    <!-- Sidebar Dropdown Menu Begin -->
    <div class="mdui-collapse"  id="sidebar-header-collapse" >
        <div class="mdui-collapse-item"  id="sidebar-header-collapse-item" >

            <!--Content Show When Clicking Arrow On the SideBar Header-->
            <div class="mdui-collapse-item-body">
                <ul class="mdui-list mdui-list-dense" >
                <?php if ($this->user->hasLogin()): ?>
                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->adminUrl(); ?>" class="mdui-list-item-content" tabindex="-1">
                            <i class="mdui-icon material-icons">account_circle</i>
                            <?php if ($this->options->langis == '0'): ?> Profile
                            <?php elseif ($this->options->langis == '1'): ?> 用户概要
                            <?php elseif ($this->options->langis == '2'): ?> 使用者概要
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->adminUrl('options-theme.php'); ?>" class="mdui-list-item-content" tabindex="-1">
                            <i class="mdui-icon material-icons">settings</i>
                            <?php if ($this->options->langis == '0'): ?> Settings
                            <?php elseif ($this->options->langis == '1'): ?> 设置外观
                            <?php elseif ($this->options->langis == '2'): ?> 設置外觀
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->logoutUrl(); ?>" class="mdui-list-item-content" tabindex="-1">
                            <i class="mdui-icon material-icons">exit_to_app</i>
                            <?php if ($this->options->langis == '0'): ?> Exit
                            <?php elseif ($this->options->langis == '1'): ?> 退出登录
                            <?php elseif ($this->options->langis == '2'): ?> 退出登錄
                            <?php endif; ?>
                        </a>
                    </li>

                    <?php else: ?>

                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->loginUrl(); ?>" class="mdui-list-item-content" tabindex="-1">
                            <i class="mdui-icon material-icons">fingerprint</i>

                            <?php if ($this->options->langis == '0'): ?> Login
                            <?php elseif ($this->options->langis == '1'): ?> 用户登录
                            <?php elseif ($this->options->langis == '2'): ?> 使用者登錄
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="mdui-list-item mdui-ripple" >
                        <a href="<?php $this->options->adminUrl('register.php'); ?>" class="mdui-list-item-content" tabindex="-1">
                            <i class="mdui-icon material-icons">person_add</i>
                            <?php if ($this->options->langis == '0'): ?> Register
                            <?php elseif ($this->options->langis == '1'): ?> 用户注册
                            <?php elseif ($this->options->langis == '2'): ?> 使用者註冊
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
    <!--SideBar Dropdown Menu End-->

    <!--Sidebar Main Content Begin -->
    <ul class="mdui-list mdui-list-dense">
        <!-- Homepage -->
        <li class="mdui-list-item" >
            <a href="<?php $this->options->siteUrl(); ?>" class="mdui-list-item-content" target="_self">
                <i class="mdui-icon material-icons">home</i>
                    <?php if ($this->options->langis == '0'): ?> Homepage
                    <?php elseif ($this->options->langis == '1'): ?> 主页
                    <?php elseif ($this->options->langis == '2'): ?> 首頁
                    <?php endif; ?>
            </a>
        </li>

        <!--Archiive Dropdown Begin-->
        <div class="mdui-collapse" mdui-collapse="{ accordion: true}">
            <div class="mdui-collapse-item">
                <li class="mdui-collapse-item-header mdui-list-item">
                    <a href="#" class="mdui-list-item-content mdui-ripple" >
                        <i class="mdui-icon material-icons">inbox</i>
                        <?php if ($this->options->langis == '0'): ?> Archives
                        <?php elseif ($this->options->langis == '1'): ?> 归档
                        <?php elseif ($this->options->langis == '2'): ?> 過往
                        <?php endif; ?>
                        <i class="mdui-collapse-item-arrow mdui-icon material-icons mdui-ripple"  >keyboard_arrow_down</i>
                    </a>
                </li>

                <div class="mdui-collapse-item-body">
                    <ul class="mdui-list mdui-list-dense">
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                        ->parse('
                                    <li class="mdui-list-item" >
                                        <a href="{permalink}" class="mdui-list-item-content" tabindex="-1">
                                                {date}
                                        </a>
                                    </li>
                                '); ?>
                    </ul>

                </div>
            </div>
        </div>
        <!--Arichive dropdown End-->

        <!--Category Dropdown Begin-->
        <div class="mdui-collapse" mdui-collapse="{ accordion: true}">
            <div class="mdui-collapse-item">
                <li class="mdui-collapse-item-header mdui-list-item">
                    <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                        <i class="mdui-icon material-icons">apps</i>
                            <?php if ($this->options->langis == '0'): ?> Categories
                            <?php elseif ($this->options->langis == '1'): ?> 分类
                            <?php endif; ?>
                        <i class="mdui-collapse-item-arrow mdui-icon material-icons mdui-ripple"  >keyboard_arrow_down</i>
                    </a>
                </li>

                <div class="mdui-collapse-item-body">
                    <ul class="mdui-list" for="show-category-button">
                        <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                        <?php while ($category->next()): ?>
                            <li>
                                <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
                                    <?php $category->name(); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--Category Dropdown End -->


    </ul>




</div>
