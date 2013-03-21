<?php

$files = scandir('../images/' . $_GET['dir']);
$clean = array();
foreach($files as $file){
  if($file != '.' && $file != '..'){
    $clean[] = $file;
  }
}
$results['files'] = $clean;
$json = json_encode($results);

echo $json;
?>
