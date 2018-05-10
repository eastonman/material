<?php
/*
*
*/

function timesince($older_date,$comment_date = false) {
    $chunks = array(
        array(86400 , '天'),
        array(3600 , '小时'),
        array(60 , '分'),
        array(1 , '秒'),
    );

    $newer_date = time();
    $since = abs($newer_date - $older_date);
    for ($i = 0, $j = count($chunks); $i < $j; $i++){
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) break;
    }

    $output = $count.$name.'前';
    return $output;
}