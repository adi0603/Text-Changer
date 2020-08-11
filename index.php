<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Text Changer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="image/icon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ab99e84824.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="js/convert.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/test.js"></script>
    <link rel="stylesheet" type="text/css" href="css/test.css">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="myFunction()">
  <div class="loading" id="loader" >
  <div class="finger finger-1">
    <div class="finger-item">
      <span></span><i></i>
    </div>
  </div>
        <div class="finger finger-2">
    <div class="finger-item">
      <span></span><i></i>
    </div>
  </div>
        <div class="finger finger-3">
    <div class="finger-item">
      <span></span><i></i>
    </div>
  </div>
        <div class="finger finger-4">
    <div class="finger-item">
      <span></span><i></i>
    </div>
  </div>
        <div class="last-finger">
    <div class="last-finger-item"><i></i></div>
  </div>
  <center>
    <br><p  style="color: white;">Loading....</p></center>
    </div>
  <!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-primary bg-primary static-top" id="myDiv1" style="display:none;">
  <script type="text/javascript">
  toastr["info"]("Welcome To Text Changer.", "Welcome!");
  </script>
  <div class="container">
    <a class="navbar-brand" href="index.php">
          <img src="image/logo.png" height="30px" width="90px" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-arrow-down"></i>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: white;">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container" id="myDiv2" style="display:none;">
  <center>
    <h1 class="mt-4">Text Changer</h1>
    <p>Simply enter or paste your text and choose the case you want to convert it to.</p>
  </center>
  <div class="form-group green-border-focus">
    <textarea class="form-control" id="text" rows="10" onchange="words()" placeholder="Type Or Paste Your Text Here....." style="resize: none;"></textarea>
  </div>
  
</div>
<!-- /.container -->

<center>
<div class="btn-group" id="myDiv3" style="display:none;">
  <button type="button" class="btn btn-danger" onclick="ClearFields()">Clear</button> &nbsp;
  <button type="button" class="btn btn-info" onclick="ctc()">Copy Text</button> &nbsp;
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Select Case&nbsp;</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" id="alert-target" onclick="sc()">Sentence case</a>
    <a class="dropdown-item" onclick="lc()">lowercase</a>
    <a class="dropdown-item" onclick="uc()">UPPER CASE</a>
    <a class="dropdown-item" onclick="cc()">Capatilized Case</a>
    <a class="dropdown-item" onclick="ac()">aLtErNaTiNg cAsE</a>
    <a class="dropdown-item" onclick="tc()">Title Case</a>
    <a class="dropdown-item" onclick="ic()">InVeRsE CaSe</a>
  </div>
</div>
</center>
<footer class="mainfooter" role="contentinfo" id="myDiv4" style="display:none;">
  <div class="footer-middle" >
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <center>
          <img src="image/logo.png" height="30px" width="90px" alt=""><br>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </center>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <div class="footer-pad">
            <center>
              <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="https://www.instagram.com/_simplethoughts._/?hl=en" target="_blank" class="icoFacebook" title="Instagram"><i class="fa fa-instagram"></i></a></li>
             <li><a href="https://www.linkedin.com/in/aditya-pandey-1375a818a/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
             <li><a href="https://aditya-pandey.herokuapp.com/" class="icoLinkedin" target="_blank" title="Portfolio"><i class="fas fa-link"></i></a></li>
             <li><a href="https://github.com/adi0603" class="icoLinkedin" target="_blank" title="Github"><i class="fab fa-github"></i></a></li>
            </ul>
            </center>
          
        </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
               
      </div>
    </div>
    <br>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - Text Changer | Aditya Pandey.  All rights reserved.</p>
    </div>
  </div>


  </div>
  </div>
</footer>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 5000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv1").style.display = "block";
  document.getElementById("myDiv2").style.display = "block";
  document.getElementById("myDiv3").style.display = "block";
  document.getElementById("myDiv4").style.display = "block";
  document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
