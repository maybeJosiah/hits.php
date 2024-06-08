<?php
//5/12/2024, 7:18PM, start fix. 7:54PM, done.
//For ending upon errors.
function customErrorXE($errno, $errstr) {
  echo 'Error with page view count:' . $errno . ' message:' . $errstr . ' X E.';
  //5/14/2024, 9:23AM, making fixes. 9:27AM, done. X E. 12:02PM, fix. X E.
  //die();
}
//set error handler
set_error_handler('customErrorXE');
//5/28/2024, 11:05AM, fix.
date_default_timezone_set("UTC");
//5/12/2024, 7:19PM, done. 7:44PM, fixed and added trim in add one thing.
//Makes or adds to hit count for a month.
//Make file name
$fileName = $_SERVER['DOCUMENT_ROOT'] . '/stats/' . date('mY') . '.txt';
//Check existence.
if (file_exists($fileName)) {
    //Add one if exists.
    file_put_contents($fileName,bcadd('1',trim(file_get_contents($fileName))));
} else {
    clearstatcache();
    if (file_exists($fileName)) {
        //Add one if exists.
        file_put_contents($fileName,bcadd('1',trim(file_get_contents($fileName))));
        die();
    }
    usleep(1000);
    clearstatcache();
    if (file_exists($fileName)) {
        //Add one if exists.
        file_put_contents($fileName,bcadd('1',trim(file_get_contents($fileName))));
        die();
    }
    usleep(10000);
    clearstatcache();
    if (file_exists($fileName)) {
        //Add one if exists.
        file_put_contents($fileName,bcadd('1',trim(file_get_contents($fileName))));
        die();
    }
    //Make it one if not existent yet.
    file_put_contents($fileName,'1');
}
//X E.
?>
