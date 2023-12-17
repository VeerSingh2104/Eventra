<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <title>Eventra</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#">EVENTRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="eventra.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="signout.php">Sign Out</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="services.php">Services</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="">Eventra | <?php session_start(); echo "Welcome, ".$_SESSION["name"]."!"?> </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
  
  
  
  
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="ii6.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Wedding Reception</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="ii2.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>Mocktail Counters</h1>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="ii4.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>Corporate Events</h1>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  
  
  
   <div class="container">
   <div class="row text-center mt-5">
   <div class="col-md-12"><h1 class="animated bounce">Introduction</h1></div>
   </div>
   	<div class="row mt-5">
   		<div class="col-md-6"><img src="ii5.jpg" alt="e" class="img-fluid"></div>
   		<div class="col-md-6">
   		<h2>Our Specialization</h2><br>
      <br>
   		<p>Eventra Events and Entertainments Pvt Ltd specialises in planning lavish and flawless events. Our team has qualified and experienced event planners who get counted as the finest wedding designers and event organisers in Delhi, Noida and Gurgaon.</p>
   		
   		
   	</div>
   	</div>
   </div>
   
   
    <div class="container">
   <div class="row text-center mt-5">
   <div class="col-md-12"><a href="services.php"><h1>Services</h1></a></div>
   </div>
   	<div class="row mt-5">
   		
   		<div class="col-md-6">
   		<h2> What Eventra does? </h2>
   		<p>We are one of the best event management companies in Delhi NCR for organising weddings, receptions, birthday parties, corporate events etc. We are committed to serving the varied needs of the businesses and delivering the best outcomes meeting their expectations. </p>
   		
   		
   		
   	</div>
   	
   	<div class="col-md-6"><img src="ii1.jpg" alt="e" class="img-fluid wow zoomIn"></div>
   	</div>
   	
   </div>
   
   
   <footer class=" mt-5 bg-dark text-light text-center">
   	 <h4 class="pt-3 pb-3">www.eventra.com</h4>
   </footer>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    
    <script>
	  var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();
	</script>
    
  </body>
</html>

