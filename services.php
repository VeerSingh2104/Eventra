<?php
session_start();
?>
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

    <title>Hello, world!</title>
    <style>
        .top{
            color: white;
        }
       body{padding: 0px;
            margin: 0px;
    background-image: url("blur.jpeg");
background-repeat: no-repeat;
background-size: 100%;}
    </style>
  </head>
    
<body>
    <section class="section bg-color">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="sub-heading text-center">
                        <span>SERVICES</span>
                        <h2>Browse Event Vendors</h2>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="service-icon mb-3">
                            <img src="img/1.png" class="img-fluid w-25" alt="">
                        </div>
                        <div class="service-content">
                        <a href="venue.php">
                            <h3 class="mb-3">Venue</h3></a>
                            <p>Venue is the place where the magic happens. The venue location, facilities, and atmosphere are critical to ensuring your event's sucess. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="service-icon mb-3">
                            <img src="img/2.png" class="img-fluid w-25" alt="">
                        </div>
                        <div class="service-content">
                        <a href="catering.php">
                            <h3 class="mb-3">Catering</h3></a>
                            <p>Having a caterer means less meal-planning and cooking for yourself, 
                                more free time, eating delicious, correct portion sizes, and so much more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="service-icon mb-3">
                            <img src="img/4.png" class="img-fluid w-25" alt="">
                        </div>
                        <div class="service-content">
                          <a href="decoration.php">
                            <h3 class="mb-3"  >Decorations</h3></a>
                            
                            <p>Other than setting the mood, 
                                creating the ambiance and theme as well as the ultimate experience of your Event, 
                                the Décor also underscores the importance of your Event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="service-icon mb-3">
                            <img src="img/6.png" class="img-fluid w-25" alt="">
                        </div>
                        <div class="service-content">
                        <a href="custom.php">
                            <h3 class="mb-3">Custom Package</h3></a>
                            <p>Customization- Everything is customized to suit the target audience and disseminate the message effectively. 
                                Emphasis on client satisfaction is very important for making an event successful. </p>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
    <button type="submit" onclick="redirect_to_payment()" value="Print your Final Receipt">Print Your Receipt</button>
    <script>
    function redirect_to_payment()
    {
        window.location.href="payment.php";
    }
    </script>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap');
body{
    font-family: 'Livvic', sans-serif;
}
.section{
    padding-top: 50px;
    padding-bottom: 50px;
}
.bg-color{
    background-color: #F6F7F9;
}
.sub-heading span{
    color: #FFBF00;
    font-weight: 600;
}
.sub-heading h2{
    font-weight: 700;
    font-family: 'Livvic', sans-serif;
}
.service-box{
    padding: 20px;
    background-color: #FBCEB1;
    transition: .4s;
    transform: translateY(0);
    cursor: pointer;
}
.service-content h3{
    font-size: 24px;
    font-weight: 700;
    color: rgb(58, 58, 58);
}
.service-box:hover{
    box-shadow: 0 0 30px #eee;
    transform: translateY(-.5rem);
}
.service-content h3:hover{
    color: #FFBF00;
}
</style>
</html>
</html>