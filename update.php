<?php

$version_file_path = dirname(__FILE__) . '/.version';
$theme_root = dirname(__FILE__);

include_once('inc/updateChecker.php');
if ($_GET['update'] === 1) {

    echo "Update Checker For Theme New Material<br>";
    echo "Starting Update";
    if (!update()){
        echo 'Update Failed!<br>';
    } else {
        echo "<br>";
    }

} elseif (checkUpdate()) {
    echo '<script> alert("Confirm Update?"); location.herf=document.URL + "?update=1"; </script>';
} else {
    echo 'Already Latest Version. <br>';
?>
