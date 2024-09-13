<?php
$value = $_GET["name"]; // sent from ajax data
require("Config.php");
    $query = "SELECT B.ID, B.Title, B.Author, B.Price, B.Image, B.CatId,
    C.Name as CatName FROM book B
    INNER JOIN bookcategory C ON B.CatId = C.ID 
    WHERE B.Title LIKE '%$value%'
    ";

$query2 = "SELECT A.ID, A.Name, A.Price, A.Image, A.CatId,
C.Name as CatName FROM accessories A 
INNER JOIN bookcategory C ON A.CatId = C.ID WHERE A.Name LIKE '%$value%'";

    $result = mysqli_query($con, $query);
    echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
    while( $row = mysqli_fetch_array($result) ) {
      echo "<div style='border: 1px solid #ced4da; border-radius: 15px; width:270px; padding: 5px; margin:5px; text-align: center;'>";
      $img = $row["Image"];
      echo "<img src='images\\{$row["Image"]}' height='210px' width='150px'style='margin-top: 20px;'/><br>";
      echo "<br/>"."<h6>".$row["Title"]."</h6>";
      echo $row["Author"];
      echo "<div style='color: #d82e2e;'>".$row["CatName"]."</div>";
      echo "<h4>".$row["Price"] ."$"."</h4>";
      $id = $row["ID"]; // Item Id
      $id = base64_encode($id);
      echo "<br/><div class='check'><a class='btn btn-primary' href='Order.php?x=$id'>Add to Cart</a></div><br>";
      echo "</div>";
    }
    echo "</div><br>";

    $result = mysqli_query($con, $query2);
    echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
    while( $row = mysqli_fetch_array($result) ) {
      echo "<div style='border: 1px solid #ced4da; border-radius: 15px; width:270px; padding: 5px; margin:5px; text-align: center;'>";
      $img = $row["Image"];
      echo "<img src='images\\{$row["Image"]}' height='210px' width='150px'style='margin-top: 20px;'/><br>";
      echo "<br/>"."<h6>".$row["Name"]."</h6>";
      echo "<div style='color: #d82e2e;'>".$row["CatName"]."</div>";
      echo "<h4>".$row["Price"] ."$"."</h4>";
      $id = $row["ID"]; // Item Id
      $id = base64_encode($id);
      echo "<br/><div class='check'><a class='btn btn-primary' href='Order.php?x=$id'>Add to Cart</a></div><br>";
      echo "</div>";
    }
    echo "</div>";
    ?>