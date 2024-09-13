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
    <h3>Books</h3>
    <a href="ItemAdd.php">Add new Books</a>
    <?php 
    
    $query = "SELECT B.ID, B.Title, B.Author, B.Price, B.Image, B.CatId,
    C.Name as CatName FROM book B
    INNER JOIN bookcategory C ON B.CatId = C.ID ";

    $result = mysqli_query($con, $query);
    echo "<table class='table table-bordered' >";
    echo "<tr>
            <th></th> 
            <th> Title </th> 
            <th> Author </th> 
            <th> Price </th>
            <th> Category </th>
            <th></th> 
			<th></th> 
        </tr>";
    while( $row = mysqli_fetch_array($result) ) {
            echo "<tr>";
            $img = $row["Image"];
            echo "<td><img src='..\\images\\$img' height='50px' width='50px'/> </td>";
            echo "<td>".$row["Title"]."</td>";
            echo "<td>".$row["Author"]."</td>";
            echo "<td>".$row["Price"]."</td>";
            echo "<td>".$row["CatName"]."</td>";
            $id = $row["ID"];
            $id= base64_encode($id);
            echo "<td><a href='ItemEdit.php?q=$id'>Edit</td>";
            echo "<td><a href='ItemDelete.php?x=$id'onclick='return confirm(\"Are you sure?\")'>Delete</td>";
            echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>