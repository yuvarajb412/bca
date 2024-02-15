<html>
<head>
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<style>
</style>
<body style="color: #fff;background-image: url('images/pbg.jpg');background-size:cover">
 <form method="POST" action="psignup-pro.php" enctype="multipart/form-data">
  <div class="container">
    <h3 style="font-weight: bold; text-align: center;">ONLINE <span style="color:#dc3545"> CRIME </span>MANAGEMENT</h3><br><br>
    <div class="card col-sm-6" style="margin-left :55%">
      <div class="card-body "style="color:#000;padding:10px;">
        <div class="form-group">
          <label for="email">Zone:</label>
          <br>
          <select style="width:100%" id="cars" name="zone">
          <option value="east">EAST</option>
          <option value="west">WEST</option>
          <option value="south">SOUTH</option>
          <option value="north">NORTH</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Sub Divison:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Area" name="area" required>
        </div>
        <div class="form-group">
          <label for="pwd">Police Station:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter Station Number" name="stnumber" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
        <a style="color:#000"href="psignin.php" >Sign In</a>
        <center><input style="width:45%;" type="submit" id="submit" name="submit" class="btn btn-danger " value="Sign in"></center>

      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
