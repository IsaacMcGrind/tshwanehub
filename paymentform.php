<?php 
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		$_SESSION['phone'] = htmlentities($_POST['phone']);
		$_SESSION['amount'] = htmlentities($_POST['amount']);
		header('Location: thankyou.php');
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="COS 344: ASSIGNMENT 1">
		<meta name="keywords" content="HTML,CSS,JavaScript">
		<meta name="author" content="Thembinkosi Isaac Mtsweni">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Payment Form</title>
		<link rel="" href="">
		<style>
			body {
				font-size: 14px;
				font-family: 'Roboto', sans-serif;
				font-weight: normal;
				background: url("image1.jpg");
				background-size: 50%;
			}
			.box {
				width: 40%;
				height: 350px;
				border: 1px solid gray;
				border-radius: 4px;
				// text-align: center;
				margin-left: 30%;
				margin-top: 15%;
				box-shadow: 5px 5px 10px #888888;
				background-color: white;
				// animation: info 5s 3;
			}
			input {
				margin-bottom: 5px;
				border-radius: 5px;
				width: 60%;
				padding: 1%;
				border: 1px solid gray;
			}
			.theForm {
				position: flex;
				margin-left: 30%;
				margin-top: 5%;
				text-transform: uppercase;
			}
			// .heading {
				// text-align: center;
				// margin-top: 5%;
				// color:blue;
				// background-color: #ffff00;
				// border-radius: 8px;
				// border: 2px solid;
				// padding: 16px;
				// font-size: 20px;
				// box-shadow: 1px 1px 20px grey;
			// }
			#sub {
				display: inline-block;
				background: blue;
				margin-left: 5px;
				color: #fff;
				font-size: 20px;
				font-weight: 400;
				line-height: 48px;
				border-radius: 0px;
				outline: none !important;
				box-shadow: none !important;
				text-align: center;
				border: 1px solid grey;
				// cursor: pointer;
				border-radius: 5px;
				text-transform: uppercase;
				@include transition;
			}
			#sub:hover{
					background: #fff;
					color: blue;
					border: 1px solid grey;
			}
			#box{
				margin-top: -40%;
				animation: drop 0.5s ease forwards;
			}
			@keyframes drop{
				0%{opacity: 0}
				70%{transform: translateY(1050px)}
				100%{transform: translateY(1000px)}
			}
			#in{
				height: 20px;
			}
		</style>
	</head>
		<header>
		</header>
		<body>
		<!--	<div class = "heading">
			
			</div> -->
			<div class = "box" id ="box">
				<form class = "theForm" method = "POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
					<b>Name:
					<br>
					<input id ="in" type = "text" name="name" placeholder="Enter Name & Surname" required>
					<br>
					Phone:
					<br>
					<input id ="in"  type = "number" name="phone" placeholder="Enter Mobile Number" required>
					<br>
					Email:
					<br>
					<input id ="in" type = "text" name = "email" placeholder = "Enter Email" required>
					<br>
					Amount:</b>
					<br>
					<input id ="in" type = "number" name = "amount" placeholder = "Enter Amount" required>
					<br>
					<br>
					<input id = "sub" type = "submit" name = "submit" value = "Submit">
				</form>
			</div>
		</body>
</html>