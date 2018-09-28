<?php

if ( !empty($_POST['name']) && !empty($_POST['price'])) {
//open file with json object
$sData = file_get_contents('data.txt');

//convert the text to an object
$sData = json_decode($sData);

// $jProducts = json_decode('{}');
$sRandomID = uniqid('ID');

$jProduct = json_decode('{}');
$jProduct->name = $_POST['name'];
$jProduct->price = $_POST['price'];

$sData->$sRandomID = $jProduct;
//save the json object back tot the file_get_contents
//remember you cannot save objects into files
//convert the object back to text
$sData = json_encode($sData);
file_put_contents('data.txt', $sData);
unset($_POST);
}
?>

<form action="save-product.php" method="POST">
    <input type="text" placeholder="product" name="name">
    <input type="text" placeholder="price" name="price">
    <button>Add</button>
</form>

