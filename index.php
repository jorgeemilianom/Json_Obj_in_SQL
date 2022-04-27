<?php
require('services/helpers.php');
$connection = new mysqli('localhost', 'root', '', 'test');
$datos = mysqli_query($connection, "SELECT * FROM datos WHERE id = 1");
$datos = $datos->fetch_assoc()['data'];

// ADD INFO IN JSON
// $var1 = createJSONdb('address', 'Juan del campillo 1413');

//
// $stringUpdated = insertInJSONdb($var1, $newString);
$obj = json_to_object($datos);
$data = 'otro analisis';
$x = edit_property_data_in_obj($obj, $name_analysis, $data);
// $obj->gender = 'Male';
// unset($obj->name);
// // $obj->name = 'pepito';
// $x = createJSONdb();
$obj->name_analysis = 'otro analisis';
var_dump($obj->name_analysis);




?>