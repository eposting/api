<?php
header("Content-type: application/json");
exec('curl -O https://raw.githubusercontent.com/eposting/eposting/main/config/images.php');
include "images.php";
if(isset($_GET["random"])){
  $r = rand(1, count($data));
  if($data[$r][0]=="video"){$video=",'video':'".$data[$r][4]."'";}else{$video="";}
  echo "{'type':'".$data[$r][0]."','uploader':'".$data[$r][2]."','image':'".$data[$r][3]."'$video}";
}else{
  echo "Eposting API :O";
}
?>
