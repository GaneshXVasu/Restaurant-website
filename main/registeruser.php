<?php

include '../config.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomieFood</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js" defer></script>
  <link rel="stylesheet" type="text/css" href="vendors/ionicons.min.css">



</head>

<body>
  <div class="row col-lg-12 col-12 col-md-12 main" id="gomain">
    <header id="home" class="container p-1 menu">

      <nav class="col-12 navbar navbar-expand-lg p-1 Nav">
        <a href="" class="navbar-brand mb-0 h1 logo">
          <span><i class="fas fa-utensils"></i></span>HomiFood
        </a>
        <!--------------------------------------Login Popup--------------------------------------------------------->

        <a class="btn hiddenbtn" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i
            class="fas fa-user-circle"></i></a>

        <!-- The Modal -->
        <div class="modal fade myimg" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title ml-2">Thank you for visiting..!<?php echo $_SESSION['username'] ?></h4>
                <a class="close-pop" role="button" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
              </div>

              <!-- Modal body -->
              <div class="modal-body loggerpop">
                <i class="fas fa-users"></i>
                <a href="../logout.php"><button type="button" class="btn">Logout</button></a>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer newlogger">

              </div>

            </div>
          </div>
        </div>


        <!-----------------------------------------Login pop end------------------------------------------------->

        <!-----------------------------------------Navbar Starts------------------------------------------------->


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynav">
          <i class="fas fa-bars"></i></button>

        <div class="collapse navbar-collapse" id="mynav">
          <ul class="navbar-nav ml-auto
              align-items-center">
            <li class="nav-item active"><a href="#home" class="nav-link active">HOME</a></li>
            <li class="nav-item "><a href="#meals" class="nav-link">OUR SPECIAL</a></li>
            <li class="nav-item dropdown"><a href="#how" class="nav-link dropdown-toggle" id="droplist" role="button"
                data-bs-toggle="dropdown">MORE</a>

              <ul class="dropdown-menu">
                <li><a href="#how" class="dropdown-item">HOW IT WORKS</a></li>
                <li><a href="#plan" class="dropdown-item">OUR PLANS</a></li>
                <li><a href="#location" class="dropdown-item">LOCATIONS</a></li>
                <li><a href="#feed" class="dropdown-item">CUSTOMER FEEDBACK</a></li>
              </ul>
            </li>

            <li class="nav-item "><a href="#AboutUS" class="nav-link">ABOUT US</a></li>
            <li class="nav-item "><a href="#contactUS" class="nav-link">CONTACT US</a></li>
            <li class="nav-item userlog"><a href="#loguser" class="nav-link" data-bs-toggle="modal"
                data-bs-target="#myModal" role="button"><i class="fas fa-user-circle"></i></a></li>

          </ul>

        </div>


      </nav>
      <!-----------------------------------------Navbar end------------------------------------------------->
      <!------------------------------------------Main page content starts here----------------------------->




      <div class="container head-content">
        <div class="hero-text-box col-12 col-md-12 col-lg-12 pt-5">
          <h1 class="my-1  col-12 col-md-12 col-lg-12 ">goodbye junk food.</h1>
          <h1 class="my-1 col-12 col-md-12 col-lg-12">Hello super Healthy meals</h1>
          <a class="btn btn-outline-primary mr-2" href="#meals" role="button">I'm hungry</a>
          <a class="btn btn-outline-primary " href="#meals" role="button">show me more</a>
        </div>
      </div>

    </header>
    <div class="gotop"><a href="#gomain"><i class="fas fa-arrow-circle-up"></i></a></div>
  </div>
  <!------------------------------------------Main page content End here----------------------------->

  <!---------------------------------OurSpecial section starts---------------------------------------->

  <section id="meals" class="container-fluid">
    <div class="row pt-5">
      <h2>Favorite meals</h2>
    </div>
    <ul class="row m-0 mealshow ">
      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/1.jpg" class="img-fluid img-thumbnail" alt="Korean bibimbap with egg and vegetables">
        </figure>
      </li>

      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/2.jpg" class=" img-fluid img-thumbnail" alt="Simple italian pizza with cherry tomatoes">
        </figure>
      </li>


      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/3.jpg" class="img-fluid img-thumbnail" alt="Chicken breast steak with vegetables">
        </figure>
      </li>


      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/4.jpg" class="img-fliud img-thumbnail" alt="Autumn pumpkin soup">
        </figure>
      </li>

    </ul>
    <ul class="row m-0 mealshow">
      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/5.jpg" class="img-fliud img-thumbnail" alt="Paleo beef steak with vegetables">
        </figure>
      </li>
      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/6.jpg" class="img-fliud img-thumbnail" alt="Healthy baguette with egg and vegetables">
        </figure>
      </li>
      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/7.jpg" class="img-fliud img-thumbnail" alt="Burger with cheddar and bacon">
        </figure>
      </li>
      <li class="col-12 col-md-6 col-lg-3 m-0 p-0">
        <figure class="meal-photo">
          <img src="img/8.jpg" class="img-fliud img-thumbnail" alt="Granola with cherries and strawberries">
        </figure>
      </li>
    </ul>

    <!------------------------------------------Order popup starts here----------------------------->

    <div class="row justify-content-center mt-4">
      <a href="" class="col-8 col-lg-2 btn btn-outline-info btn-2" data-bs-toggle="modal"
        data-bs-target="#myorder">Order Now</a>
    </div>

    <div class="modal fade myimg" id="myorder">
      <div class="modal-dialog">
        <div class="modal-content  bg-warning">
          <div class="modal-header">
            <p class="modal-title ml-2 ">Hi..! Order your Favourite Food</p>
            <a class="close-pop" role="button" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
          </div>
        </div>
      </div>
    </div>


  </section>


  <!--------------------------------------------------More Section starts-------------------------------------------------->

  <!--------------------------------------------------How it works------------------------------------------------------------------------>
  <section id="how" class="steps">
    <div class="row pt-5">
      <h2 class="col-12">How it works &mdash; Simple as 1, 2, 3</h2>
    </div>
    <div class="container row">
      <div class="col-12 col-lg-6 step-box">
        <img src="img/app-iPhone.png" alt="Omnifood app on iphone" class="app-screen">
      </div>
      <div class="col-12 col-lg-6 step-box">
        <div class="works-step">
          <div>1</div>
          <p>Choose the subscription plan that best fits your needs and sign up today</p>
        </div>
        <div class="works-step">
          <div>2</div>
          <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
        </div>
        <div class="works-step">
          <div>3</div>
          <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
        </div>
        <a href="#" class="btn-app"><img src="img/download-app.svg" alt="App store button"></a>
        <a href="#" class="btn-app"><img src="img/download-app-android.png" alt="Playstore button"></a>

      </div>
    </div>
  </section>
  <!--------------------------------------------------plan Section------------------------------------------------------------------------>

  <section id="plan" class=" plans">
    <div class="row p-5">
      <h2> Start eating healthy today</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-8 col-sm-8 col-md-6 col-lg-4 col-xl-3">
        <div class="plan-box m-4 pl-4">
          <div>
            <h3>Premium</h3>
            <p class="plan-price">$399 <span>/ month</span></p>
            <p class="plan-price-meal">That???s only 13.30$ per meal</p>
          </div>
          <div>
            <ul>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
          </ul>
          </div>
          <div>
            <a href="" class="btn btn-outline-primary btn-1">Sign up now</a>
          </div>
        </div>
      </div>
      <div class="col-8 col-sm-8 col-md-6 col-lg-4 col-xl-3">
        <div class="plan-box m-4 pl-4">
          <div>
            <h3>Pro</h3>
            <p class="plan-price">$149 <span>/ month</span></p>
            <p class="plan-price-meal">That???s only $14.90 per meal</p>
          </div>
          <div>
            <ul>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
          </ul>
          </div>
          <div>
            <a href="" class="btn btn-outline-primary btn-2">Sign up now</a>
          </div>
        </div>
      </div>
      <div class="col-8 col-sm-8 col-md-6 col-lg-4 col-xl-3">
        <div class="plan-box m-4 pl-4">
          <div>
            <h3>Starter</h3>
            <p class="plan-price">19$ <span>/ meal</span></p>
            <p class="plan-price-meal">&nbsp;</p>
          </div>
          <div>
            <ul>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
              <li><i class="ion-ios-close-empty icon-small"></i></li>
              <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
          </ul>
          </div>
          <div>
            <a href="" class="btn btn-outline-primary btn-2">Sign up now</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--------------------------------------------------Locations Section---------------------------------------------->

  <section id="location" class="container p-5">
    <div class="row my-4">
      <h2>We're currently in these cities</h2>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 box">
        <img src="img/lisbon-3.jpg" alt="Lisbon">
        <h3>Lisbon</h3>
        <div class="city-feature">
          <i class="ion-ios-person icon-small"></i>
          1600+ eaters
        </div>
        <div class="city-feature">
          <i class="ion-ios-star icon-small"></i>
          60+ top chefs
        </div>
        <div class="city-feature">
          <i class="ion-social-twitter icon-small"></i>
          <a href="#">@Homifood_lx</a>
        </div>

      </div>
      <div class="col-12 col-md-6 col-lg-3 box">
        <img src="img/berlin.jpg" alt="Berlin">
        <h3> Berlin</h3>

        <div class="city-feature">
          <i class="ion-ios-person icon-small"></i>
          2300+ happy eaters
        </div>
        <div class="city-feature">
          <i class="ion-ios-star icon-small"></i>
          110+ top chefs
        </div>
        <div class="city-feature">
          <i class="ion-social-twitter icon-small"></i>
          <a href="#">@Homifood_berlin</a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 box">
        <img src="img/london.jpg" alt="London">
        <h3>London</h3>
        <div class="city-feature">
          <i class="ion-ios-person icon-small"></i>
          1600+ eaters
        </div>
        <div class="city-feature">
          <i class="ion-ios-star icon-small"></i>
          60+ top chefs
        </div>
        <div class="city-feature">
          <i class="ion-social-twitter icon-small"></i>
          <a href="#"> @Homifood_lx</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 box">
        <img src="img/san-francisco.jpg" alt="san-francisco">
        <h3>San Francisco</h3>
        <div class="city-feature">
          <i class="ion-ios-person icon-small"></i>
          3700+ happy eaters
        </div>
        <div class="city-feature">
          <i class="ion-ios-star icon-small"></i>
          160+ top chefs
        </div>
        <div class="city-feature">
          <i class="ion-social-twitter icon-small"></i>
          <a href="#"></i>@Homifood_sf</a>

        </div>
      </div>
    </div>
  </section>


  <!--------------------------------------------------Review Section---------------------------------------------------->
  <section id="feed" class="testimony">
    <div class="row p-5">
      <h2 class="col-12">See What Our Customers Says...</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-3">
        <blockquote class="col-12 m-1">
          Homifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Homifood is a
          life-saver. Now that I got used to it, I couldn't live without my daily meals!
          <br>
          <cite><img src="img/customer-1.jpg" alt=""> Alberto Duncan</cite>
        </blockquote>
      </div>
      <div class="col-12 col-md-12 col-lg-3">
        <blockquote class="col-12 m-1">
          Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here
          in Lisbon, but no one comes even close to Omifood.Me and my family are so in love!
          <br>
          <cite><img src="img/customer-2.jpg" alt=""> Joana Silva</cite>
        </blockquote>
      </div>
      <div class=" col-12 col-md-12 col-lg-3">
        <blockquote class="col-12 m-1">
          I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up
          with Homifood. Best food delivery service in the Bay Area. Keep up the great work!
          <br>
          <cite><img src="img/customer-3.jpg" alt=""> Milton Chapman</cite>
        </blockquote>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
      <a href="" class="col-8 col-lg-2 btn btn-outline-info btn-2">More Review</a>
    </div>
  </section>

  <!----------------------------------------------------About Us----------------------------------------------------------------------->

  <section id="AboutUS" class="container icony">
    <div class="pt-3">
      <h2 class="col">Get food fast &ndash; not fast food.</h2>
      <p class="col text-center mb-5">Hello, we???re Homifood, your new premium food delivery service. We know you???re
        always
        busy. No time for cooking. So let us take care of that, we???re really good at it, we promise!</p>
    </div>

    <div class="row">
      <div class="col-12 col-lg-3 box">
        
        <i class="ion-ios-infinite-outline icon-big"></i>
        <h3 class="col-12 ">Up to 365 days/year</h3>
        <p class="col-12 ">Never cook again! We really mean that. Our subscription plans include up to 365 days/year
          coverage. You can
          also choose to order more flexibly if that's your style.</p>
      </div>
      <div class="col-12 col-lg-3 box">
        <i class="ion-ios-stopwatch-outline icon-big"></i>
        <h3 class="col-12 ">Ready in 20 minutes</h3>
        <p class="col-12">You're only twenty minutes away from your delicious and super healthy meals delivered right to
          your home. We
          work with the best chefs in each town to ensure that you're 100% happy.</p>
      </div>
      <div class="col-12 col-lg-3 box">
        <i class="col-12  ion-ios-nutrition-outline icon-big"></i>
        <h3 class="col-12 ">100% organic</h3>
        <p class="col-12">All our vegetables are fresh, organic and local. Animals are raised without added hormones or
          antibiotics.
          Good for your health, the environment, and it also tastes better!</p>
      </div>
      <div class="col-12 col-lg-3 box">
        <i class="col-12 ion-ios-cart-outline icon-big"></i>
        <h3 class="col-12 ">Order anything</h3>
        <p class="col-12">We don't limit your creativity, which means you can order whatever you feel like. You can also
          choose from
          our menu containing over 100 delicious meals. It's up to you!</p>
      </div>
    </div>

  </section>

  <!--------------------------------------------------Contact Us------------------------------------------------------------------------>
  <section id="contactUS" class="section-form">
    <div class="row p-5">
      <h2>We're happy to hear from you</h2>
    </div>
    <div class="container">
      <form action="" onsubmit="sendEmail(); reset(); return false;" class="offset-2">
        <div class="form-group row">
          <label for="name" class="col-6 col-lg-5 col-form-label">Name</label>
          <div class="col-6 col-lg-7">
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class=" col-6 col-lg-5 col-form-label">Email</label>
          <div class="col-6 col-lg-7">
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="selection" class="col-6 col-lg-5 col-form-label">How did you find us.?</label>
          <div class="col-4 cl-lg-7">
            <select class="form-select" id="selection">
              <option value="-select-" selected disabled>--select--</option>
              <option value="friends">Friends</option>
              <option value="social">social media</option>
              <option value="other">Others</option>
            </select>
          </div>
          <div class="form-group row ">
            <div class="col-6 col-lg-5">Newsletter</div>
            <div class="col-6 col-lg-7">
              <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="gridCheck1" checked>
                <label class="form-check-label" for="gridCheck1">
                  yes,Please..!
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="message" class="col-12 col-lg-5 col-form-label">Drop us a line</label>
            <div class="col-12 col-lg-7">
              <textarea class="form-control" id="message" rows="3" placeholder="your message"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="offset-8 col-sm-3 col-lg-3">&nbsp;</label>
            <div><button type="submit" class="btn btn-primary">Send</button></div>
          </div>
      </form>
    </div>
  </section>
  <!--------------------------------------------------Footer------------------------------------------------------------------------>
  <footer>
    <div class="container row">
      <div class="col">
        <ul class="footer-nav">
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">ios App</a></li>
          <li><a href="#">Android App</a></li>

        </ul>
      </div>
      <div class="col social">
        <ul class="social-link">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row text-center">
      <p id="footer-text">
        copyright &copy;2022 by Homifood. All rights reserved.
      </p>
    </div>
  </footer>


  <script src=" https://smtpjs.com/v3/smtp.js"></script>
  <script>

    function sendEmail() {
      Email.send({
        SecureToken: "72fb659e-d8f3-47a2-b6a2-c76a6393e3d6",
        To: 'ganeshvasu12@gmail.com',
        From: document.getElementById("email").value,
        Subject: "This is the subject",
        Body: "Name: " + document.getElementById("name").value
          + "<br> Email: " + document.getElementById("email").value
          + "<br> Known by: " + document.getElementById("selection").value
          + "<br> Message: " + document.getElementById("message").value

      }).then(
        message => alert("Message Sent Successfully")
      );
    }

  </script>

</body>

</html>