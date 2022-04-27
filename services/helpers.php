<?php

// (string)JSON -> OBJ
function json_to_object($string):stdClass {
    return json_decode($string);
}
function obj_to_json($string):string {
    return json_encode($string);
}
// Create (string)JSON 
function init_obj_in_db():string {
    $obj = new stdClass;
    return json_encode($obj);
}
function add_property_in_obj($obj, $property_name, $property_data):stdClass {
    $obj->$property_name = $property_data;
    return $obj;
}
function edit_property_data_in_obj($obj, $property_name, $property_data):stdClass {
    $obj->$property_name = $property_data;
    return $obj;
}
function edit_property_name_in_obj($obj, $property_name, $new_name):stdClass {
    $obj->$name = $obj->$property_name;
    unset($obj->$property_name);
    return $obj;
}
function delete_property_in_obj($obj, $property_name):stdClass {
    unset($obj->$property_name);
    return $obj;
}

// // Insert data in (string)JSON
// function insertInJSONdb($string, $newStringForInsert):string{
//     $data = substr($string, 0, -1);
//     $newData = substr($newStringForInsert, 1, -1);
//     $data .= ',';
//     $data .= $newData;
//     $data .= '}';
//     return $data;
// }