<?php

$version_file_path = dirname(__FILE__) . '/.version';
$theme_root = dirname(__FILE__);

include_once('inc/updateChecker.php');
if (isset($_GET['update'])) {
	if (($_GET['update'] == 1) and (checkUpdate())) {

    	echo "Update Checker For Theme New Material<br>";
    	echo "Starting Update<br>";
    	if (!update()){
    	    echo 'Update Failed!<br>';
    	} else {
        	echo "<br>";
    	}
    } else {
    	echo 'Argument Error Or Already Latest Version.<br>';
    }

} elseif (checkUpdate()) {
    echo '<script> alert("Confirm Update?"); location.href=document.URL + "?update=1"; </script>';
} else {
    echo 'Already Latest Version. <br>';
}

?>