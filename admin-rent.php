<!DOCTYPE html>
<html style="height:100vh;width:100%;">

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
    
<script type="text/javascript">
    function saveEdits() {
    var editElem = document.getElementById("edit"); //get the editable element
    var userVersion = editElem.innerHTML;
    localStorage.userEdits = userVersion; //save the content to local storage
    document.getElementById("update").innerHTML="Edits saved!"; //write a confirmation to the user
}
    function checkEdits() {
    if(localStorage.userEdits!=null) //find out if the user has previously saved edits
    document.getElementById("edit").innerHTML = localStorage.userEdits;
}
</script>
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
    
<body onload="checkEdits()" style="height:2040px;">
    <section id="city">
        <div id="lettingstop">
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
            <h1 class="text-center" id="letheading" style="font-family:Montserrat, sans-serif;font-size:45px;color:rgb(77,77,77);">To Let</h1>
        </div>
    </section>
    <section id="ToLet" style="background-color:#a4a4a4;padding-bottom:11px;">
        <div class="container">
            <div class="row" style="padding-top:25px;">
                <div class="col-md-4" style="padding-top:10px;">
                    <div class="card"><a href="assets/img/apartment4.jpg" data-lightbox="Chelsea"><img class="img-fluid" src="assets/img/apartmentbed1.jpg" style="height:232px;"></a></div>
                </div>
                <div class="col-md-4">
                    <div class="card"><a href="assets/img/apartment-3.jpg" data-lightbox="Chelsea"><img class="img-fluid" src="assets/img/apartment-3.jpg" style="height:232px;"></a></div>
                </div>
                <div class="col-md-4">
                    <div class="card"><a href="assets/img/apartment-1.jpg" data-lightbox="Chelsea"><img class="img-fluid" src="assets/img/apartment-1.jpg" style="height:232px;"></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 style="padding-top:18px;font-family:Montserrat, sans-serif;color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">Perfect Family Apartment- Kensington &amp; Chelsea</span></strong></h2>
                </div>
            </div>
            
            <div id="edit" contenteditable="true">
            <p style="font-size:25px;font-family:Montserrat, sans-serif;color:rgb(255,255,255);">A three Bedroom Flat located in the heart of Chelsea</p>
            <ul style="font-size:20px;font-family:Montserrat, sans-serif;padding-left:30px;">
                <li style="color:rgb(255,255,255);">Admin fee: £420 (includes VAT) One-off payment, per property, at start of tenancy<br></li>
                <li style="color:rgb(255,255,255);">Additional costs: Other terms &amp; fees may apply</li>
                <li style="color:rgb(255,255,255);">Deposit: £4,800 (6 weeks rent)</li>
                <li style="color:rgb(255,255,255);">Council tax:£1,534 per year (Band F)</li>
                <li style="color:rgb(255,255,255);">Local authority:The Royal Borough of Kensington and Chelsea</li>
                <li style="color:rgb(255,255,255);">Total Sq Ft: 846 (78 Sq M) approx.</li>
                <li style="color:rgb(255,255,255);">Reference No: 1508</li>
            </ul>
        </div>
        </div>
        
        <div id="update"> - Edit the text and click to save for next time</div>
        <input type="button" value="save my edits" onclick="saveEdits()"/>
        
        <div class="container">
            <div class="row" style="padding-top:25px;">
                <div class="col-md-4" style="padding-top:10px;">
                    <div class="card"><a href="assets/img/NewBuildint2.jpg" data-lightbox="Putney"><img class="img-fluid" src="assets/img/NewBuildint2.jpg" style="height:240px;width:348px;"></a></div>
                </div>
                <div class="col-md-4">
                    <div class="card"><a href="assets/img/apartment-3.jpg" data-lightbox="Putney"><img class="img-fluid" src="assets/img/apartment-3.jpg" style="height:245px;"></a></div>
                </div>
                <div class="col-md-4">
                    <div class="card"><a href="assets/img/Newbuildout1.jpg" data-lightbox="Putney"><img class="img-fluid" src="assets/img/Newbuildout1.jpg" style="height:245px;"></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 style="padding-top:18px;font-family:Montserrat, sans-serif;color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">New Build Apartment- Putney</span></strong></h2>
                </div>
            </div>
            <div id="edit" contenteditable="true"> 
            <p style="font-size:25px;font-family:Montserrat, sans-serif;color:rgb(255,255,255);">A new build one Bedroom apartment located in Putney</p>
            <ul style="font-size:20px;font-family:Montserrat, sans-serif;padding-left:30px;">
                <li style="color:rgb(255,255,255);">Admin fee: £550 (includes VAT) One-off payment, per property, at start of tenancy<br></li>
                <li style="color:rgb(255,255,255);">Additional costs: Other terms &amp; fees may apply</li>
                <li style="color:rgb(255,255,255);">Deposit: £5,900 (6 weeks rent)</li>
                <li style="color:rgb(255,255,255);">Council tax: £1,100 per year (Band D)</li>
                <li style="color:rgb(255,255,255);">Local authority:The Royal Borough of Wandsworth</li>
                <li style="color:rgb(255,255,255);">Total Sq Ft: 685 (58 Sq M) approx.</li>
                <li style="color:rgb(255,255,255);">Reference No: 2304</li>
            </ul>
        </div>
        </div>
    </section>
    
    <div class="footer-basic" style="padding-top:10px;padding-bottom:14px;">
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