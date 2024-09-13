<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="website icon" type="png" href="../images/BookBerries-logo.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 20px;
            text-align: center;
        }

        h3 {
            color: #000;
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            color: red;
            display: block;
            margin-top: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body> 
    <?php require_once("Config.php"); ?>
    <h3>Add Category</h3>
    <?php
        $name = "";
        $nameError = "";

        if (isset($_POST["btnSave"])) {
            $name = $_POST["txtCatName"];
            $isValid = true;

            if (empty($name)) {
                $nameError = "Enter a value";
                $isValid = false;
            } else {
                $nameError = "";
            }

            if ($isValid) {
                $query  = "INSERT INTO bookcategory (Name) VALUES ('$name')";
                $result = mysqli_query($con, $query);
                header("Location: index.php"); // Return to list page
            }
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Category Name <input type="text" name="txtCatName" value="<?php echo $name; ?>" />
        <label><?php echo $nameError; ?></label> <br/>
        <input type="Submit" name="btnSave" value="Save"/><br><br>
        <input type="Reset" value="Clear"/>
    </form> 
</body>
</html>
