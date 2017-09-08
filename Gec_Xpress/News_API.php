<?php
    $urlSources= file_get_contents("https://newsapi.org/v1/articles?source=techcrunch&sortBy=latest&apiKey=ba5a3428890d4a4db956dd96812cb652");
    
    //print_r($urlSources);
    
   $urlSourcesArray = json_decode($urlSources,TRUE);
//print_r($urlSourcesArray);
for($i=0;$i<5;$i++)
{
//echo $i;
$sites= $urlSourcesArray['articles'][$i];
echo "<p style='font-size: 15px;'><span class='fa fa-comments' style='font-size: 20px;padding-left: 10px;'></span><span style='padding-left: 10px;'>".substr($sites['title'],0,40)."....</span></p>";

}
?>