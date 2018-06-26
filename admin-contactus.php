<!DOCTYPE html>
<html id="contactus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Website</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php 
    session_start();
        if ($_SESSION['user_type'] == 'user')
        {
            $_SESSION['message'] = "Welcome User!";
        header("location: error.php");
            exit();
        } 
?>
    
<body style="background-color:rgb(241,247,252);">
    <section id="Contact-top">
        <div>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="link"><a class="nav-link active" href="admin-index.php" style="color:#848484;">Homepage</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="admin-rent.php" style="color:#848484;">Rent</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="admin-tobuy.php" style="color:#848484;">Buy</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="admin-aboutus.php" style="color:#848484;">About Us</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="admin-contactus.php" style="color:#848484;">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="link"><a class="nav-link active" href="logout.php" style="color:#848484;">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <h1 class="text-center" id="Title">SJL Lettings</h1>
        <h2 class="text-center" id="TelNo">02072247890</h2>
    </section>
    <div class="contact-clean">
        <form method="POST" action="https://formspree.io/dcolinas@gmail.com">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group" style="color:rgb(255,255,255);"><button class="btn btn-primary" type="submit" style="background-color:rgb(131,144,163);width:136px;height:59px;padding-right:16px;padding-left:18px;font-family:Montserrat, sans-serif;letter-spacing:0px;font-size:24px;color:rgb(255,255,255);">send</button></div>
        </form>
    </div>
    <div class="footer-basic" style="background-color:rgb(241,247,252);padding-top:33px;padding-bottom:20px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Admin Login</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">SJL Lettings © 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>