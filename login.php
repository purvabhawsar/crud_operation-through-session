<?php 
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();


?>


<?php include("header.php");?>
		<form method="post" action="log.php">


<div class="container p-5 my-5" id="content">
		<h5 class="text-center text-success">LOGIN</h5>
			

			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" id="email">
				<span id="email_msg" class="text-danger">
				<?php
				if (isset($_SESSION["email_msg"])) 
				{
					echo $_SESSION["email_msg"];
					unset($_SESSION["email_msg"]);
				}


				?>
			</span>
				
			</div>

			
				<div class="form-group">
				<label>PASSWORD</label>
				<input type="password" class=" form-control"name="password" id="pass">
				<p id="password_msg" class="text-danger">

				<?php 
                     if (isset($_SESSION["password_msg"]))
                      {
                     	echo $_SESSION["password_msg"];
                     	unset($_SESSION["password_msg"]);
                     }
				?>
				</p>
			</div>
			
			<div class="form-group">
				<input type="submit" name="submit" id="submit" class=" btn btn-info" role="button" value="submit"  >
			</div>
	</div>
	<?php include("footer.php");?>
</form>
</body>
</html>
