<html>
<head>
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<style>
</style>
<body style="color: #fff;background-image: url('images/023.png');background-size:cover">
 <form method="POST" action="signup-pro.php" enctype="multipart/form-data">
  <div class="container">
    <h3 style="font-weight: bold; text-align: center;">ONLINE <span style="color:#dc3545"> CRIME </span>MANAGEMENT</h3><br><br>
    <div class="card col-sm-6" style="margin-left :55%">
      <div class="card-body "style="color:#000;padding:10px;">

        <div class="form-group">
          <label for="email">User Name:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter User name" name="name" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="pwd">Phone number:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter Phone number " name="phno" required>
        </div>
        <div class="form-group">
          <label for="email">Address:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Address" name="address" required>
        </div>
        <div class="form-group">
          <label for="card_photo"style="color:#fff;">Upload your Proof:</label>
          <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
        </div>
        <div class="form-group">
          <label style="color:#fff;">Your selected File:</label><br>
          <img src="" id="output_image"/ height="200px" required>
        </div>

        <a style="color:#000"href="index.php" >Sign In</a>
        <center><input style="width:45%;" type="submit" id="submit" name="submit" class="btn btn-danger " value="Sign in"></center>

      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
