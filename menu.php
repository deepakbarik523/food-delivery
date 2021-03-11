<?php
session_start();
include("header.php");

?>

<div id="article">
   <h1>Today's menu list:</h1>  <hr>
   <h3>Non veg item:</h3> <hr>
   <h5>1. Fish curry - 100rs</h5> 
   <h5>2. Chiken curry - 100rs</h5>
   <h5>3. Chiken mughlai - 80rs</h5>
   <h5>4. Chilly chiken - 70rs</h5>
   <h5>5. Chiken 65 - 70rs</h5>
   <h5>6. Chiken double egg roll - 60rs</h5>
   <h5>7. Chiken single egg roll - 55</h5>
   <h5>8. Chiekn pasta - 50rs</h5>
   <h5>9. Chiken duble egg chowmin - 45rs</h5>
   <h5>10. Chiken single egg chowmin - 40rs</h5>
   <h5>11. Chiken biriyani</h5>  <hr>
   <h3>Veg item:</h3>  <hr>
   <h5>12. Mix veg curry</h5>
   <h5>13. Paneer curry</h5>
   <h5>14. Salad</h5>
   <h5>15. Veg biriyani</h5>
   <h5>16. Masala channa</h5>
   <h5>17. Paneer biriyani</h5>
   <h5>18. Dahi kebab</h5>
   <h5>19. Mushroom curry</h5>
   <h5>20. Gobi aloo</h5>
   <h5>21. Paneer kofta</h5>
   
    
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
