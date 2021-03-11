<?php 

session_start();
include("header.php");

$con= mysqli_connect('localhost','root','','food');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $food= $_POST['food'];
    $quantity= $_POST['quantity'];
    $address=$_POST['address'];
    $phonenumber=$_POST['phonenumber'];

    
    $sql="insert into foodorder (name,food,quantity,address,phonenumber) VALUES ('$name','$food','$quantity','$address','$phonenumber')";
    $exec=mysqli_query($con,$sql);
    if($exec){
       header("Location:sub.php");
    }else{
        header("Location:index.php");
    }
}

?>

<div id="article">
    <h1>Please Provide your details here
        we will try to provide as service as soon as possible.</h1> <br>
       <h4 style="color:red;padding:10px;">  WARNING:If you provide wrong details we will not able to deliver your food. </h4>
    <form action="order.php" method="POST">
        <input style="padding:25px;" type="text" name="name" placeholder="Enter your full name"><br>
        <input style="padding:25px;" type="text" name="food" placeholder="Enter the food name or codeno. as per the menu list">
        <input style="padding:25px;" type="text" name="quantity" placeholder="Enter how many plate you want to order">
        <input style="padding:25px;" type="text" name="address" placeholder="Enter your complete address">
        <input style="padding:25px;" type="text" name="phonenumber" placeholder="Enter your contact number">
        <input  style="margin-left:370px; color:red;" type="submit" value="submit" name="submit">
    </form>
</div>

<div id="sidebar">

    <ul>
       <li><a href="menu.php">Menu</a></li>
        <li><a class="active" href="order.php">Order now</a></li>
        
        <li><a href="index.php">Cancel</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>


</div>

<?php 
            include("footer.php");
            ?>
