<?php

$version_file_path = dirname(__FILE__) . '/.version';
$theme_root = dirname(__FILE__);

include_once('inc/updateChecker.php');
    echo "Update Checker\n";
    if (checkUpdate()) {
        echo "Start Update";
        update();
    } else {
        echo "Already Latest Version";
    }

?>
