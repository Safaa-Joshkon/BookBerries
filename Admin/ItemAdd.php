<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="website icon" type="png" href="../images/BookBerries-logo.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #000;
            text-align: center;
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

        label {
            color: red;
            display: block;
            margin-top: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
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
    <center><h3>Add Books</h3></center>
    <?php
        $title = ""; $titleError = "";
        $author = ""; $authorError = "";
        $price = ""; $priceError = "";
        $img = ""; $imgError = "";
        $cat = -1;

        if (isset($_POST["btnSave"])) {
            $title = $_POST["txtTitle"];
            $author = $_POST["txtAuthor"];
            $price = $_POST["txtPrice"];
            $cat = $_POST["cat"];
            $img = $_FILES["Image"]["name"];
            $isValid = true;

            if ($title == "") {
                $titleError = "Enter a value";
                $isValid = false;
            } else {
                $titleError = "";
            }

            if ($author == "") {
                $authorError = "Enter a value";
                $isValid = false;
            } else {
                $authorError = "";
            }

            if ($price == "" || !is_numeric($price) || $price <= 0) {
                $priceError = "Enter a valid price";
                $isValid = false;
            } else {
                $priceError = "";
            }

            $allowedExts = array("gif", "jpeg", "jpg", "png", "webp");
            $extension = strtolower(pathinfo($_FILES["Image"]["name"], PATHINFO_EXTENSION));

            if (($_FILES["Image"]["size"] > 500000) || !in_array($extension, $allowedExts)) {
                $imgError = "Image is not accepted";
                $isValid = false;
            } else {
                $imgError = "";
            }

            if ($isValid) {
                $img_new_name = rand() . $img;
                move_uploaded_file($_FILES["Image"]["tmp_name"], "../images/" . $img_new_name);

                $query  = "INSERT INTO book (Title, Author, Price, Image, CatId) 
                            VALUES ('$title','$author', $price,'$img_new_name', $cat)";
                $result = mysqli_query($con, $query);

                header("Location: itemList.php"); // return to list page
            }
        }
    ?>
    <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Book Title <input type="text" name="txtTitle" value="<?php echo $title; ?>" />
        <label style="color:red"><?php echo $titleError; ?></label> <br/>

        Book Author <input type="text" name="txtAuthor" value="<?php echo $author; ?>" />
        <label style="color:red"><?php echo $authorError; ?></label> <br/>

        Book Price <input type="number" name="txtPrice" value="<?php echo $price; ?>" />
        <label style="color:red"><?php echo $priceError; ?></label> <br/>

        Book Category <select name="cat">
            <?php
                $query = "SELECT * FROM bookcategory";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row["ID"];
                    $catname = $row["Name"];                            
                    if($cat == $id) 
                        echo "<option value='$id' selected>$catname </option>";
                    else
                        echo "<option value='$id'>$catname </option>";
                }
            ?>
        </select>
        <br/><br>

        Image <input type="file" name="Image"/>
        <label style="color:red"><?php echo $imgError; ?></label> <br/><br/>

        <input type="Submit" name="btnSave" value="Save"/><br><br>
        <input type="Reset" value="Clear"/>
    </form>
</body>
</html>
