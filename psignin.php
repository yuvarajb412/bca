<html>
<head>
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<style>
</style>
<body style="color: #fff;background-image: url('images/pbg.jpg');background-size:cover">
  <form method="POST" action="psignin-pro.php">
  <div class="container">
    <h2 style="font-weight: bold; text-align: center;">ONLINE <span style="color:#dc3545"> CRIME </span>MANAGEMENT</h2><br><br>
    <div class="card col-sm-4" style="margin-left :75%">
      <div class="card-body "style="color:#000;padding:10px;">
        <div class="form-group">
          <label for="email">Sub division:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Sub division" name="area" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
        <br>
        <center><input style="width:45%;" type="submit" id="submit" name="submit" class="btn btn-danger " value="Sign in"><br><a style="color:#000;font-size: 12px"href="psignup.php" >Sign Up</a>
          <br>
        <a style="color:#000;font-size: 12px"href="index.php" >User Login</a></center>
        
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
