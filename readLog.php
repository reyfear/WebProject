<?php
  if (file_exists("infor.json") && filesize("infor.json") > 0) {
    $myfile = fopen("infor.json", "r");
    $data = fread($myfile, filesize("infor.json"));
    $productDB[] = json_decode($data, true);
		fclose($myfile);
    echo json_encode($productDB);
  }
?>
