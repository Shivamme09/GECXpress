<?php
    $urlSources= file_get_contents("http://quotes.rest/qod.json");
    
    print_r($urlSources);
    
   $urlSourcesArray = json_decode($urlSources,TRUE);
print_r($urlSourcesArray);
//for($i=0;$i<5;$i++)
//{
//echo $i;
$sites= $urlSourcesArray['quotes'];
echo $sites['quotes']."<br>";

//}
?>