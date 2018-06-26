<!DOCTYPE html>
<html>
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
        if ($_SESSION['user_type'] == 'admin')
        {
            $_SESSION['message'] = "Welcome Admin!";
        header("location: error.php");
            exit();
        } 
?>
    
<body style="/*background-color:rgb(255,255,255);*/color:rgb(77,77,77);height:1320px;">
    <section id="londoncity">
        <div id="HomeTopHalf">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="link"><a class="nav-link active" href="user-index.php" style="color:#848484;">Homepage</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="user-rent.php" style="color:#848484;">Rent</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="user-tobuy.php" style="color:#848484;">Buy</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="user-aboutus.php" style="color:#848484;">About Us</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="user-contactus.php" style="color:#848484;">Contact Us</a></li>
                            <li class="nav-item" role="link"><a class="nav-link active" href="buyer-contract.php" style="color:#848484;">Contract</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="link"><a class="nav-link active" href="logout.php" style="color:#848484;">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center" id="Title">SJL Lettings</h1>
            <h2 class="text-center" id="TelNo">02072247890</h2>
        </div>
    </section>
    <section id="Arrow-section">
        <div id="arrown-section">
            <div class="container">
                <div class="row">
                    <div class="col"><button class="btn btn-link btn-block Arrow-button" type="button"><i class="icon ion-ios-arrow-down"></i></button></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p style="font-family:Montserrat, sans-serif;color:rgb(88,88,88);"><strong>These are some of our very proud acheivements so far...</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Awards" style="padding-bottom:-4px;">
        <div id="Awards-div" style="background-color:#325576;padding-bottom:4px;">
            <div class="row">
                <div class="col">
                    <p class="text-center d-flex" style="color:rgb(255,255,255);font-family:Montserrat, sans-serif;padding-left:9px;padding-top:16px;"><strong>&nbsp;&nbsp; </strong><i class="icon ion-ios-telephone" style="font-size:18px;line-height:20px;"></i><strong>Extended Hours For Our Highly Valued Customers</strong></p>
                    <p style="color:rgb(255,255,255);padding-left:11px;">We are now open for longer for our customers to be able to get in touch with is when they want and for our customer's who would like to get in touch after office hours so that we can update and keep customer's posted.</p>
                </div>
                <div class="col">
                    <p class="text-center" style="color:#f4f4f4;font-family:Montserrat, sans-serif;padding-top:15px;"><i class="icon ion-lightbulb" style="font-size:18px;"></i><strong>&nbsp; Won Estate Agency Of The Year &nbsp;2017 - 2018</strong></p>
                    <p style="color:rgb(255,255,255);">We are very proud to announce that in 2017, SJL Lettings was awarded Estate Agency of the Year based on our great communication and very friendly staff, so come and visit us today!</p><button class="btn btn-link btn-block btn-sm" type="button"
                        style="color:rgb(255,255,255);font-size:26px;">Learn More</button></div>
                <div class="col">
                    <p class="text-center" style="color:rgb(255,255,255);font-family:Montserrat, sans-serif;padding-top:15px;"><i class="fa fa-calendar-check-o" style="font-size:18px;"></i><strong>&nbsp; &nbsp;Aims For 2018 For Our Staff and Customers</strong></p>
                    <p style="color:rgb(255,255,255);">Our aims for 2018-2019 are to expand our office by offering properties all around the UK rather than being restricted to the London area as well as hopefully opening a second office and more.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="Areas" style="padding-top:-3px;">
        <div id="Areas-covered" style="background-color:#64abde;">
            <div class="row">
                <div class="col-xl-5">
                    <p style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);font-size:18px;padding-left:15px;padding-top:20px;"><strong>Areas We Cover At The Moment:</strong></p>
                    <ul class="d-inline-block" style="padding-left:49px;font-family:Montserrat, sans-serif;color:rgb(255,255,255);">
                        <li>Putney</li>
                        <li class="align-content-center">Wimbledon</li>
                        <li>Wandsworth</li>
                        <li>Mitcham</li>
                        <li>Chelsea</li>
                    </ul>
                </div>
                <div class="col">
                    <p style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);font-size:18px;padding-top:20px;"><strong>Would You Like A Free Valuation Of Your Property?</strong></p>
                    <p style="font-family:Montserrat, sans-serif;color:rgb(255,255,255);padding-left:0px;padding-right:47px;">Click below to get in touch with us and a member of our team will be in touch to arrange the valuation.<button class="btn btn-link btn-block btn-sm" type="button" style="color:rgb(255,255,255);font-size:23px;line-height:40px;padding-right:8px;">Learn More</button></p>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-basic" style="height:247px;padding-top:10px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
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
