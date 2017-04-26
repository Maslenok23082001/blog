<?php
require_once "database.php";
$result = $base->query("SELECT * FROM `categories_blog`");
$n=0;
while($row = $result->fetch_assoc()){

    $arr1[$n]=$row['title'];
    $n++;
}
?>