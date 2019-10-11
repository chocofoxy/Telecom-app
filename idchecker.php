<?php

indclude("connect.php") ;

$ref= $_POST['ref'] ;

$result = $conn->query(" select * from stock where Ref='$ref' ; ") ;

if ( $result->num_rows === 0 )

{ echo "true" ; }

else

{ echo "false" ; }


?>
