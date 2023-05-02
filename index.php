
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Junee Stuff</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="img/logo.png">
    </head>
    <body>
        <section id="nav-bar">

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>

        </section>

        <!----------------banner section---------------->

        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="promo-title">JUNEE STUFF</p>
                        <p>A place to find unique gift for the one you love.</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="img/home.png" class="img-fluid">
                    </div>
                </div>
            </div>
            <img src="img/wave1.png" class="bottom-img">
        </section>

        <!----------------about us section----------------->

        <section id="about-us">
            <div class="container text-center">
                <h1 class="title text-center">About Us</h1>
                <div class="row">
                    <div class="col-md-6 about-us">
                        <p class="about-title">What is Junee Stuff?</p>
                        <p>A place where you will find unique and creative gifts. Suitable for birthday gifts, anniversary gifts, graduation gifts, wedding 
                            gifts, and more for loved ones. Made with 100% handmade and pocket-friendly prices.</p>
                        <p>For special people, your gift must also be special! Custom gifts as you like so that your gifts look more meaningful and unforgettable. 
                            What are you waiting for? Order your acrylic gift now at Junee Stuff!</p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/logo.png" class="about-img">
                    </div>
                </div>
            </div>
        </section>

        <!----------------category section----------------->

        <section id="category">
            <div class="container text-center">
            <h1 class="title">Product Category</h1>
                <div class="card-deck">
            <?php
                include 'koneksi.php';

                $sqlGet = "SELECT * FROM produk";
                $query = mysqli_query($konek, $sqlGet);

                while($data = mysqli_fetch_array($query)){
                    echo "
                    <div class='card shadow-lg'>
                        <img src='img/$data[image]'/class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$data[title]</h5>
                            <p class='card-text'>$data[summary]</p>
                            <p class='card-text'><small class='text-muted'>$data[release_at]</small></p>
                        </div>
                    </div>
                    ";
                }
            ?>
                </div>
                <a href="https://www.whatsapp.com/"><button type="button"class="btn btn-primary shadow mt-3" data-bs-toggle="tooltip" title="order via whatsapp">Order Now</button></a>
            </div>
        </section>

        <!------------------contact us section------------------>

        <section id="contact">
            <div class="container text-center">
                <p>Keep in Touch With Us</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/"><button type="button" class="fa fa-facebook fa-3x" class="btn-circle" data-bs-toggle="tooltip" title="facebook"></button></a>
                    <a href="https://www.instagram.com/"><button type="button" class="fa fa-instagram fa-3x" class="btn-circle"data-bs-toggle="tooltip" title="instagram"></button></a>
                    <a href="https://www.whatsapp.com/"><button type="button" class="fa fa-whatsapp fa-3x" class="btn-circle" data-bs-toggle="tooltip" title="whatsapp"></button></a>
                </div>
            </div>
        </section>

        <!------------------footer section------------------>
        <section id="footer">
            <img src="img/wave2.png" class="footer-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <p><b>Contact Us</b></p>
                        <p><i class="fa fa-map-marker"></i> Binjai, Sumatera Utara</p>
                        <p><i class="fa fa-phone"></i> +62 81234567890</p>
                        <p><i class="fa fa-envelope-o"></i> putrithalitawardani@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>