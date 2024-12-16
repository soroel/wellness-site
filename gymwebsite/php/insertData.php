<?php

$conn=mysqli_connect("localhost","root","","schoolweb");
 


$fullname=$_POST["fullname"];
$email=$_POST["emailaddress"];
$phone=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["confirm_password"];

$sql="INSERT INTO `users` (`id`, `fullname`, `emailaddress`, `phonenumber`, `password`, `confirm_password`) VALUES (NULL, '$fullname', '$email', '$phone', '$password', '$cpassword')";

$query=mysqli_query($conn,$sql);


if($query){
    ?>
    <script>
        window.alert("Data is saved successfully");
       // window.location.href="../pages/register.html";
       window.history.go(-1);
        </script>
    <?php
}else{
    ?>
<script>
    window.alert("Failed ! Try Again!");
    //window.location.href="../pages/register.html";
    window.history.go(-1);
</script>

    <?php
}































