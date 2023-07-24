<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	
</head>
<body>
	<header class=" bg-light">
		<div class="container">
			<div class="row ">
				<div class="col-md-12">
						<h5 class="my-2"><img src="assets/images/calculator.png"><b>Calculator</h5>	
				</div>
			</div>
		</div>
	</header>
	<section class="my-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<form method="post" action="output.php">
								<div class="form-group">
									<label for="a">
										<strong>Enter Number Here</strong>
									</label>
									<input class="form-control rounded-pill" type="text" id="a" name="a" placeholder="Enter a number here">
								</div>

								<div class="form-group">
									<label for="b">
										<strong>Enter Number Here</strong>
									</label>
									<input class="form-control rounded-pill" type="text" id="b" name="b" placeholder="Enter b number here">
								</div>

								<div class="form-group">
									<label for="c">
										<strong>Enter Operator Here</strong>
									</label>
									<input class="form-control border-2" type="text" id="c" name="c" placeholder="Enter Operator here">
								</div>
								<div class="text-center">
									<button class="btn btn-outline-dark">Result</button>
								</div>	
								
							</form>	
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
</body>
</html>