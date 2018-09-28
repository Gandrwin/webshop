<?php

$sId = $_GET['id'];

$sData = file_get_contents('data.txt');
$jData = json_decode($sData);

unset($jData->$sId);

$sData = json_encode($jData);
file_put_contents('data.txt', $sData);

echo json_encode($jData);