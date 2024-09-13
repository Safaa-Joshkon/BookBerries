<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

    <!-- carousal+autoplay -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row selection-wrapper">
                    <div class="mb-2 col-10">
                        <div class="card card-selection">
                            <img src="images/libraries.png" style="height:325px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row selection-wrapper">
                    <div class="mb-2 col-10">
                        <div class="card card-selection">
                            <img src="images/quote1.jpg" style="height:325px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row selection-wrapper">
                    <div class="mb-2 col-10">
                        <div class="card card-selection">
                            <img src="images/quote2.jpg" style="height:325px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>



    <div class="divider d-flex type" id="hours">
        <h3 class="mx-3 mb-0 or">Opening Hours</h3>
    </div><br>
    <center>
        <div class="row">
            <div class="col-4">
                <p>Monday - Thursday</p>
            </div>
            <div class="col-4">
                <p>Friday - Saturday</p>
            </div>
            <div class="col-4">
                <p>Sunday</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h4>9AM - 6PM</h4>
            </div>
            <div class="col-4">
                <h4>9AM - 4PM</h4>
            </div>
            <div class="col-4">
                <h4>9AM - 2PM</h4>
            </div>
        </div>
    </center><br>
    <div class="divider d-flex type" id="Purpose">
        <h3 class="mx-3 mb-0 or">Purpose</h3>
    </div>
    <div class="text-center about-text">
        We believe in the power of knowledge. So our goal is to help those who supply it and share it with those who
        crave it.<br> Which is why every action we take, and every book purchase you make helps fund it.<br>
        BookBerries strives for customer satisfaction by offering a user-friendly search engine, efficient payment
        options and
        seamless delivery systems.<br> Apart from all this, we also provide great deals and discounts on our products.
    </div>
    <div class="divider d-flex type" id="values">
        <h3 class="mx-3 mb-0 or">Values</h3>
    </div>
    <center>
        <div class="row">
            <div class="col-4">
                <a href="#">
                    <img src="images/value1.png" class="v1">
                </a>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="images/value2.png" class="v2"></a>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="images/value6.png" class="v6">
                </a>
            </div>
        </div>
    </center><br>
    <center>
        <div class="row">
            <div class="col-4">
                <h5>Customer Focus</h5>
                <p>Our goal is to give consumers a highly valuable experience. Their opinions are taken into account
                    in
                    all we do since we aim to be their first
                    choice bookshop.</p>
            </div>
            <div class="col-4">
                <h5>People Matter</h5>
                <p>We seek out talented people who work hard and invest in them. We respect each individual, reward
                    achievement, and celebrate team success.</p>
            </div>
            <div class="col-4">
                <h5>Do The Right Thing</h5>
                <p>We strive to do the right thing at all times, with all people and all issues.</p>
            </div>
        </div>
    </center><br>
    <center>
        <div class="row">
            <div class="col-4">
                <a href="#">
                    <img src="images/value4.png" class="v4">
                </a>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="images/value5.png" class="v5"></a>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="images/value3.png" class="v3">
                </a>
            </div>
        </div>
    </center><br>
    <center>
        <div class="row">
            <div class="col-4">
                <h5>Foster Innovation</h5>
                <p>We look for new ideas and bold moves while we embrace and create change.</p>
            </div>
            <div class="col-4">
                <h5>Passion for Literacy</h5>
                <p>We are committed to the cause of literacy. Every person should have the chance to achieve their
                    potential and participate fully in society.</p>
            </div>
            <div class="col-4">
                <h5>Do The Right Thing</h5>
                <p>We strive to do the right thing at all times, with all people and all issues.</p>
            </div>
        </div>
    </center><br>
    <div class="divider d-flex type" id="work">
        <h3 class="mx-3 mb-0 or">How It Works?</h3>
    </div>
    <section class="ps-timeline-sec">
        <div class="container">
            <ol class="ps-timeline">
                <li>
                    <div class="img-handler-top">
                        <img src="images/step2.png" alt="step1" />
                    </div>
                    <div class="ps-bot">
                        Visit The Online Library On BookBerries
                    </div>
                    <span class="ps-sp-top">1</span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="images/step3.png" alt="step2" />
                    </div>
                    <div class="ps-top">
                        Choose Any Book You Like From BookBerries
                    </div>
                    <span class="ps-sp-bot">2</span>
                </li>
                <li>
                    <div class="img-handler-top">
                        <img src="images/step4.png" alt="step3" />
                    </div>
                    <div class="ps-bot">
                        Choose Your Preferable Paying Method
                    </div>
                    <span class="ps-sp-top">3</span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="images/step5.png" alt="step4" />
                    </div>
                    <div class="ps-top">
                        Wait For Our Quick & Free Delivery
                    </div>
                    <span class="ps-sp-bot">4</span>
                </li>
            </ol>
        </div>
    </section>
    <div class="divider d-flex type" id="impact">
        <h3 class="mx-3 mb-0 or">Impact</h3>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="counter c1">
                    <div class="counter-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <span class="counter-value">2189</span>
                    <h5>Users</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter c2 text-primary">
                    <div class="counter-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <span class="counter-value">1258</span>
                    <h5>Books Donated</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter c3">
                    <div class="counter-icon">
                        <i class="fa fa-recycle"></i>
                    </div>
                    <span class="counter-value">1189</span>
                    <h5>Books recycled</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter c4">
                    <div class="counter-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <span class="counter-value">75364</span>
                    <h5>Funds raised for literacy</h5>
                </div>
            </div>
        </div>
    </div><br><br>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark foot bg-light">
        <section class="d-flex justify-content-center p-4 text-dark border-bottom connect ">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="media">
                <a href="https://www.facebook.com/profile.php?id=100063305825552&mibextid=ZbWKwL" 
                    class="text-dark me-4">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="text-dark me-4">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="text-dark me-4">
                    <i class="fa fa-google"></i>
                </a>
                <a href="https://instagram.com/book_berries__?igshid=MmJiY2I4NDBkZg==" 
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
                            <a href="index.php"  class="text-dark">Home</a>
                        </p>
                        <p>
                            <a href="about.php"  class="text-dark">About Us</a>
                        </p>
                        <p>
                            <a href="privacypolicy.php"  class="text-dark">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="contact.php"  class="text-dark">Contact Us</a>
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