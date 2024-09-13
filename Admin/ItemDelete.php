<?php

require_once("Config.php");
$idTodelete = base64_decode($_GET["x"]);
$query = "DELETE FROM book WHERE ID = $idTodelete";
$result = mysqli_query($con, $query);
if(!$result)
{
    echo "". mysqli_error($con);
}
else
    header("Location: ItemList.php");

?>