<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBerries</title>
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
    include("authentication.php");
    ?>
    <!-- <div class="divider d-flex type" id="new">
        <h3 class="mx-3 mb-0 or">Available Books</h3>
</div><br> -->
    <div id="result">
        <?php
        echo '<br><div class="divider d-flex type" id="new">';
        echo '<h3 class="mx-3 mb-0 or" id="newReleases">New Releases</h3>';
        echo '</div><br>';
        require("Config.php");
        $query1 = "SELECT B.ID, B.Title, B.Author, B.Price, B.Image, B.CatId,
        C.Name as CatName FROM book B 
        INNER JOIN bookcategory C ON B.CatId = C.ID WHERE B.CatId=1";
        $result = mysqli_query($con, $query1);
        echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<div style='border: 1px solid #ced4da; border-radius: 15px; width:270px; padding: 5px; margin:5px; text-align: center;'>";
            $img = $row["Image"];
            echo "<img src='images\\{$row["Image"]}' height='210px' width='150px'style='margin-top: 20px;'/><br>";
            echo "<br/>" . "<h6>" . $row["Title"] . "</h6>";
            echo $row["Author"];
            echo "<div style='color: #d82e2e;'>" . $row["CatName"] . "</div>";
            echo "<h4>" . $row["Price"] . "$" . "</h4>";
            $id = $row["ID"]; // Item Id
            $id = base64_encode($id);
            echo "<br/><div class='check'><a class='btn btn-primary' href='Order.php?x=$id'>Add to Cart</a></div><br>";
            echo "</div>";
        }



        echo "</div><br>";
        echo '<br><div class="divider d-flex type" id="new">';
        echo '<h3 class="mx-3 mb-0 or" id="best">Best Sellers</h3>';
        echo '</div><br>';
        $query1 = "SELECT B.ID, B.Title, B.Author, B.Price, B.Image, B.CatId,
        C.Name as CatName FROM book B 
        INNER JOIN bookcategory C ON B.CatId = C.ID WHERE B.CatId=2";
        $result = mysqli_query($con, $query1);
        echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<div style='border: 1px solid #ced4da; border-radius: 15px; width:270px; padding: 5px; margin:5px; text-align: center;'>";
            $img = $row["Image"];
            echo "<img src='images\\{$row["Image"]}' height='210px' width='150px'style='margin-top: 20px;'/><br>";
            echo "<br/>" . "<h6>" . $row["Title"] . "</h6>";
            echo $row["Author"];
            echo "<div style='color: #d82e2e;'>" . $row["CatName"] . "</div>";
            echo "<h4>" . $row["Price"] . "$" . "</h4>";
            $id = $row["ID"]; // Item Id
            $id = base64_encode($id);
            echo "<br/><div class='check'><a class='btn btn-primary' href='Order.php?x=$id'>Add to Cart</a></div><br>";
            echo "</div>";
        }

        echo "</div><br>";
        echo '<br><div class="divider d-flex type" id="new">';
        echo '<h3 class="mx-3 mb-0 or" id="collections">Collections</h3>';
        echo '</div><br>';
        echo '<center>
            <div class="collection-container">
                <div class="card text-center">
                    <div class="card-header" id="bio">
                        <h5 class="card-title">Biographies</h5> 
                    </div>
                    <div class="card-body">
                        <a href="Biographies.php"><img src="images/biografies2.png" class="collection-bio"
                                style="width: 1150px;
                                max-height: 400px;"></a>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="Biographies.php" class="btn btn-primary">View Collection</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">أعمال عربية</h5>
                            </div>
                            <div class="card-body">
                                <a href="arabic.php"><img src="images/arabic (1).png"
                                        class="collection-img"></a>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="arabic.php" class="btn btn-primary">View Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">أعمال مترجمة</h5>
                            </div>
                            <div class="card-body">
                                <a href="translated.php" ><img src="images/translated.png"
                                        class="collection-img"></a>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="translated.php" class="btn btn-primary">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center><br><br>
        <br>';


        echo "</div>";
        echo '<br><div class="divider d-flex type" id="new">';
        echo '<h3 class="mx-3 mb-0 or" id="accessories">Book Accessories</h3>';
        echo '</div><br>';

        $query2 = "SELECT A.ID, A.Name, A.Price, A.Image, A.CatId,
        C.Name as CatName FROM accessories A 
        INNER JOIN bookcategory C ON A.CatId = C.ID ";
        $result = mysqli_query($con, $query2);
        echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<div style='border: 1px solid #ced4da; border-radius: 15px; width:270px; padding: 5px; margin:5px; text-align: center;'>";
            $img = $row["Image"];
            echo "<img src='images\\{$row["Image"]}' height='210px' width='150px'style='margin-top: 20px;'/><br>";
            echo "<br/>" . "<h6>" . $row["Name"] . "</h6>";
            echo "<div style='color: #d82e2e;'>" . $row["CatName"] . "</div>";
            echo "<h4>" . $row["Price"] . "$" . "</h4>";
            $id = $row["ID"]; // Item Id
            $id = base64_encode($id);
            echo "<br/><div class='check'><a class='btn btn-primary' href='Order2.php?x=$id'>Add to Cart</a></div><br>";
            echo "</div>";
        }
        echo "</div>";
        ?>
    </div>
    <script type="text/javascript">
        // bind on keyup event to the textbox search
        $(document).ready(function() { // on page load
            $('#txtSearch').keyup(function() {
                // alert(this.value);
                $.ajax({
                    type: "GET",
                    url: "search.php",
                    data: {
                        'name': this.value
                    },
                    success: function(response) {
                        // returned result
                        $('#result').html(response);
                    }
                });
            });
        });
    </script><br><br>

    <div class="divider d-flex type" id="authors">
        <h3 class="mx-3 mb-0 or">Featured Authors</h3>
    </div><br>
    <center>
        <div class="container3">
            <div class="row">
                <div class="col-12 col-sm-8 col-lg-2">
                    <div class="writer wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="pic">
                            <img src="images/Alex_Michaelides-removebg-preview (1).png" alt="">
                            <div class="social-info">
                                <a href="https://www.facebook.com/AlexMichaelidesOfficial/?mibextid=ZbWKwL"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/AlexMichaelides?t=oI2ABRPSXm0VZsQdOQyLrA&s=09"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/alex-michaelides-a73641283/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="writerInfo">
                            <h6>Alex Michaelides</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-2">
                    <div class="writer wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="pic">
                            <img src="images/Elif_Shafak-removebg-preview.png" alt="">
                            <div class="social-info">
                                <a href="https://www.facebook.com/Elif.Shafak?mibextid=ZbWKwL" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/Elif_Safak?t=yTUzjKWp_K-jTjlOs6KmeQ&s=09"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/elif-shafak-9b5089a2" target="_blank"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="writerInfo">
                            <h6>Elif Shafak</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-2">
                    <div class="writer wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="pic">
                            <img src="images/Guillaume_Musso-removebg-preview.png" alt="">
                            <div class="social-info">
                                <a href="https://www.facebook.com/guillaume.musso.fanpage?mibextid=ZbWKwL"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/Guillaume_Musso?t=9TM8YJ7A0tzUYgsN1tIFwQ&s=09"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/guillaume-musso-538186292/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="writerInfo">
                            <h6>Guillaume Musso</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-2">
                    <div class="writer wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="pic">
                            <img src="images/Colleen_Hoover-removebg-preview.png" alt="">
                            <div class="social-info">
                                <a href="https://www.facebook.com/AuthorColleenHoover?mibextid=ZbWKwL"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/colleenhoover?t=chFMeHRR7Qd4dMOWTVcDsQ&s=09"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/colleen-hoover-09b38149/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="writerInfo">
                            <h6>Colleen Hoover</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-2">
                    <div class="writer wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="pic">
                            <img src="images/saud al sanusi.png" alt="">
                            <div class="social-info">
                                <a href="https://www.facebook.com/saud.alsanousi?mibextid=ZbWKwL" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/saud_alsanousi?t=XWvS-ckLvcWCLVKbyukhYw&s=09"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="writerInfo">
                            <h6>Saud Alsanousi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center><br><br>
    <div class="divider d-flex type">
        <h3 class="mx-3 mb-0 or">Subscription</h3>
    </div>
    <div class="ending">
        <div class="text-center">
            <img src="images/sign1.png" class="subimg">
            <span class="d-block mt-3">Submit your email address to receive BookBerries offers & updates.<br> You can
                view
                BookBerries’s Privacy Policy <a href="privacypolicy.php" target="_blank">here</a>.</span>
            <div class="mx-5">
                <div class="input-group mb-3 mt-4 sub">
                    <input type="email" id="email" class="form-control" placeholder="Enter Your Email">
                    <button class="btn btn-primary border-rad" type="button">Subscribe</button>
                </div>
            </div>
            <p><small>Unsubscribe from our emails at any time.</small></p>
        </div>
    </div><br>
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