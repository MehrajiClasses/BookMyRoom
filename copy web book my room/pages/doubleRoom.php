<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMS</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/text">
</head>
<?php
$droom = $_SESSION['user_name'];
if($droom == true){

}else{
  header('location:login.html');
}
?>
<body>

<!-- header section -->
<header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
        </div>

        <ul class="nav-menu">
          <li> <a href="../pages/menu.php">Home</a> </li>
          <li> <a href="../pages/singleRoom.php">Single bed Rooms</a> </li>        
          <li> <a href="../pages/doubleRoom.php">Double bed Rooms</a> </li>
          <li> <a href="#contact">contact us</a> </li>
          <li><a href="../pages/logout.php">Logout</a></li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

        <div class="head_contact">
          <i class="fas fa-phone-volume"></i>
          <span>+91 8923797699</span>
        </div>
      </nav>
    </div>

  </header>

    <section class="offer mtop" id="services">
        <div class="container">
          <div class="heading">
            <h5>EXCLUSIVE OFFERS </h5>
            <h3>Starting from 699 only</h3>
          </div>
    
          <div class="content grid2 mtop">
            <div class="box flex">
              <div class="left">
                <img src="../images/o1.jpg" alt="">
              </div>
              <div class="right">
                <h4>Double bed room</h4>
                <div class="rate flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                 
                </div>
                <p><i class="fas fa-map-marker-alt">  Talli mirai Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  No free wi-fi facility available</i>   
                    <i class="fas fa-phone">   +91 7689543902</i> <i class="fas fa-mug-hot"> No Food facility available  </i></p>
                <h5> <i class="fas fa-dollar-sign"></i>  From 699/night</h5>
                <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
            <div class="box flex">
              <div class="left">
                <img src="../images/o2.jpg" alt="">
              </div>
              <div class="right">
                <h4>Double bed room</h4>
                <div class="rate flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p><i class="fas fa-map-marker-alt">  Malli mirai Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i>  <i class="fas fa-desktop">  No free wi-fi facility available</i> 
                    <i class="fas fa-phone">   +91 7689647902</i> <i class="fas fa-mug-hot"> No Food facility available </i></p>
                <h5> <i class="fas fa-dollar-sign"></i>  From 699/night</h5>
                <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
            <div class="box flex">
              <div class="left">
                <img src="../images/o3.jpg" alt="">
              </div>
              <div class="right">
                <h4>Double bed room</h4>
                <div class="rate flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p><i class="fas fa-map-marker-alt">  near Polytechnic college ,Dhrma food & Restaurant</i>  <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  No free wi-fi facility available</i> 
                    <i class="fas fa-phone">   +91 7689543902</i> <i class="fas fa-mug-hot"> No Food facility available  </i></p>
                <h5> <i class="fas fa-dollar-sign"></i>  From 899/night</h5>
                <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
            <div class="box flex">
              <div class="left">
                <img src="../images/o4.jpg" alt="">
              </div>
              <div class="right">
                <h4>Double bed room</h4>
                <div class="rate flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p><i class="fas fa-map-marker-alt">  main market Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i> <i class="fas fa-desktop">  free wi-fi facility available</i> 
                    <i class="fas fa-phone">   +91 8443543902</i><i class="fas fa-mug-hot"> Food facility available -extra charges may apply </i></p>
                <h5> <i class="fas fa-dollar-sign"></i>  From 899/night</h5>
                <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!------------------------------------------------------------------------------------------------->
<section class="offer mtop" id="services">
  <div class="container">
    <div class="heading">
    </div>

    <div class="content grid2 mtop">
      <div class="box flex">
        <div class="left">
          <img src="../images/o1.jpg" alt="">
        </div>
        <div class="right">
          <h4>Double bed room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
          </div>
          <p><i class="fas fa-map-marker-alt">  main market Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  free wi-fi facility available</i>  
            <i class="fas fa-phone">   +91 9876043902</i> <i class="fas fa-mug-hot"> Food facility available -extra charges may apply </i></p>
          <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
              <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="../images/o2.jpg" alt="">
        </div>
        <div class="right">
          <h4>Double bed room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p><i class="fas fa-map-marker-alt">  Gauchar Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i>  <i class="fas fa-desktop">  free wi-fi facility available</i>  
            <i class="fas fa-phone">   +91 9235643902</i> <i class="fas fa-mug-hot">Food facility available for once in a day</i></p>
          <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
             <div class="button">
                  <a href="bookDoubleRoom.php"><button>
                    <span>Book Now</span>
                  <i class="fas fa-arrow-circle-right"></i>
                  </button></a>
                </div>
        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="../images/o3.jpg" alt="">
        </div>
        <div class="right">
          <h4>Double bed room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p><i class="fas fa-map-marker-alt">  near Polytechnic college dwarahat[Almora]</i> <i class="fas fa-water">  24/7 water facility available</i>  <i class="fas fa-desktop">   No free wi-fi facility available</i> 
            <i class="fas fa-phone">   +91 7555543902</i> <i class="fas fa-mug-hot"> Food facility available </i></p>
          <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
          <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="../images/o4.jpg" alt="">
        </div>
        <div class="right">
          <h4>Double bed room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p><i class="fas fa-map-marker-alt">  main market Dwarahat</i> <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  free wi-fi facility available with hotstar subscription</i>  
            <i class="fas fa-phone">   +91 7777793902</i> <i class="fas fa-mug-hot"> Food facility available </i></p>
          <h5>All you can do is just enjoy the quality of the room</h5>
          <h5> <i class="fas fa-dollar-sign"></i>  From 1199/night</h5>
          <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!---------------------------------------------------------------------------->
<section class="offer mtop" id="services">
    <div class="container">
      <div class="heading">
      </div>
  
      <div class="content grid2 mtop">
        <div class="box flex">
          <div class="left">
            <img src="../images/o1.jpg" alt="">
          </div>
          <div class="right">
            <h4>Double bed room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             
            </div>
            <p><i class="fas fa-map-marker-alt">  near to the Dwarahat district Hospital</i> <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  free wi-fi facility available</i>   
                <i class="fas fa-phone">   +91 9876043902</i> <i class="fas fa-mug-hot"> Food facility available -extra charges may apply </i></p>
            <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
            <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="../images/o2.jpg" alt="">
          </div>
          <div class="right">
            <h4>Double bed room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p><i class="fas fa-map-marker-alt">  Gauchar Dwarahat</i>  <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  free wi-fi facility available</i>  
                <i class="fas fa-phone">   +91 9235643902</i> <i class="fas fa-mug-hot"> Food facility available -extra charges may apply </i></p>
            <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
            <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="../images/o3.jpg" alt="">
          </div>
          <div class="right">
            <h4>Double bed room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p><i class="fas fa-map-marker-alt">  near Polytechnic college dwarahat[Almora]</i> <i class="fas fa-water">  24/7 water facility available</i>  <i class="fas fa-desktop">   free wi-fi facility available</i> 
                <i class="fas fa-phone">   +91 7555543902</i><i class="fas fa-mug-hot"> One time free food facility available</i></p>
            <h5> <i class="fas fa-dollar-sign"></i>  From 999/night</h5>
            <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="../images/o4.jpg" alt="">
          </div>
          <div class="right">
            <h4>Double bed room</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p><i class="fas fa-map-marker-alt">  Ranikhet bus station [Almora]</i> <i class="fas fa-water">  24/7 water facility available</i>   <i class="fas fa-desktop">  free wi-fi facility available with netflix subcription</i>   
                <i class="fas fa-phone">   +91 7777793902</i><i class="fas fa-mug-hot"> free food facility available ..breakfast & dinner</i></p>
           <h5> We have the Best quality furnitures for you</h5>
            <h5> <i class="fas fa-dollar-sign"></i>  From 1199/night</h5>
            <div class="button">
             <a href="bookDoubleRoom.php"><button>
               <span>Book Now</span>
              <i class="fas fa-arrow-circle-right"></i>
               </button></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>


          </div>
        </div>
      </section>


      <footer>
    <div class="container top">
      <div class="subscribe" id="contact">
        <h2>Any qurerries?</h2>
        <p>contact us if you have any doubts about booking and other stuff.</p>
        <div class="input flex">
          <input type="email" placeholder="Your doubts">
          <a href=""><button class="flex1">
                <span>Send</span>
                <i class="fas fa-arrow-circle-right"></i>
            </button>
          </a>
        </div>
      </div>

      <div class="content grid  top">
        <div class="box">
          <div class="logo">
          </div>
          <p>For more details you can contact us through our Emails or our contact numbers. We will definitely look into your concern. </p>
          <div class="social flex">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <a href="https://www.instagram.com/ankit_parihar1.7/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@MehrajiClasses"> <i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div class="box" >
          <h2>Quick Links</h2>
          <ul>
            <li><i class="fas fa-angle-double-right"></i><a href="../pages/singleRoom.html">Single bed Rooms</a></li>
            <li><i class="fas fa-angle-double-right"></i><a href="../pages/doubleRoom.html">Double bed Rooms</a></li>
          </ul>
        </div>

        <div class="box">
          <h2>Facilities and Tourisum</h2>
          <ul>
            <li>Restaurants</a></li>
            <li>Wi-Fi facility available</li>
            <li>Best rooms in low budget</li>
            <li>Good for the students </li>
          </ul>
        </div>

        <div class="box">
          <h2>Services</h2>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>Dwarahat near polytechnic college,[ALMORA]</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+91 8923797699 <br> +91 9758051404</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>ankiparihar8923@gmail.com<br>mehrajiclasses@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
