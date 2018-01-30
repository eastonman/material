<?php

//Appearance setup
function themeConfig($form)
{
    echo '<p style="font-size:14px;" id="use-intro">
        <span style="display: block;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 16px;">感谢您使用 Material 主题</span>
        <span style="margin-bottom:10px;display:block">请关注 <a href="https://github.com/manyang901/material" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">Github-Material</a> 以获得<span style="color:#df3827;font-weight:bold;">最新版本支持</span></span>
        <a href="mailto:my@kucloud.win" >帮助&支持</a> &nbsp;
    <a href="https://github.com/manyang901/material/issues" target="_blank">建议&反馈</a>
        </p>';
        
    
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', null, null, _t('favicon 地址'), _t('填入博客 favicon 的地址, 默认则不显示'));
    $form->addInput($favicon);
    
    $CDNUrl = new Typecho_Widget_Helper_Form_Element_Text('CDNUrl', null, null, _t('CDN 地址'), _t("
        新建一个'MaterialCDN' 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'MaterialCDN' 上传到到你的 CDN 储存空间根目录下<br />
        填入你的 CDN 地址, 如 <b>http://bucket.b0.upaiyun.com</b>"));
    $form->addInput($CDNUrl);
    
    $FontSource = new Typecho_Widget_Helper_Form_Element_Radio('FontSource',
        array(
            '0' => _t('调用 Google fonts (使用 https://fonts.proxy.ustclug.org (中科大 https 镜像加速)<br />'),
            '1' => _t('调用主题文件夹自带的 Roboto &emsp;'),
        ),

        '1', _t('Roboto 字体使用来源'), null);
    $form->addInput($FontSource);
    
    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English <br />'),
            '1' => _t('简体中文 <br />'),
            '2' => _t('繁体中文 <br />')
        ),

        '0', _t('界面语言设置'), _t("默认使用英文")
    );
    $form->addInput($langis);
    
    $CustomFonts = new Typecho_Widget_Helper_Form_Element_Text('CustomFonts', null, _t("Roboto, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif"), _t('自定义字体'), null);
    $form->addInput($CustomFonts);
    
    $BgContent = new Typecho_Widget_Helper_Form_Element_Text('BgContent', null, null, _t('背景颜色 / 图片'), _t('背景设置如果选择纯色背景, 这里就填写颜色代码; <br />背景设置如果选择图片背景, 这里就填写图片地址;<br />
        不填写则默认显示 #F5F5F5 或主题文件夹下的 /img/bg.jpg'));
    $form->addInput($BgContent);

	$BackgroundType = new Typecho_Widget_Helper_Form_Element_Radio('BackgroundType',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;')
        ),

        //Default choose
        '1', _t('背景设置'), _t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用图片背景.")
    );
    $form->addInput($BackgroundType);
    
}