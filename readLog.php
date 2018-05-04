<?php
  if (file_exists("infor.json") && filesize("infor.json") > 0) {
    $myfile = fopen("infor.json", "r");
    echo fread($myfile, filesize("infor.json"));
    fclose($myfile);
  }
?>