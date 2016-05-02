<!DOCTYPE html>
<html lang="en">
<head>
  <title>IEEE - Computer Society</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="1.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="main.css">
  <script src="modernizr-2.6.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      height: 100vh;
      color: #fff;
      padding: 100px 25px;
      background: black;
      font-family: Montserrat, sans-serif;
      background-image: url("main.png");
      background-size: 75% 100vh;
      background-repeat: no-repeat;
      background-position: center;
      margin: auto;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel {
    height: 600px;
  }
  .carousel-inner > .item > img{
    height: 600px;
    width: 75%;
    margin: auto;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  #fb-icon:hover {
    content: url('fb-hover.png');
  }

  #gh-icon:hover {
    content: url('gh-hover.png');
  }

/* Pre loader Effects */
  #loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222222;
  z-index: 1000;
}

#loader-wrapper .loader-section.section-left {
  left: 0;
}

#loader-wrapper .loader-section.section-right {
  right: 0;
}
#loader {
  z-index: 1001; /* anything higher than z-index: 1000 of .loader-section */
}

/* Loaded */
.loaded #loader-wrapper .loader-section.section-left {
    -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
    -ms-transform: translateX(-100%);  /* IE 9 */
    transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */
}

.loaded #loader-wrapper .loader-section.section-right {
    -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
    -ms-transform: translateX(100%);  /* IE 9 */
    transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */
}

.loaded #loader-wrapper {
  visibility: hidden;
}

.loaded #loader {
    opacity: 0;
    -webkit-transition: all 0.3s ease-out;  
            transition: all 0.3s ease-out;
}

.loaded #loader-wrapper .loader-section.section-right,
.loaded #loader-wrapper .loader-section.section-left {

  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}

.loaded #loader-wrapper {
        -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%); 
                transform: translateY(-100%); 

        -webkit-transition: all 0.3s 1s ease-out;  
                transition: all 0.3s 1s ease-out;
}
  </style>
<script>
$(document).ready(function() {

  setTimeout(function(){
    $('body').addClass('loaded');
  }, 3000);

});
</script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <div id="loader-wrapper">
    <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
<div id="myPageMain">
<div class="content">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage"><img src="1.png" height="50px" width="50px" style="margin-top:-15px;"></a>
      </div>
      
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
    
    </div>
  </nav>

  <div class="jumbotron text-center" id="home">
    <h1>IEEE - Computer Society</h1> 
    <p>An elite group of engineers who specialize in every aspect of Computer Science.</p> 
  </div>

<!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>IEEE - Computer Society</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>

  <div id="events">
    <h2 class="text-center">Our Events speak for themselves</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://res.cloudinary.com/design-team/image/upload/gravitas/2014/gpl/1.png">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/design-team/image/upload/gravitas/2014/jumble/1.png">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/design-team/image/upload/gravitas/2014/mozilla/1.png">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/design-team/image/upload/gravitas/2014/ftp/1.png">
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

<!-- Container (Portfolio Section) -->
<div id="team" class="container-fluid text-center">
  <h2>Team</h2><br>
  <div class="row text-center slideanim">
    <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img class="img-responsive" src="http://res.cloudinary.com/ieeecsvit/members/13/AyushAgarwal.jpg" alt="Ayush Agarwal" width="250" height="250">
        <p><strong>Ayush Agarwal</strong></p>
        <p>President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/KaranPittie.jpg" alt="Karan Pittie" width="250" height="250">
        <p><strong>Karan Pittie</strong></p>
        <p>Vice President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/ShivamMathur.jpg" alt="Shivam Mathur" width="250" height="250">
        <p><strong>Shivam Mathur</strong></p>
        <p>Vice President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/GauravAgerwala.jpg" alt="Gaurav Agerwala" width="250" height="250">
        <p><strong>Gaurav Agerwala</strong></p>
        <p>General Secretary</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/VinayGupta.jpg" alt="Vinay Gupta" width="250" height="250">
        <p><strong>Vinay Gupta</strong></p>
        <p>Technical Head</p>
      </div>
    </div>
  </div>
  <div class="row text-center slideanim">
    <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/JillPadalia.jpg" alt="Jill Padalia" width="250" height="250">
        <p><strong>Jill Padalia</strong></p>
        <p>Treasurer</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/ReetuparnaMukherjee.jpg" alt="" width="250" height="250">
        <p><strong>Reetuparna Mukherjee</strong></p>
        <p>Operations Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/SukritiSinha.jpg" alt="Sukriti Sinha" width="250" height="250">
        <p><strong>Sukriti Sinha</strong></p>
        <p>Design Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/VaishnaviGunta.jpg" alt="Vaishnavi Gunta" width="250" height="250">
        <p><strong>Vaishnavi Gunta</strong></p>
        <p>Marketing Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/SomyaMehta.jpg" alt="Somya Mehta" width="250" height="250">
        <p><strong>Somya Mehta</strong></p>
        <p>Public Relations Officer</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">Contact Us</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Vellore, TN</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9787122878 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> ieeecs@vit.ac.in</p>    
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
    </div>
    <hr/>
    <div class="row">
      <div class="col-sm-2 col-sm-offset-4"> <a href="https://fb.com/ieeecsvit" target="blank"> <img id="fb-icon" src="fb.png" height="50px" width="50px"> </a> </div>
      <div class="col-sm-2"> <a href="https://github.com/IEEECS-VIT" target="blank"> <img id="gh-icon" src="github.png" height="50px" width="50px"> </a> </div>
    </div>
</div>


<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(12.9165, 79.1325);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<footer class="container-fluid text-center" style="padding: 10px 50px;">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 2016<a href="#myPage"> IEEE - Computer Society</a> All Rights Reserved</p>
</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</div>
</div>
</body>
<script>
  var something = document.getElementById('myPageMain');
  var body = document.body, html = document.documentElement;
  var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
  var pattern = Trianglify({
      width: window.innerWidth,
      height: height
  });
  something.style['background-image'] = 'url(' + pattern.png() + ')';
</script>
</html>