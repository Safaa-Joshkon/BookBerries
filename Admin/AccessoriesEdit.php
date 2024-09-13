<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBerries - Edit Accessories Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="../images/BookBerries-logo.png" />
    <script src="script.js" language="javascript"></script>
    <style>
        body {
            text-align: center;
            color: black;
            background-color: #f8f9fa;
            padding: 20px;
        }
        h3 {
            color: black;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        label {
            color: black;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #007bff; 
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>  
    <?php require_once("Config.php"); ?>
    <center><h3>Edit Accessories Info</h3></center>
    <?php
        $name=""; $nameError="";
        $price=""; $priceError="";
        $cat=-1;
		
        $idToEdit = base64_decode($_GET["q"]);		
        $query = "SELECT * FROM accessories WHERE ID = $idToEdit";
        $result = mysqli_query($con, $query);
        while( $row = mysqli_fetch_array($result) ) {
            $name = $row["Name"];
            $price = $row["Price"];
            $cat = $row["CatId"];
        }
		
        if(isset($_POST["btnSave"])){ 
            // check validation:
            $name = $_POST["txtName"];
            $price = $_POST["txtPrice"];
            $cat = $_POST["cat"];
            $isValid = true;
            // check textbox title
            if($name == ""){
                $nameError = "Enter a value";
                $isValid = false;
            }
            else
                $nameError = "";
            // check textbox price
            if($price == "" || !is_numeric($price) || $price <= 0){
                $priceError = "Enter a valid price";
                $isValid = false;
            }
            else
                $priceError = "";

            if($isValid){
                $query  = "UPDATE accessories SET Name = '$name', Price = '$price' , CatId='$cat' WHERE ID = $idToEdit";
                $result = mysqli_query($con, $query);
                header("Location: Accessories.php"); // return to list page
            }
        }
    ?>
    <form method="post" action="">
        <label for="txtName">Accessories Name</label>
        <input type="text" name="txtName" value="<?php echo $name; ?>" />
        <label style="color:black"><?php echo $nameError; ?></label> <br/>

        <label for="txtPrice">Accessories Price</label>
        <input type="number" name="txtPrice" value="<?php echo $price; ?>" />
        <label style="color:black"><?php echo $priceError; ?></label> <br/>

        <label for="cat">Accessories Category</label>
        <select name="cat">
            <?php
                $query = "SELECT * FROM bookcategory";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row["ID"];
                    $cattitle = $row["Name"];                            
                    if($cat == $id) 
                        echo "<option value='$id' selected>$cattitle </option>";
                    else
                        echo "<option value='$id'>$cattitle </option>";
                }
            ?>
        </select>
        <br/><br>
        <input type="submit" name="btnSave" value="Save" /><br><br>
        <input type="reset" value="Clear" />
    </form>
</body>
</html>
