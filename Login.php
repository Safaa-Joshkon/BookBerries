<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="images/BookBerries-logo.png" />
</head>
<body>
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
            </div>
        </div>
</nav>
<div>
        <div class="container-fluid">
            <div class="row d-flex ">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="images/sign1.png" class="img-fluid">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
                    <form method="post" action="LoginAction.php">
						<?php
						session_start();
						if(isset($_SESSION["ERROR"]))
							echo "<span style='color:red;'>" .$_SESSION["ERROR"] . "</span><br/>";
						?>
                        <div class="text-center mb-3">
                            <h5>Sign in with:</h5>
                            <button type="button" class="btn btn-link btn-floating social">
                                <a href="#" class="fa fa-facebook" target="_blank"></a>
                            </button>
                            <button type="button" class="btn btn-link btn-floating social">
                                <a href="#" class="fa fa-twitter" target="_blank"></a>
                            </button>
                            <button type="button" class="btn btn-link btn-floating social">
                                <a href="#" class="fa fa-google" target="_blank"></a>
                            </button>
                        </div>
                        <div class="divider d-flex">
                            <p class="mx-3 mb-0 or"><b>Or</b></p>
                        </div><br>
                        <!-- Email input -->
                        <div class="media">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"
                                    aria-hidden="true"></i></span>
                            <label class="form-label">Username</label>
                            <input type="text" name="Username" class="form-control form-control-lg"
                                placeholder="Enter a valid username" required />
                        </div><br>
                        <!-- Password input -->
                        <div class="media ">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                            <label class="form-label">Password</label>
                            <input type="password" name="Pass" class="form-control form-control-lg"
                                placeholder="Enter your password" required />
                        </div><br>
                        <div class="d-flex check ">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" />
                                <label class="form-check-label">
                                    Remember me
                                </label>
                            </div>
                            <a href="#">Forgot password?</a>
                        </div><br>
                        <div>
                            <button type="submit" value="Login" class="btn btn-primary btn-lg login">Login</button><br><br>
							<input type='Reset' value="Cancel"/><br/><br>
                            <p><b>Don't have an account?</b><a href="Register.php"
                                    class="link-danger"> Create an Account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>