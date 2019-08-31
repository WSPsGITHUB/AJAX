<?php
$result = "";
if (!isset($_GET["letter"])) {
	die("no letter found.");
}
$letter = $_GET["letter"];


$Taipei=[北投區,士林區,中山區,內湖區,大同區,松山區,
           萬華區,中正區,大安區,信義區,南港區,文山區];

$Taichung=[中區,東區,西區,南區,北區,西屯區,南屯區,北屯區,豐原區,大里區,太平區,
            清水區,沙鹿區,大甲區,東勢區,梧棲區,烏日區,神岡區,大肚區,大雅區,后里區,
            霧峰區,潭子區,龍井區,外埔區,和平區,石岡區,大安區,新社區];

$Tainan=[東區,中西區,北區,南區,安平區,安南區,永康區,仁德區,歸仁區,關廟區,龍崎區,新化區,
          新市區,善化區,山上區,左鎮區,玉井區,楠西區,南化區,安定區,西港區,七股區,佳里區,
          將軍區];

if($letter=='台北'){         
   for ($i = 0; $i < count($Taipei); $i++) {
    $result .= sprintf("<option value='%s'>%s%s</option>", $i, $letter, $Taipei[$i]);   
   }  
}
if($letter=='台中'){         
    for ($i = 0; $i < count($Taichung); $i++) {
     $result .= sprintf("<option value='%s'>%s%s</option>", $i, $letter, $Taichung[$i]);   
    }  
}
if($letter=='台南'){         
    for ($i = 0; $i < count($Tainan); $i++) {
     $result .= sprintf("<option value='%s'>%s%s</option>", $i, $letter,$Tainan[$i]);  
    } 
}


echo $result;  
 
?>