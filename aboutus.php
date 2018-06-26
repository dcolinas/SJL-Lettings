<!DOCTYPE html>
<html id="aboutus">

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
<script src="assets/js/jquery.min.js"></script>
</head>

<body id="aboutus">
<section id="cars" style="background-image:url(&quot;assets/img/2.jpg&quot;);width:100%;height:100vh;background-size:cover;background-repeat:no-repeat;background-position:center;">
  <div id="abouttop">
    <nav class="navbar navbar-light navbar-expand-md">
      <div class="container-fluid"><a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
                        id="navcol-1">
          <ul class="nav navbar-nav mx-auto">
            <li class="nav-item" role="link"><a class="nav-link active" href="index.php" style="color:#848484;">Homepage</a></li>
            <li class="nav-item" role="link"><a class="nav-link active" href="rent.php" style="color:#848484;">Rent</a></li>
            <li class="nav-item" role="link"><a class="nav-link active" href="tobuy.php" style="color:#848484;">Buy</a></li>
            <li class="nav-item" role="link"><a class="nav-link active" href="aboutus.php" style="color:#848484;">About Us</a></li>
            <li class="nav-item" role="link"><a class="nav-link active" href="contactus.php" style="color:#848484;">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item" role="link"><a class="nav-link active" href="loginform.php" style="color:#848484;">Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <h1 class="text-center" style="font-size:45px;color:rgb(77,77,77);font-family:Montserrat, sans-serif;">About Us</h1>
  </div>
</section>
    
    <div class="container">
    <h3 class="text-where" style="font-size:25px;color:rgb(77,77,77);font-family:Montserrat, sans-serif;padding-top:25px;">Where we are located</h3>
        <div class="address">
             <ul style="list-style-type:none">
             <li>146 Estate Road</li>
             <li>Property Street</li>
             <li>London</li>
             <li>SE2 7UR</li>
    </div>
    <div id="map" style="width: 40%; height: 400px; background-color: grey;">
    <script>
      function initMap() {
        var uluru = {lat: 51.509865, lng: -0.118092};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC279jpzq4v6T89G_GwMv83kRwLQlvbk_k&callback=initMap">
    </script>
 </div>
        <p style="font-size:25px;color:rgb(77,77,77);font-family:Montserrat, sans-serif;padding-top:25px;">We started our lettings agency in Summer 2017 and have so far become very successful. At the moment we are still building our business, one step at a time and we are proud to announce that we should soon be collaborating with another lettings agency in order to become more successful and be able to enquire more properties for our business.</p>
</div>  
    
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
<script src="assets/js/Simple-Slider1.js"></script>
        
        <div class="footer-basic" style="background-color:rgb(241,247,252);padding-top:33px;padding-bottom:20px;">
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
</body>
    

</html>