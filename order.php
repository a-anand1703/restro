<html>
    <body>
<?php
//connnection to mysql
$conn= new mysqli("localhost","root","","restro");
if($conn->connect_errno)
{
    echo "connection error";
}
else{
    echo "<br>connected successfully!!";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="vid">
        <input type="text" name="vdish">
        <input type="text" name="vprice">
        <input type="submit" name="submit" value="add veg">
        </form>
<?php
$id=$_POST['vid'];
$dish=$_POST['vdish'];
$price=$_POST['vprice'];
$column= "insert into veg values('$id','$dish','$price');";
$result=$conn->query($column);
if($result==TRUE){
    echo "<br> data saved";
}
else{
    echo "data unsaved";
}
?>

?>
