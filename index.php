<?php
header("Content-type: application/json");
exec('curl -O https://raw.githubusercontent.com/eposting/eposting/main/config/images.php');
include "images.php";
if(isset($_GET["random"])){
  $r = rand(0, count($data)-1);
  if($data[$r][0]=="video"){$video=",'video':'".$data[$r][4]."'";}else{$video="";}
  $numfinal = $r+1;
  if(strpos($data[$r][1],"'")){$title=str_replace("'", "\\'", $data[$r][1]);}else{$title=$data[$r][1];}
  echo "{'num':$numfinal,'type':'".$data[$r][0]."','title':'$title','uploader':'".$data[$r][2]."','image':'".$data[$r][3]."'$video}";
}else{
  echo "Eposting API :O";
}
?>
