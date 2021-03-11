<?php
session_start();
include("header.php");

?>

<div id="article">
    <h1>Thank you ordering food from us.</h1> <hr>
    <h3>Your food will be delivered to you in 1 hour <br> our delivery boy will contact you <br> by reaching in your address.</h3>
    <hr>
    <h5>Please keep your total amount cash ready.</h5> <hr>
    <h2>Contact us</h2> <hr>
    <h4>If you have any complaints then please mail us</h4> <br>
    <h4>Our mail id - myonlinemealsupport@gmail.com</h4> <br>
    <h6>Thank you</h6>
</div>

<div id="sidebar">

    <ul>
       <li><a class="active" href="menu.php">Menu</a></li>
        <li><a href="order.php">Order now</a></li>
        
        <li><a href="index.php">Cancel</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>


</div>

<?php 
            include("footer.php");
            ?>
