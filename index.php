<?php if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(“ob_gzhandler”); else ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IEEE - Computer Society</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/1.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="styles/normalize.css">
<link rel="stylesheet" href="styles/main.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

<script async src="scripts/modernizr-2.6.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>

<script>
  $(document).ready(function() {
    setTimeout(function(){
      $('body').addClass('loaded');
    }, 3000);
  });
</script>

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
        <a class="navbar-brand" href="#myPage"><img src="img/1.png" height="50px" width="50px" style="margin-top:-15px;"></a>
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
    <h2 class="text-center">IEEE - Computer Society</h2>
    <div class="row">
      <div class="col-sm-10 text-center col-sm-offset-1">
        <h4>Welcome to the IEEE - Computer Society, VIT!</h4>
        <p> We are grateful for your visit to one of the most renowned student chapters at Vellore Institute of Technology. Being the center stage for premium events and numerous workshops we boast of a dynamic team that is ever evolving. Be it tinkering with the internet, app development or artificial intelligence, our array of exciting projects is sure to gratify the geek in you. </p>
      </div>
    </div>
  </div>

  <div id="events" class="container-fluid">
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
          <img src="http://res.cloudinary.com/ieeecsvit/image/upload/s--hkO09kMP--/q_jpegmini/v1444109840/events/gravitas/2014/gpl/1.jpg">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/ieeecsvit/image/upload/s--bOqODQaC--/q_jpegmini/v1444109879/events/gravitas/2014/jumble/1.jpg">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/ieeecsvit/image/upload/s--P6JOIcqX--/q_jpegmini/v1444109989/events/gravitas/2014/mozilla/1.jpg">
        </div>
        <div class="item">
          <img src="http://res.cloudinary.com/ieeecsvit/image/upload/s--LJjgbAVK--/q_jpegmini/v1444109786/events/gravitas/2014/ftp/1.jpg">
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

  <div id="ourTeam" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#ourTeam" data-slide-to="0" class="active"></li>
      <li data-target="#ourTeam" data-slide-to="1"></li>
      <li data-target="#ourTeam" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/13/AyushAgarwal.jpg" alt="Ayush Agarwal" width="250" height="250">
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

  <div class="item">
      <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/KunalNagpal.jpg" alt="Kunal Nagpal" width="250" height="250">
        <p><strong>Kunal Nagpal</strong></p>
        <p>President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/AmanManawat.jpg" alt="Aman Manawat" width="250" height="250">
        <p><strong>Aman Manawat</strong></p>
        <p>Vice President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/AmitiDave.jpg" alt="Amiti Dave" width="250" height="250">
        <p><strong>Amiti Dave</strong></p>
        <p>General Secretary</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/ArpitSabhrewal.jpg" alt="Arpit Sabhrewal" width="250" height="250">
        <p><strong>Arpit Sabhrewal</strong></p>
        <p>Technical Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/UmangPalan.jpg" alt="Umang Palan" width="250" height="250">
        <p><strong>Umang Palan</strong></p>
        <p>Design Head</p>
      </div>
    </div>
    <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/KaranJasani.jpg" alt="Karan Jasani" width="250" height="250">
        <p><strong>Karan Jasani</strong></p>
        <p>Treasurer</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/DeepPradhan.jpg" alt="Deep Pradhan" width="250" height="250">
        <p><strong>Deep Pradhan</strong></p>
        <p>Associate Technical Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/VikhyatiSingh.jpg" alt="Vikhyati Singh" width="250" height="250">
        <p><strong>Vikhyati Singh</strong></p>
        <p>Design Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/TannikaAggarwal.jpg" alt="Tannika Aggarwal" width="250" height="250">
        <p><strong>Tannika Aggarwal</strong></p>
        <p>Marketing Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/12/AnkitSaharia.jpg" alt="Ankit Saharia" width="250" height="250">
        <p><strong>Ankit Saharia</strong></p>
        <p></p>
      </div>
    </div>
  </div>

  <div class="item">
      <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/MukundMore.jpg" alt="Mukund More" width="250" height="250">
        <p><strong>Mukund More</strong></p>
        <p>President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/KashishSinghal.jpg" alt="Kashish Singhal" width="250" height="250">
        <p><strong>Kashish Singhal</strong></p>
        <p>Vice President</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/AnirudhJitani.jpg" alt="Anirudh Jitani" width="250" height="250">
        <p><strong>Anirudh Jitani</strong></p>
        <p>General Secretary</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/VivekShah.jpg" alt="Vivek Shah" width="250" height="250">
        <p><strong>Vivek Shah</strong></p>
        <p>Technical Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/AnshulKalra.jpg" alt="Anshul Kalra" width="250" height="250">
        <p><strong>Anshul Kalra</strong></p>
        <p>Design Head</p>
      </div>
    </div>
    <div class="col-sm-2 col-sm-offset-1">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/PranjalDaga.jpg" alt="Pranjal Daga" width="250" height="250">
        <p><strong>Pranjal Daga</strong></p>
        <p>Treasurer</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/AneeshNeelam.jpg" alt="Aneesh Neelam" width="250" height="250">
        <p><strong>Aneesh Neelam</strong></p>
        <p>Associate Technical Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/AkshayDixit.jpg" alt="Akshay Dixit" width="250" height="250">
        <p><strong>Akshay Dixit</strong></p>
        <p>Design Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/NamanJain.jpg" alt="Naman Jain" width="250" height="250">
        <p><strong>Naman Jain</strong></p>
        <p>Marketing Head</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="http://res.cloudinary.com/ieeecsvit/members/11/ShubhamGoel.jpg" alt="Shubham Goel" width="250" height="250">
        <p><strong>Shubham Goel</strong></p>
        <p></p>
      </div>
    </div>
  </div>

    <a class="left carousel-control" href="#ourTeam" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#ourTeam" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
      <div class="col-sm-2 col-sm-offset-4"> <a href="https://fb.com/ieeecsvit" target="blank"> <img id="fb-icon" src="img/fb.png" height="50px" width="50px"> </a> </div>
      <div class="col-sm-2"> <a href="https://github.com/IEEECS-VIT" target="blank"> <img id="gh-icon" src="img/github.png" height="50px" width="50px"> </a> </div>
    </div>
</div>

<!--
<div id="googleMap" style="height:400px;width:100%;"></div>
-->
<!-- Add Google Maps -->
<!--
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
-->
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
  var something = document.getElementById('myPage');
  var body = document.body, html = document.documentElement;
  var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
  var pattern = Trianglify({
      width: window.innerWidth,
      height: height
  });
  something.style['background-image'] = 'url(' + pattern.png() + ')';
</script>
</html>
