<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <style>
        body {
            text-align: center;
            color: black;
            background-color: #f8f9fa; 
            padding: 20px;
        }
        h1 {
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
        input {
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
    <center><h3>Edit Category</h3></center>
    <?php
        $name=""; $nameError="";
        $idToEdit = base64_decode($_GET["q"]); //la treda la asla coz bil index 3melnela encoding
        $query = "SELECT * FROM bookcategory WHERE ID = $idToEdit";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
            $name = $row["Name"];
        }

        if(isset($_POST["btnSave"])){ 
            // check validation:
            $name = $_POST["txtCatName"];
            $isValid = true;

            if($name == ""){
                $nameError = "Enter a value";
                $isValid = false;
            }
            else {
                $nameError = "";
            }

            if($isValid){
                $query  = "UPDATE bookcategory SET Name = '$name'  WHERE ID = $idToEdit";
                $result = mysqli_query($con, $query);
                header("Location: index.php"); // return to list page
            }
        }
    ?>
    <form method="post" action="">
        <label for="txtCatName">Category Name</label>
        <input type="text" name="txtCatName" value="<?php echo $name; ?>" />
        <label style="color:black"><?php echo $nameError; ?></label> <br/>
        <input type="submit" name="btnSave" value="Save" /><br><br>
        <input type="reset" value="Clear" />
    </form> 
</body>
</html>
