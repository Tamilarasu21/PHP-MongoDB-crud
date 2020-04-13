<?php
$bulk=new MongoDB\Driver\BulkWrite;

include "config.php";

$id=$_GET['id'];

$bulk->delete(['_id'=>new MongoDB\BSON\ObjectID($id)]);

$result=$client->executeBulkWrite('sample.php_mongo_crud',$bulk);

header("Location:view.php");
?>