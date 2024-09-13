<nav class="navbar navbar-expand-sm bg-white sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" ><img src="images/BookBerries-logo.png"
                    style="height: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" >Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Login.php" >Sign-In</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Logout.php" >Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="MyOrders.php" ><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" id="txtSearch" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
</nav>
<?php
session_start();
if(isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] == 1){
	echo "<center><h4> Welcome " . $_SESSION["Username"] . "</h4><center>";
}
// else
// echo '<a href="login.php">login</a><br/><br/>';
?>



