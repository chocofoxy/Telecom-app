<?php

session_start();

include("connect.php") ;

$ref= $_REQUEST['ref'] ;

$user =$_SESSION['id'] ;

$result = $conn->query(" delete from stock where numc='$ref' ; ") ;
$conn->exec(" insert into logtable values ('$user',Deleted,'$Ref',DEFAULT) ; ") ;


echo "true" ;


?>
