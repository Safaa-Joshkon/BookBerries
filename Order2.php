<html>
  <head><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBerries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="images/BookBerries-logo.png" />
    <script src="script.js" language="javascript"></script>
  </head>
<body>
<?php
	include ("authentication.php");
	
if(!isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] != 1){
	header("Location: login.php");
}
    require("Config.php");

    // display the item to be ordered
    $itemId = base64_decode($_GET["x"]); 
    $query = "SELECT A.ID, A.Name, A.Price, A.Image, A.CatId,
    C.Name as CatName FROM accessories A
    INNER JOIN bookcategory C ON A.CatId = C.ID 
    WHERE A.ID = $itemId ";

    $result = mysqli_query($con, $query);

    echo '<center>';
    echo "<table border='1' width='70%' style='border-collapse: collapse; margin: auto;'>";
    echo "<tr> 
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;'></th> 
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;'>Name</th> 
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;'>Price</th>
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;'>Category</th>
        </tr>";
    while( $row = mysqli_fetch_array($result) ) {
      echo "<tr>";
      $img = $row["Image"];
      echo "<td align='center' style='border: 1px solid #ddd; padding: 8px;'>
              <img src='images\\$img' height='100px' width='80px' style='margin-bottom:20px;'/>
            </td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["Name"]."</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["Price"]."$</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["CatName"]."</td>";
      echo "</tr>";
    }
    echo "</table>";

    // link to proceed        
    $id = base64_encode($itemId);
    echo "<div style='margin-top: 20px; text-align: center;'>
            <a href='Order2Action.php?x=$id' class='btn btn-primary' onclick='return confirm(\"Are you sure?\")'>
              Buy
            </a>
            <a href='UserProfile.php' class='btn btn-primary'>Back to List</a>
          </div>";
    echo '</center>';
    ?>

</body>
</htm>