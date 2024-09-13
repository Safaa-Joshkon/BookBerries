<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="website icon" type="png" href="images/BookBerries-logo.png" />
    <script src="script.js" language="javascript"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-white sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/BookBerries-logo.png"
                    style="height: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
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
                            <li><a class="dropdown-item" href="Login.php">Sign-In</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="MyOrders.php"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="text" id="txtSearch" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form> -->
            </div>
        </div>
</nav>


<div id="result">

    <div class="divider d-flex type">
        <h3 class="mx-3 mb-0 or">BookBerries's Help Center</h3>
    </div>
    <center>
        <div class="row row-cols-1 row-cols-md-3 g-4 contact">
            <div class="col hc">
                <a href="MyOrders.php" target="_blank">
                    <div class="card">
                        <center><img src="images/Orders.png" class="card-img-top" alt="Orders"></center>
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            <p class="card-text">Tracing packages, order history and more</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col hc">
                <a href="signin.php" target="_blank">
                    <div class="card">
                        <center><img src="images/account.png" class="card-img-top" alt="Accounts"></center>
                        <div class="card-body">
                            <h5 class="card-title">Account</h5>
                            <p class="card-text">Manage your account preference</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col hc">
                <a href="contact.php #contact">
                    <div class="card">
                        <center><img src="images/Shipping.png" class="card-img-top" alt="Shipping">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">Shipping & Returns</h5>
                            <p class="card-text">Get answers on how to return or exchange items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col hc">
                <a href="signin.php" target="_blank">
                    <div class="card">
                        <center><img src="images/Membership.png" class="card-img-top" alt="Membership"
                                style="width: 95px; height: 90px"></center>
                        <div class="card-body">
                            <h5 class="card-title">Membership</h5>
                            <p class="card-text">Benefits, Renewal, Account</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col hc">
                <a href="contact.php #contact">
                    <div class="card">
                        <center><img src="images/Support.png" class="card-img-top" alt="Support"
                                style="margin-top: 5px; height: 85px"></center>
                        <div class="card-body">
                            <h5 class="card-title">BookBerries Support</h5>
                            <p class="card-text">Get support for your device and content</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col hc">
                <a href="contact.php #contact">
                    <div class="card">
                        <center><img src="images/Audiobook.png" class="card-img-top" alt="Audiobooks"
                                style="height: 95px; width:110px"></center>
                        <div class="card-body">
                            <h6 class="card-title">BookBerries Audiobooks</h5>
                                <p class="card-text">Manage your subscription & more</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </center><br>
    <div class="divider d-flex type">
        <h3 class="mx-3 mb-0 or">Location</h3>
    </div><br>
    <div id="map-container-google-2" class="z-depth-1-half map-container maploc">
        <!-- <iframe src="https://maps.google.com/maps?q=Beirut&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            class="locationMap" allowfullscreen></iframe> -->
        <img src="images/maps.png" alt="map">
    </div>

    <br>
    <div class="divider d-flex type" id="contact">
        <h3 class="mx-3 mb-0 or">Contact Us</h3>
    </div><br>
    <form class="contactForm">
        <!-- Name input -->
        <div class="media">
            <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter your full name" required />
        </div><br>
        <!-- Email input -->
        <div class="media">
            <span class="input-group-addon"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
            <label class="form-label">Email address</label>
            <input type="email" class="form-control form-control-lg" placeholder="Enter a valid email address"
                required />
        </div><br>
        <!-- Subject input -->
        <div class="media ">
            <span class="input-group-addon"><i class="fa fa-tag fa-fw" aria-hidden="true"></i></span>
            <label class="form-label">Subject</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter the subject of your message" />
        </div><br>
        <!-- Message input -->
        <div class="media ">
            <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
            <label class="form-label">Message</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter your message" required />
        </div><br>
        <div>
            <center><button type="submit" class="btn btn-primary btn-lg login">Send</button></center>
            <br><br>
        </div>
    </form>

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