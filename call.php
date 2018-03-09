<?php
  $text=$_POST['chat'];
 # $res = shell_exec("python /haka/watson.py '$text'");
  
  $res=exec("python /haka/watson.py '$text'");
  echo $res;
  $array=json_decode($res);
  foreach($array as $row)
     echo $row.'<br>';  
?>
