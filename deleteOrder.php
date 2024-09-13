<?php
// deleteOrder.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the necessary data is provided
    if (isset($_POST["orderId"]) && isset($_POST["itemId"]) && isset($_POST["itemType"])) {
        $orderId = $_POST["orderId"];
        $itemId = $_POST["itemId"];
        $itemType = $_POST["itemType"];

        // Your logic to delete the item from the database
        require("Config.php");

        $deleteQuery = "";
        if ($itemType === "book") {
            $deleteQuery = "DELETE FROM `order` WHERE OrderNb = $orderId AND ItemId = $itemId";
        } elseif ($itemType === "accessory") {
            $deleteQuery = "DELETE FROM `order` WHERE OrderNb = $orderId AND ItemId = $itemId";
        } else {
            echo "Invalid item type.";
            exit();
        }

        $deleteResult = mysqli_query($con, $deleteQuery);

        if ($deleteResult) {
            echo "Item successfully deleted from your cart.";
        } else {
            echo "Error deleting item from the cart.";
        }

        mysqli_close($con);
    } else {
        echo "Invalid data provided.";
    }
} else {
    echo "Invalid request method.";
}
?>
