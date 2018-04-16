<?php
/*
* Thumbnail functions
*/

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

    $cai = '';
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
    $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';

    if ($attach && $attach->isImage) {
        $ctu = $attach->url.$cai;
    } //调用第一个图片附件
    elseif (preg_match_all($pattern, $widget->content, $thumbUrl)) {
        //下面是调用文章第一个图片
        $ctu = $thumbUrl[1][0].$cai;
    }
    //如果是内联式markdown格式的图片
    elseif (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
        $ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    elseif (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
            $ctu = $thumbUrl[1][0].$cai;
    }
    //以上都不符合，即随机输出图片

    else {
        $ctu = $random;
    }
    echo $ctu;


//    $attach = $widget->attachments(1)->attachment;
//    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';

//    if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
//        echo $thumbUrl[1][0];
//    } elseif ($attach->isImage) {
//        echo $attach->url;
//    } else {
//        echo $random;
//	}
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