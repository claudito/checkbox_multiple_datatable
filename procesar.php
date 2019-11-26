<?php 

$items = json_decode($_REQUEST['items'],TRUE);


$items = implode($items,',');

echo $items;


 ?>p
