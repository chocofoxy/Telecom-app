<?php

session_start() ;

if ( isset($_POST['login']) && isset($_POST['password']) ) {

if ( $_POST['login'] === 'ADMIN'  && $_POST['password'] === 'ADMIN' ) 

{ $_SESSION['id'] = 'ROOT' ; }

else if (  $_POST['login'] === 'EMP'  && $_POST['password'] === 'EMP' )

{ $_SESSION['id'] = 'EMP' ;  } 

else

{ $_SESSION['id'] = 'WRONG' ; 
  header('Location:./test.php');
  exit ;}

header('Location:./Dashboard.php');

}
else
{ header('Location:./test.php'); }
?>
