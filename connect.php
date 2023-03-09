<?php

include "config.php";
$conn = mysqli_connect($serwer,$user,$password,$baza);


mysqli_close($conn);

?>