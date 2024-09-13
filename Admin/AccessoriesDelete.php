<?php

require_once("Config.php");
$idTodelete = base64_decode($_GET["p"]);
$query = "DELETE FROM accessories WHERE ID = $idTodelete";
$result = mysqli_query($con, $query);
if(!$result)
{
    echo "". mysqli_error($con);
}
else
    header("Location: Accessories.php");

?>