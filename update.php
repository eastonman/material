<?php

include_once('updateChecker.php');
    echo "Update Checker\n";
    if (checkUpdate()) {
        echo "Start Update";
        update();
    } else {
        echo "Already Latest Version";
    }

?>
