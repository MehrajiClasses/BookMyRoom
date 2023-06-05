<!DOCTYPE html>
<!-- CodingMaker-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Single room</title>
    <!--CSS Style-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    

 </head>
  <body> 
    <link rel="stylesheet" href="../css/bookSingleRoom.css" type="text/css">
    <div class="box" > 
        <div class="form" >
      <form action="booked.html" method="post">
        <h2>Book Your Room</h2>
        <div class="inputbox">
          <input type="text" required="required" name="fname" pattern=[A-Z\sa-z]{3,20}  >
          <span>First Name</span>
          <i></i>
        </div>

        <div class="inputbox">
            <input type="text" required="required" name="lname" pattern=[A-Z\sa-z]{3,20} >
            <span>Last Name</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="number" required="required" name="number" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) >
            <span>Mobile Number</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="email" required="required" name="email"  >
            <span>Email</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="number" required="required" name="adult" min ='1' >
            <span>Adults</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="number" required="required" name="childrens" min ="0" >
            <span>Childrens</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="date" id="checkin-date" name="checkin" required>
            <span>Check-in date</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="date" id="checkout-date" name="checkin" required>
            <span>Check-out date</span>
            <i></i>
          </div>

          <br><br><br>
        
          <input type="submit" value="Book" name="submit"  >
          
      </form>
    </div>
  </div>
  </body>
</html>

