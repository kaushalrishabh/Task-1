<!DOCTYPE HTML>
<html>
	<head>
			<title> Login :: Log in to your Account	</title>
			<link rel = "stylesheet" type = "text/css" href = "Bootstrap/css/bootstrap.css">
	</head>
	<body>	
		<div class = "container">
			<div class = "jumbotron">
				<h1 class = "text-centre"> LOGIN </h1>
			</div>			
				<div class = "row">
					<div class = "col-md-4"> </div> 
					<div class = "col-md-4"> 
						<form>
								<div class = "form-group">
									<label> Email Address </label>
									<input type = "email" class ="form-control" >
								</div>
								<div class = "form-group">
									<label> Password </label>
									<input type = "password" class ="form-control" >
								</div>
								<div class = "form-group">
									<input type = "submit" value ="LOGIN" class ="btn btn-primary form-control"> 
								</div>
								<div class="form-group">
										<div class ="checkbox">
											<label>
												<input type="checkbox" class ="form-check-input"> Remember Me	
											</label>
										</div>
								</div>
								<div class= "form-group">
									<label> <a href="forget_password.php"> Forget Password ? </a> </label>
								</div>
								<div>
									<label>	Need a Account! </label>
									<a href="SignUp.php" class="btn btn-primary form-control "> Sign Up </a>	
								</div>
						</form>
					</div>
					<div class = "col-md-4"> 
					</div> 
				</div>
			</div>	
			<footer class="text"> Risk Corp : All Rights Reserved <sup> &reg </sup>  
			</footer>
			
	</body>
</html>