<?php
$result = "";
if (!isset($_GET["letter"])) {
	die("no letter found.");
}
$letter = $_GET["letter"];


if($letter=='台北'){         
  
   $result2 = "https://www.gov.taipei/cp.aspx?n=1F076481DD9E556B";
}
if($letter=='台中'){         
    
    $result2 ="https://www.taichung.gov.tw/8868/9945/10014/676413/post";
}
if($letter=='台南'){         
   
    $result2 ="https://www.tainan.gov.tw/cp.aspx?n=13293";
}



 echo $result2;
?>