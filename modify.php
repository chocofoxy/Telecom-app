<?php

indclude("connect.php") ;

$Ref = $_POST['ref'] ;
$Router = $_POST['router'] ;
$Mod = $_POST['mod'] ;
$Carte = $_POST['carte'] ;
$DateC = $_POST['datec'] ;


$result = $conn->query("update stock set Router='$Router' , Mod='$Mod' , Carte='$Carte' , DateC='$DateC'  where Ref='$Ref' ; ") ;



?>
