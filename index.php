<html>
<title>Crime</title>
<head>
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<style>
</style>
<body style="color: #fff;background-image: url('images/023.png');background-size:cover">
  <form method="POST" action="signin-pro.php">
  <div class="container">
    <h3 style="font-weight: bold; text-align: center;">ONLINE <span style="color:#dc3545"> CRIME </span>MANAGEMENT</h3><br><br>
    <div class="card col-sm-4" style="margin-left :75%">
      <div class="card-body "style="color:#000;padding:10px;">
        <div class="form-group">
          <label for="email">User Name:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter User name" name="name" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
        <br>
        <center><input style="width:45%;" type="submit" id="submit" name="submit" class="btn btn-danger " value="Sign in"><br><a style="color:#000;font-size: 12px"href="signup.php" >Sign Up</a>
          <br>
        <a style="color:#000;font-size: 12px"href="psignin.php" >Police Login</a></center>
        
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
