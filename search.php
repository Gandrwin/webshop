<?php 

$sSearchFor = $_GET['name'];

$sData = file_get_contents('data.txt');
$jProducts = json_decode($sData);

foreach($jProducts as $jProduct){
    if( stripos($jProduct->name, $sSearchFor) > -1){
        echo $jProduct->name;
    }
}


