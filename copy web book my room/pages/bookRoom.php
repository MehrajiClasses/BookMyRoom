<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BookRoom</title>
        <link rel="stylesheet" href="../css/bookRoom.css">
    </head>
<body>
    <div class="box">
    <form action="booked.html" method="post"  >
        <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="hanumana" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
            <label for="email">Your E-mail</label>
            <input type="email" id="email" name="visitor_email" placeholder="mehrajiclasses@gmail.com" required>
        </div>
        <div class="elem-group">
            <label for="phone">Your Mobile Number</label>
            <input type="tel" id="phone" name="visitor_phone" placeholder="975-805-1404" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        <hr>
        <div class="elem-group inlined">
            <label for="adult">Adults</label>
            <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
            <label for="child">Children</label>
            <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkin-date">Check-in Date</label>
            <input type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkout-date">Check-out Date</label>
            <input type="date" id="checkout-date" name="checkout" required>
        </div>
        <div class="elem-group">
            <select id="room-selection" name="room_preference" required>
                <option value="">Choose payment type : </option>
                <option value="gpay">G Pay</option>
                <option value="paytm">Paytm</option>
                <option value="face to faca">Face to Face</option>
            </select>
        </div>
        <hr>
        <div class="elem-group">
            <label for="message">Anything Else?</label>
            <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
        </div>
       <a href="booked.html"> <button  type="submit">Book The Room</button></a>
    </form>
   </div>
   
</body>
</html>