<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css"
    </head>
    <body class="login">
        <center>
      <h1>Details</h1>
        <form action="details.php" method="post">
  <div class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="add"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="adds" required>

    <label for="add"><b>ID</b></label>
    <input type="text" placeholder="ID" name="cus_id" size="5" required>

    <label for="phone"><b>Contact No.</b></label>
    <input type="text" placeholder="Contact no." name="phone" size="10" required>

    <button type="submit">Save</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="" action="head.php" class="cancelbtn">Cancel</button>
  </div>
</form>
        </center>
    </body>
</html>
