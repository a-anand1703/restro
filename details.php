<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body class="details">
    <h2>CUSTOMER DETAILS</h2>
<?php
echo "Customer ID:". $cus_id= $_POST['cus_id'];
echo "<br>";
echo "Name:". $name=$_POST['name'];
echo "<br>";
echo "Address:". $adds=$_POST['adds'];
echo "<br>";
echo "Contact no.:". $phone=$_POST['phone'];
//connnection to mysql
$conn= new mysqli("localhost","root","","restro");
if($conn->connect_errno)
{
    echo "connection error";
}
else{
    echo "<br>connected successfully!!";
}
//insert customer data
$column= "insert into cus_details values('$cus_id','$name','$adds','$phone');";
$result=$conn->query($column);
if($result==TRUE){
    echo "<br> data saved";
}
else{
    echo "data unsaved";
}
?>
<br><br><br>
<div>
<h3>Order your Food !!</h3>
<a href="veg.php" target="_blank" align="left">veg</a>
<a href="nonveg.php" target="_blank" align="center">Non-Veg</a>
<a href="desserts.php" target="_blank" align="right">Desserts</a>
<br>
<br>
</div>
</body>
</html>