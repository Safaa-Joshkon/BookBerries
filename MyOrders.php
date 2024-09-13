<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="images/BookBerries-logo.png" />
    <script src="script.js" language="javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </head>
<body>

<?php
include ("authentication.php");
if (!isset($_SESSION["UserId"])) {
    header("Location: Login.php");
    exit(); 
}
?>
<div id="result"><br>
<?php 

$userId = $_SESSION["UserId"];
    require("Config.php");
    $queryBooks = "SELECT B.ID, B.Title, B.Price, B.Image, B.CatId,
    O.OrderDate, O.OrderNb FROM book B 
    INNER JOIN `order` O ON B.ID = O.ItemId 
    WHERE O.UserId = $userId";
    $resultBooks = mysqli_query($con, $queryBooks);

    $queryAccessories = "SELECT A.ID, A.Name, A.Price, A.Image, A.CatId,
    O.OrderDate, O.OrderNb FROM accessories A 
    INNER JOIN `order` O ON A.ID = O.ItemId 
    WHERE O.UserId = $userId";
    $resultAccessories = mysqli_query($con, $queryAccessories);

    $mergedResults = array_merge(mysqli_fetch_all($resultBooks, MYSQLI_ASSOC), mysqli_fetch_all($resultAccessories, MYSQLI_ASSOC));
    usort($mergedResults, function ($a, $b) {
        return strtotime($a['OrderDate']) - strtotime($b['OrderDate']);
    });

    echo '<center>';
    echo'<h5 style="color: blue;"><a href="index.php"><i
    class="fa fa-long-arrow-left me-2"></i>Continue shopping</a></h5><br>';
    echo '<table style="width: 70%; border-collapse: collapse; margin: auto;">';
    echo '<tr>';
    echo '<th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Image</th>';
    echo '<th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Name</th>';
    echo '<th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Price</th>';
    echo '<th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Order Date</th>';
    echo '<th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;"></th>';
    echo '</tr>';

    $totalPrice = 0;

foreach ($mergedResults as $row) {
    echo '<tr>';
    $imgOrName = isset($row['Image']) ? $row['Image'] : $row['Name'];
    echo '<td style="border: 1px solid #ddd; padding: 8px; text-align: center;">';
    echo '<img src="images\\' . $imgOrName . '" height="100px" width="80px" style="margin-bottom: 20px; margin-top: 20px;" />';
    echo '</td>';
    echo '<td style="border: 1px solid #ddd; padding: 8px;">' . (isset($row['Title']) ? $row['Title'] : $row['Name']) . '</td>';
    echo '<td style="border: 1px solid #ddd; padding: 8px;">' . (isset($row['Author']) ? $row['Author'] : $row['Price'] . '$') . '</td>';
    echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['OrderDate'] . '</td>';
    echo '<td style="border: 1px solid #ddd; padding: 8px; text-align: center;">';
        echo '<a href="#" class="delete-btn" data-order-id="' . $row['OrderNb'] . '" data-book-id="' . $row['ID'] . '">';
        echo '<i class="fa fa-trash"></i>';  // Use Font Awesome icon
        echo '</a>';
        echo '</td>';
    echo '</tr>';
    $totalPrice += isset($row['Price']) ? $row['Price'] : 0;
}

echo '<tr>';
    echo '<td style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; font-weight: bold;">Total Price:</td>';
    echo '<td colspan="1" style="text-align: right; border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; font-weight: bold;"></td>';
    echo '<td style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; font-weight: bold; color: #007bff;">' . $totalPrice . '$</td>';
    echo '<td colspan="2" style="text-align: right; border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; font-weight: bold;"></td>';
    echo '</tr>';
    echo '</table>';
    echo '</center>';
    ?>
    </div>

<script  type="text/javascript">
// bind on keyup event to the textbox search
    $(document).ready(function(){ // on page load
        $('#txtSearch').keyup(function(){
        // alert(this.value);
            $.ajax({
                type: "GET",
                url: "search.php",
                data: {'name': this.value},
                success: function(response){// returned result
                    $('#result').html(response);
                }
            });
        });
    });

    $(document).ready(function(){
    // bind on click event to the delete button
    $('.delete-btn').click(function(e){
        e.preventDefault();

        var orderId = $(this).data('order-id');
        var bookId = $(this).data('book-id');
        var accessoriesId = $(this).data('accessories-id');

        // Ask for confirmation
        var confirmDelete = confirm("Are you sure you want to delete this item from your cart?");

        if(confirmDelete) {
            // If user confirms, send AJAX request to delete the item
            var itemType = bookId ? 'book' : 'accessory';
            var itemId = bookId || accessoriesId;

            $.ajax({
                type: "POST",
                url: "deleteOrder.php",
                data: {orderId: orderId, itemId: itemId, itemType: itemType},
                success: function(response){
                    // Update the result div with the new content after deletion
                    $('#result').html(response);
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle errors
                    alert('Error deleting item from the cart.');
                }
            });
        }
    });
});

    </script><br><br>
</body>


</html>