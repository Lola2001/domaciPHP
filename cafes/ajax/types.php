<?php

$types[] = 'Traditional Cafe';
$types[] = 'Coffee Shop Business';
$types[] = 'Pastry Cafe';
$types[] = 'Craft Coffee Roaster';
$types[] = 'Coffee Truck';
$types[] = 'Drive-thru';
$types[] = 'Bookstore Coffee Shop';
$types[] = 'Delivery Only Coffee Business';
$types[] = 'French Style Café';
$types[] = 'Italian Style Café';


$query = $_REQUEST['query'];
$suggestion = "";  // responseText

if ($query !== "") {
    $query = strtolower($query);
    $length = strlen($query);

    foreach ($types as $type) {
        if (stristr($query, substr($type, 0, $length))) {
            if ($suggestion == "") {
                $suggestion = $type;
            } else {
                $suggestion .= ", $type";
            }
        }
    }
}
if ($suggestion == "") {
    echo 'No suggestions';
} else {
    echo $suggestion;
}
