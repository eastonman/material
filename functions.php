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
    
    $ThumbnailOption = new Typecho_Widget_Helper_Form_Element_Radio('ThumbnailOption',
        array(
            '1' => _t('显示文章内第一张图片 (若无图片则显示随机图片)<br />'),
            '2' => _t('只显示纯色 &emsp;'),
            '3' => _t('只显示随机图片'),
        ),

        //Default choose
        '1', _t('缩略图显示效果')
    );
    $form->addInput($ThumbnailOption);

	$RandomPicAmnt = new Typecho_Widget_Helper_Form_Element_Text('RandomPicAmnt', null, _t('27'), _t('随机缩略图数量'), _t('img/random 图片的数量'));
    $form->addInput($RandomPicAmnt);
    
}


//Homepage thumbnail
function showThumbnail($widget)
{
    //If article no include picture, display random default picture
    if (empty($widget->widget('Widget_Options')->RandomPicAmnt)) { 
		$RandPicAmnt = 27;
	} else {
		$RandPicAmnt = $widget->widget('Widget_Options')->RandomPicAmnt;
	}
    $rand = rand(1,$RandPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path


    // If only one random default picture, delete the following "//"
    //$random = $widget->widget('Widget_Options')->themeUrl . '/img/random.jpg';

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';

    //if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
    //    echo $thumbUrl[1][0];
   // } elseif ($attach->isImage) {
//        echo $attach->url;
//    } else {
        echo $random;
//    }
}

//Random thumbnail
function randomThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path

    echo $random;
}

function is_pjax()
{
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
}

//Compress the code
//Using <!--<nocompress>--><!--</nocompress>--> for compatiblity
function compressHtml($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key + 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}
