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
	<section>
		<div class="my-2 mx-2">
			<h4><b>The output is:</b>
	
		<span class="borderbtn text-dark table-bordered border-dark px-2 py"> 
		<?php		
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];

		if ($c=='+') {
			echo $c=$a+$b;
		}
		else if ($c=='-') {
			echo $c=$a-$b;
		}
		else if ($c=='*') {
			echo $c=$a*$b;
		}
		else if ($c=='/') {
			echo $c=$a/$b;
		}
		else if ($c=='%') {
			echo $c=$a%$b;
		}
		else
		{
			echo "You choose wrong operator";
		}	
?>
		</span>
		</h4>
		</div>
	</section>
</body>
</html>



	