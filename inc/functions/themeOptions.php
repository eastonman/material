<?php
/*
* Theme Config
*/
function themeConfig($form)
{
    echo '<p style="font-size:14px;" id="use-intro">
        <span style="display: block; margin-bottom: 10px; margin-top: 10px; font-size: 16px;">
            感谢您使用 Material 主题
        </span>
        <span style="margin-bottom:10px;display:block">
            请关注 
            <a href="https://github.com/manyang901/material" target="_blank" style="color:#009688;font-weight:bold;text-decoration:underline">
                Github-Material
            </a>
            以获得
            <span style="color:#4CAF50;font-weight:bold;">
                最新版本支持
            </span>
        </span>
        <a href="mailto:my@kucloud.win" >
            帮助&支持
        </a>
        &nbsp;
        <a href="https://github.com/manyang901/material/issues" target="_blank">
            建议&反馈
        </a>
    </p>';

    //Using poor method to get theme_root url
    //Then provide a entrypoint towards update.php
    $pageScheme = 'http';
    if (isset($_SERVER['HTTPS']) and ($_SERVER['HTTPS'] == 'on')) { 
        $pageScheme .= 's';
    }
    $pageScheme .='://';

    $theme_path = strchr(strchr(dirname(__FILE__), 'usr/themes/'), 'inc/functions', true);

    $theme_root = $pageScheme.$_SERVER['HTTP_HOST'].'/'.$theme_path;
    //echo $theme_root;
    echo '<a href="' . $theme_root . 'update.php">' . '
    检测更新 Check Update (实验性的 Experimental)
    </a>';  
 
    
    $FunctionSwitch = new Typecho_Widget_Helper_Form_Element_Checkbox('FunctionSwitch',
        array(
            'LazyLoad' => _t('LazyLoad'),
            'ViewCount' => _t('无插件访客统计'),
            'ShowMainPic' => _t('显示主页的欢迎图'),
            'DarkTheme' => _t('暗色主题'),
            'ScrollTop' => _t('回到顶部按钮'),
            'PJAX' => _t('PJAX无刷新加载')
        ),

        //Default choose
        array('LazyLoad', 'ViewCount'), _t('功能开关')
    );
    $form->addInput($FunctionSwitch->multiMode());

    $FoundDate = new Typecho_Widget_Helper_Form_Element_Text('FoundDate', null, null, _t('博客建立日期'), _t('格式为yyyy-mm-dd，如1980-06-01'));
    $form->addInput($FoundDate);

    $IconUrl = new Typecho_Widget_Helper_Form_Element_Text('IconUrl', null, null, _t('Icon 目录地址'), _t('填入博客所有icon 的地址，必须包含目录img/icon并且有相应的png文件, 默认显示主题目录下img/icon中的图标'));
    $form->addInput($IconUrl);

    $CDNUrl = new Typecho_Widget_Helper_Form_Element_Text('CDNUrl', null, null, _t('静态资源 CDN 地址'), _t("
        新建一个'MaterialCDN' 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'MaterialCDN' 上传到到你的 CDN 储存空间根目录下<br />
        填入你的 CDN 地址, 支持OSS存储桶，如 <b>http://bucket.b0.upaiyun.com</b>"));
    $form->addInput($CDNUrl);

    $ThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', null, _t('blue-grey'), _t('主题颜色'), _t('填入md颜色类别(如indigo)，可选主题色参见<a>https://www.mdui.org/docs/color</a>'));
    $form->addInput($ThemeColor);

    $AccentColor = new Typecho_Widget_Helper_Form_Element_Text('AccentColor', null, _t('pink'), _t('主题强调色'), _t('填入md颜色类别(如indigo)，可选主题色参见<a>https://www.mdui.org/docs/color</a>'));
    $form->addInput($AccentColor);

    $ChromeThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ChromeThemeColor', null, _t('#607D8B'), _t('Android Chrome 地址栏颜色'), null);
    $form->addInput($ChromeThemeColor);

    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English <br />'),
            '1' => _t('简体中文 <br />'),
            '2' => _t('繁体中文 <br />')
        ),
        '1', _t('界面语言设置'), _t("默认使用简体中文")
    );
    $form->addInput($langis);

    $CustomFonts = new Typecho_Widget_Helper_Form_Element_Text('CustomFonts', null, _t("Roboto, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif"), _t('自定义字体'), null);
    $form->addInput($CustomFonts);

    $BackgroundType = new Typecho_Widget_Helper_Form_Element_Radio('BackgroundType',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;')
        ),

        //Default choose
        '0', _t('背景设置'), _t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>', 这里默认使用纯色背景.")
    );
    $form->addInput($BackgroundType);


    $BgContent = new Typecho_Widget_Helper_Form_Element_Text('BgContent', null, null, _t('背景颜色 / 图片'), _t('背景设置如果选择纯色背景, 这里就填写颜色代码; <br>背景设置如果选择图片背景, 这里就填写图片地址;<br>
        不填写则默认显示 #F5F5F5 或主题文件夹下的 /img/Background.jpg'));
    $form->addInput($BgContent);

    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', null, null, '个人头像地址', '填入头像的地址, 如不填写则使用默认头像');
    $form->addInput($avatarURL);

    $MainPic = new Typecho_Widget_Helper_Form_Element_Text('MainPic', null, null, _t('首页顶部左边的图片地址'), _t('填入主页最大的图片地址, 图片显示在首页顶部左边位置'));
    $form->addInput($MainPic);

    $Logo = new Typecho_Widget_Helper_Form_Element_Text('Logo', null, null, _t('首页顶部右边 LOGO 图片地址'), _t('填入 LOGO 地址, 图片将显示于首页右上角板块'));
    $form->addInput($Logo);

    $MainPicHref = new Typecho_Widget_Helper_Form_Element_Text('MainPicHref', null, _t('#'), _t('首页顶部左边图片的点击跳转地址'), _t('点击首页大图后, 想要跳转网页的地址'));
    $form->addInput($MainPicHref);

    $LogoHref = new Typecho_Widget_Helper_Form_Element_Text('LogoHref', null, _t('#'), _t('首页顶部右边 LOGO 的点击跳转地址'), _t('点击 LOGO 后, 想要跳转网页的地址'));
    $form->addInput($LogoHref);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', null, _t('Nice to meet you'), _t('首页顶部左边的标语'), _t('填入自定义文字, 显示于首页顶部左边的图片上'));
    $form->addInput($slogan);

    $customUrl = new Typecho_Widget_Helper_Form_Element_Text('customUrl', null, _t('{"Status":"/status.php", "Baidu":"https://baidu.com"}'), _t('侧边栏链接列表(JSON)'), _t('填入自定义链接显示在侧边栏'));
    $form->addInput($customUrl);

    $ThumbnailOption = new Typecho_Widget_Helper_Form_Element_Radio('ThumbnailOption',
        array(
            '1' => _t('显示文章内第一张图片 (若无图片则显示随机图片)<br />'),
            '2' => _t('只显示纯色 &emsp;'),
            '3' => _t('只显示随机图片')
        ),

        //Default choose
        '1', _t('缩略图显示效果')
    );
    $form->addInput($ThumbnailOption);

	$RandomPicAmnt = new Typecho_Widget_Helper_Form_Element_Text('RandomPicAmnt', null, _t('27'), _t('随机缩略图数量'), _t('img/random 图片的数量'));
    $form->addInput($RandomPicAmnt);

    $footersns = new Typecho_Widget_Helper_Form_Element_Checkbox('footersns',
        array(
            'ShowTwitter' => _t('Twitter'),
            'ShowFacebook' => _t('Facebook'),
            'ShowGithub' => _t('Github'),
            'ShowTelegram' => _t('Telegram'),
            'ShowLinkedin' => _t('Linkedin'),
            'ShowSteam' => _t('Steam'),
            'ShowNiconico' => _t('Niconico'),
            'ShowYoutube' => _t('Youtube')
        ),

        array('ShowTwitter','ShowFacebook','ShowGithub'), _t('页脚 SNS 图标按钮显示设置'), _t('开启后, 按钮显示于博客页脚位置')
    );
    $form->addInput($footersns);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', null, null, _t('Twitter 地址'), null);
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', null, null, _t('Facebook 地址'), null);
    $form->addInput($FacebookURL);

    $GithubURL = new Typecho_Widget_Helper_Form_Element_Text('GithubURL', null, null, _t('Github 地址'), null);
    $form->addInput($GithubURL);

    $TelegramURL = new Typecho_Widget_Helper_Form_Element_Text('TelegramURL', null, null, _t('Telegram 地址'), null);
    $form->addInput($TelegramURL);

    $LinkedinURL = new Typecho_Widget_Helper_Form_Element_Text('LinkedinURL', null, null, _t('Linkedin 地址'), null);
    $form->addInput($LinkedinURL);

    $NiconicoURL = new Typecho_Widget_Helper_Form_Element_Text('NiconicoURL', null, null, _t('Niconico 地址'), null);
    $form->addInput($NiconicoURL);

    $SteamURL = new Typecho_Widget_Helper_Form_Element_Text('SteamURL', null, null, _t('Steam 地址'), null);
    $form->addInput($SteamURL);

    $YoutubeURL = new Typecho_Widget_Helper_Form_Element_Text('YoutubeURL', null, null, _t('Youtube 地址'), null);
    $form->addInput($YoutubeURL);

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', null, null, _t('网站统计代码和自定义页脚'), _t('填入如 Google Analysis 等的第三方统计代码'));
    $form->addInput($analysis);


}
