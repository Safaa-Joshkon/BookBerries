<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBerries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="../images/BookBerries-logo.png" />
    <script src="script.js" language="javascript"></script>
</head>
<body>
    <?php require_once("Config.php"); ?>     
    <h3>Categories</h3>
    <a href="CategoryAdd.php">Add New Category</a>   
    <?php 
    
    $query = "SELECT * FROM bookcategory";
    $result = mysqli_query($con, $query);
    echo "<table class='table table-bordered' >";
    echo "<tr> <th> Name </th> <th></th>  <th></th> </tr>";
    while( $row = mysqli_fetch_array($result) ) {
            echo "<tr><td>".$row["Name"]."</td>";
            $id = $row["ID"];
            $id= base64_encode($id);
            echo "<td><a href='CategoryEdit.php?q=$id'>Edit</a></td>";
            echo "<td><a href='CategoryDelete.php?id=$id'onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
            echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>