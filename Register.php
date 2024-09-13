<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="images/BookBerries-logo.png" />
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>
<body>
<form class="h-100" method="post" action="RegisterAction.php">
<?php
session_start();
if(isset($_SESSION["ERROR_Reg"]))
	echo "<span style='color:red;'>" .$_SESSION["ERROR_Reg"] . "</span><br/>";
?>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-creation my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="images/Create Account.jpg" class="img-fluid"
                                    style=" height: 420px; width:72%; margin-left: 85px; margin-top: 100px;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Create Account</h3>
                                    <div class="row">
                                        <div class="form-outline mb-4">
                                            <div class="form-outline">
                                                <input type="text" class="form-control form-control-lg" name="Username"id="Username"
                                                    placeholder="Username" required/>
                                                    <label id="lblError"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg"
                                            placeholder="Email" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg" placeholder="Address" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="Pass" class="form-control form-control-lg"
                                            placeholder="Password" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="Confirm" class="form-control form-control-lg"
                                            placeholder="Confirm Password" required/>
                                    </div>
                                    <div class="justify-content-start ">
                                        <button type="Submit" class="btn btn-primary btn-lg ms-2">Create account</button><br><br>
                                        <input type='Reset' value="Cancel"/>
                                        <p><b>Already have an account?</b><a href="Login.php"
                                                class="link-danger">
                                                Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<script type="text/javascript">
$(document).ready(function() {
    $('#Username').blur(function() {
        $.ajax({
            type: "GET",
            url: 'username_vlidation.php',
            data: {
				'name': this.value
			},
            success: function(response)
            {
				$('#lblError').html(response);
           }
       });
     });
});
</script>
<!-- Footer -->
<footer class="text-center text-lg-start text-dark foot bg-light">
        <section class="d-flex justify-content-center p-4 text-dark border-bottom connect ">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="media">
                <a href="https://www.facebook.com/profile.php?id=100063305825552&mibextid=ZbWKwL" target="_blank"
                    class="text-dark me-4">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="text-dark me-4">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="text-dark me-4">
                    <i class="fa fa-google"></i>
                </a>
                <a href="https://instagram.com/book_berries__?igshid=MmJiY2I4NDBkZg==" target="_blank"
                    class="text-dark me-4">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold type">BookBerries</h6>
                        <hr>
                        <p>BookBerries offers a huge collection of books from diverse categories of Fiction,
                            Non-fiction,
                            Biographies, Self-Help, etc.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold type">Products</h6>
                        <p>
                            <a href="index.php #newReleases" class="text-dark">New Releases</a>
                        </p>
                        <p>
                            <a href="index.php #best" class="text-dark">Bestsellers</a>
                        </p>
                        <p>
                            <a href="index.php #collections" class="text-dark">Collections</a>
                        </p>
                        <p>
                            <a href="index.php #accessories" class="text-dark">Accessories</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold type">About</h6>
                        <p>
                            <a href="index.php" target="_blank" class="text-dark">Home</a>
                        </p>
                        <p>
                            <a href="about.php" target="_blank" class="text-dark">About Us</a>
                        </p>
                        <p>
                            <a href="privacypolicy.php" target="_blank" class="text-dark">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="contact.php" target="_blank" class="text-dark">Contact Us</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold type">Contact</h6>
                        <p><i class="fa fa-home me-3"></i> Beirut, Down Town, Lebanon</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            BookBerries@gmail.com
                        </p>
                        <p><i class="fa fa-phone me-3"></i> + 961 81 414 537</p>
                        <p><i class="fa fa-print me-3"></i> + 961 1 414 538</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        <div class="text-center p-3 Copyright">
            © 2023 Copyright:
            <a class="type" href="index1.php">BookBerries.com</a>
        </div>
    </footer>
</body>

</html>