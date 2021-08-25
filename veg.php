<html>
    <head>
    <link rel="stylesheet" type="text/css" href="dishes.css"></head>
    <body class="veg">
        <center>
            <h1>Veg Dishes</h1>
        <table cellpadding=15 cell spacing=15>
        <tr>
            <th>Item ID</th>
            <th>Dishes</th>
            <th>price</th>
        </tr>
        <?php
    //display table
    $con= new mysqli("localhost","root","","restro");
if($con->connect_errno)
{
    echo "connection error";
}
    $dis="select * from veg;";
    $result=$con->query($dis);
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row['id'] . "</td>";
        echo "<td>". $row['dish'] . "</td>";
        echo "<td>". $row['price'] . "</td>";
        echo "</tr>";
    }
?>
    </table>  
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="add"><lable>ID:</lable>
        <input type="text" size="4" name="id">
        <lable>Dish:</lable>
        <input type="text" name="dish">
        <lable>Price:</lable>
        <input type="text" size="5" name="price">
        <input type="submit" name="submit" value="add veg"></div>
        </form>
<?php
$con= new mysqli("localhost","root","","restro");
if($con->connect_errno)
{
    echo "connection error";
}
if(isset($_POST['submit'])){
    $id=$_POST['id'];
$dish=$_POST['dish'];
$price=$_POST['price'];
$column= "insert into veg values('$id','$dish','$price');";
$result=$con->query($column);
echo "<br>";
if($result==TRUE){
    echo "Added";
}
else{
    echo "NOT Added";
}
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="search"><lable>Enter ID:</lable>
        <input type="text" size="4" name="sid">
        <input type="submit" name="search" value="Order Dish">
        <input type="submit" name="delete" value="Delete">
        </div>
        
</form>
        <?php
        $con= new mysqli("localhost","root","","restro");
        if($con->connect_errno)
        {
            echo "connection error";
        }
        
        if(isset($_POST['search'])){
            $idd= $_POST['sid'];
        $search= "select dish,price from veg where id= $idd;";
        $result = $con->query($search);
        $row= $result->fetch_assoc();
        echo "<br>". $row['dish'] ."<br>". "Price:" . $row['price']. "<br>Ordered";
        echo "<br><br><br>";
        }
        if(isset($_POST['delete'])){ 
            $idd= $_POST['sid'];
            $delete= "delete from veg where id= $idd;";
            $result = $con->query($delete);
        }
        ?>
        <form action="veg.php" method="post">
        <div class="refresh">
            <input type="submit" name="reset" value="Refresh"/></div>
        </form>
</center> 
</body>
</html>

