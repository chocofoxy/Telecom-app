<?php
session_start();

include "connect.php" ;

$numc    = isset($_POST['ndoc'])?$_POST['ndoc']:null ;
$client  = isset($_POST['client'])?$_POST['client']:null ;
$Ref     = isset($_POST['ref'])?$_POST['ref']:null ;
$type    = isset($_POST['type_select'])?$_POST['type_select']:null ;
$Router  = isset($_POST['router_select'])?$_POST['router_select']:null ;
$Mod1    = isset($_POST['module_select'][0])?$_POST['module_select'][0]:null ;
$Mod2    = isset($_POST['module_select'][1])?$_POST['module_select'][1]:null ;
$Mod3    = isset($_POST['module_select'][2])?$_POST['module_select'][2]:null ;
$Carte1  = isset($_POST['carte_select'][0])?$_POST['carte_select'][0]:null ;
$Carte2  = isset($_POST['carte_select'][1])?$_POST['carte_select'][1]:null ;
$Carte3  = isset($_POST['carte_select'][2])?$_POST['carte_select'][2]:null ;
$DateC   = isset($_POST['datec'])?$_POST['datec']:null ;
$Com     = isset($_POST['com'])?$_POST['com']:null ;

$res = $conn->query(" select * from stock where numc='$numc' ; ") ;

if ( $res->rowCount() == 0 )

{ $_SESSION['ERROR2'] = true ; }

else {

$user = $_SESSION['id'] ;

$conn->query(" update stock set  type = '$type', Router = '$Router', Mod1 = '$Mod1', Mod2 = '$Mod2', Mod3 = '$Mod3', Carte1 = '$Carte1', Carte2 = '$Carte2', Carte3 = '$Carte3', DateC = '$DateC', Com = '$Com' where numc = '$numc' ; ") ;
$conn->query(" insert into logtable values ('$user',updated,'$numc',DEFAULT) ; ") ;
$_SESSION['ERROR2'] = false ; }


header('Location:./Dashboard.php') ;

?>
