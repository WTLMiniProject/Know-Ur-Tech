<?php
include 'header.php';
// Should be the user submitted value to delete.
// Perhaps a $_GET or $_POST value check.
$value_to_delete = $_GET['id'];  
// var_dump($cookie);
// var_dump($value_to_delete);
// Should be the cookie value from $_COOKIE['myCookie'] or whatever the name is.
// Decode from JSON values if needed with json_decode().
// $cookie_items = array( 
//     array("item_id" => 9, "item_tag" => "RN"), 
//     array("item_id" => 6, "item_tag" => "RN"), 
//     array("item_id" => 4, "item_tag" => "RN")
// );
// var_dump($cookie[$value_to_delete]['pid']);
// Run through each item in the cart 
foreach($cookie as $index => $value)
{
    $key = array_search($value_to_delete, $value);

    if($key == $cookie[$value_to_delete]['pid'])
    {
        unset($cookie[$index]);
    }
}
// Reset the index
$cookie = array_values($cookie);
// Set the cookie
setcookie('cart', json_encode($cookie));
// Debug to view the set values in the cookie
print_r($cookie);
// echo'<script> window.location="cart.php"; </script>';
?>