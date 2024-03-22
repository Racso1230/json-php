<?php

//json format/file
/*$player1 = [
    "name" => "Oscar",
    "age"=> 20,
    "goals"=> 48,
    "averagerating"=> 8.2
];*/

//in order to write to a file the data needs json_encode function to encode it as a string

//$encodedData = json_encode($player1, JSON_FORCE_OBJECT);

//have stored the string the new string that json has encoded for me into a $encodedData vairable

//file_put_contents function (takes two parameters) can create a json file for you and you can pass in the encoded data in it.

//file_put_contents('data.json', $encodedData);


$jsonData = file_get_contents('data.json');

$decodedData = json_decode($jsonData);

echo $decodedData->name;

//file_put contents will overwrite any pre-existing json/any other file with the same name
?>