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
    $older_date = strtotime($older_date);
    $since = abs($newer_date - $older_date);
    for ($i = 0, $j = count($chunks); $i < $j; $i++){
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) break;
    }

    $output = $count.$name.'前';
    return $output;
}

$version_filename = dirname(__FILE__).'/../../.version';

if (!file_exists($version_filename)) {
    $file = fopen($version_filename, 'w+');
    fwrite($file, date('c'));
    fclose($file);
}


// Install Sentry SDK
$include_path_append = dirname(__FILE__).'/../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $include_path_append);
include_once('Raven/Autoloader.php');
//require_once 'lib/Sentry/Autoloader.php';
    Raven_Autoloader::register();
    $client = new Raven_Client('https://9c54c7b6dcb14b41a4d2833f07b5d821:9345d22fdc7f427e8aea2c2d0810320b@sentry.io/1218923', 
        array(
            'curl_method' => 'async',
            'release' => VERSION
        ));

        $client->install();
        $client->captureMessage('Success!');
