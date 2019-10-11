<?php
include "connect.php" ;

$order = isset($_REQUEST['order'])?$_REQUEST['order']:'Ref' ;
$type  = isset($_REQUEST['type'])?$_REQUEST['type']:null ;
$search  = isset($_REQUEST['search'])?$_REQUEST['search']:null ;


if ( $search != null )

{ $data = $conn->query(" select * from stock where numc like '%$search%' or client like  '%$search%' or Ref like '%$search%' order by $order ;") ; }

else if ( $type != null )

{ $data = $conn->query(" select * from stock where type='$type' order by $order ;") ; }

else

{ $data = $conn->query(" select * from stock order by $order ;") ; }

 $html = "<tr><th> C Info </th><th> Router </th><th> modules </th><th> cartes </th><th> date </th> <th> Note </th></tr> " ;
while (	$row = $data->fetch() ) {
 $html .= "<tr id=".$row[0]."><td><p>".$row[0]."</p><p>".$row[1]."</p><p>".$row[2]."</p></td><td><p>".$row[4]."</p></td><td><p>".$row[5]."</p><p>".$row[6].
 "</p><p>".$row[7]."</p></td><td><p>".$row[8]."</p><p>".$row[9]."</p><p>".$row[10]."</p></td><td><p>".$row[11]."</p></td><td><p>".$row[12]."</p></td><td><img class='img'  onclick='delete_this(this);'  src='./Recycle_Bin_Full.png' /><img class='img'  onclick='modify(this);'  src='./modify_1_01__709180.png' /></td></tr>" ;
}

echo $html ;

?>
