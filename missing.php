<?php
include("unav.php");
?>
<html>
	<body style="background-image:url('images/bgm.jpg');background-size: cover">
		<div class="container">
			<form method="POST" action="missing-pro.php" enctype="multipart/form-data">
				<div class="row">
					<div class="card col-sm-5" style="color:#000;padding:10px;margin-left:30%;width: 38em;margin-bottom: 25px;margin-top: 10px">
						<div class="form-group">
							<label >MISSING PERSON :</label><br>
							<img src="" id="output_image"/ height="200px" width="100%" required>
						</div>
						<div class="form-group">
							<label for="full_name">Name Of Person:</label>
							<input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="mpname" required>
						</div>
						<div class="form-group">
							<label for="full_name">Contact no :</label>
							<input type="number" class="form-control" id="full_name" placeholder="+91" name="phno" required>
						</div>
						<div class="form-group">
							<label for="full_name">Address :</label>
							<input type="text" class="form-control" id="full_name" placeholder="Enter Address" name="area" required>
						</div>
						<div class="form-group">
							<label for="full_name">Description:</label>
							<textarea class="form-control" id="full_name" placeholder="Hint of Missing Person" name="dis" required></textarea>
						</div>
						<div class="form-group">
							<label for="card_photo">Upload Photo of Missing Person:</label>
							<input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
						</div>
						<center><button id="submit" name="submit" style="width: 50%;"class="btn btn-danger">FILE COMPLAINT</button></center><br>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<script type='text/javascript'>
  function preview_image(event)
  {
    var reader = new FileReader();
    reader.onload = function()
    {
      var output = document.getElementById('output_image');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>