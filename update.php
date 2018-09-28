<?php

/*
we need to update the data
you can only update the name of the product
that the product id and the new name for the product
will be passed in the URL
localhost/webshop/update.php?id=ID5b90d742bc402&name=XXXXXX
localhost/webshop/update.php?name=XXXXXX&id=ID56yt576

then your logic, your coding skills come in place
???????????
*/
$sId = $_GET['id'];
$sName = $_GET['name'];

$sData = file_get_contents('data.txt');
$jData = json_decode($sData);
//update the name
$jData->$sId->name = $sName;
// save the data back to the file
$sData = json_encode($jData);
file_put_contents('data.txt', $sData);

// $sData = file_get_contents('data.txt');
