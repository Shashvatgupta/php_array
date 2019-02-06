<?php
//By this function , we can sort an  array...
$cars=array("1"=>"Volvo","2"=>"BMW","3"=>"Toyota");
krsort($cars);

$clength=count($cars);
foreach($cars as $a=>$av)
   {
   echo $a;
   echo "=>";
   echo $av."<br/>";
   }
?>


