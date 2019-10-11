<?php
session_start();
include "connect.php" ;

function check_exist ( $x , $y , $conn ) {

  $res = $conn->query(" select * from $x where id='$y' ;");

  return ($res->rowCount() > 0) ;


}

function execute_request ( $x , $y , $z , $conn) {

  if ( $x === 'delete' ) {
    if (check_exist($y,$z,$conn)) {

      $conn->query("delete from $y where id='$z' ; ");
      $conn->query("insert into logtable values ('Admin','deleted','$z',DEFAULT) ; ");
      echo " Succeed : You deleted an item ! " ;

    } else {

      echo " Failed : Already doesn't exist ! " ;

    }}
  elseif ( $x === 'add' ) {
    if (!check_exist($y,$z,$conn)) {

      $conn->query("insert into $y values ('$z') ; ");
      $conn->query("insert into logtable values ('Admin','added','$z',DEFAULT) ; ");
      echo " Succeed : You added new item ! " ;

    } else {

      echo " Failed : Already exist ! " ;

    }

  }

}



if ( $_SESSION['id'] != 'ROOT') {

  echo " Failed : You have no permisson ! " ; }
  else {

  switch ($_REQUEST['type']) {

    case 'ltype'  : { execute_request($_REQUEST['action'],'types',urldecode($_REQUEST['value']),$conn) ; break; }
    case 'module' : { execute_request($_REQUEST['action'],'modules',urldecode($_REQUEST['value']),$conn) ; break; }
    case 'router' : { execute_request($_REQUEST['action'],'routers',urldecode($_REQUEST['value']),$conn) ; break; }
    case 'carte'  : { execute_request($_REQUEST['action'],'cartes',urldecode($_REQUEST['value']),$conn) ; break; }
    default       : { echo " this table doesn't exist !  " ; break ; }

  }

}






















?>
