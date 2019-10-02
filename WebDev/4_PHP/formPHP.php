<!DOCTYPE html>
<html>
<head>
	<title>Free Coding</title>
	<link rel="icon" type="image/x-icon" href="icon.png">

	<style type="text/css">
		body {
			background: url(bg1.jpg);
			font-family: fantasy;
			color: black;
			font-size: 22px;
		}

		header, footer {
			text-align: center;
		}

		.container {
			background: url(bg1.jpg);
			margin-left: 5%;
			margin-right: 5%;
			border: 1px black solid;
			border-radius: 5%;
			padding-left: 3%;
			padding-right: 3%; 
		}

		input {
			width: 20%;
			height: 20px;
			border-radius: 3%;
			text-align: justify;
			font-size: 18px;
		}

		button {
			width: 100px;
			height: 40px;
		}

		.clear {
			color: black;
			background-color: red;
			margin-left: 12%;
		}

		.submit {
			color: black;
			background-color: green;
			margin-left: 4%;
		}
	</style>
</head>

<body>
	<header>
		<div id="head-div">
			<h1>FORM</h1>
		</div>
	</header>

	<div class="container">
		<div id="signup">
			<h2><u>Sign Up  </u></h2><label id="wrg"></label>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form" id="myform">
				Name :
			  	<input type="text" name="name" id="name"><br><br>

			  	E-Mail Id :
			  	<input type="email" name="email" placeholder="abc@xyz.com"><br><br>

			  	Password :
			  	<input type="password" name="pwd" id="pw1"><label id="pv" onblur="pwValidate()"></label><br><br>

			  	Confirm Password :
			  	<input type="password" name="cpwd" id="pw2" oninput="pwValidate()"><br><br>

			  	<button class="clear" type="reset" value="CLEAR">CLEAR</button>
			  	<button class="submit" type="submit">SUBMIT</button><br><br>
			</form>
		</div>
	</div>

	<?php
	  
	  $flag = TRUE;
	  $email = $website = $url = $name = $pw = "";
	  // TAKING INPUT IN GLOBAL VAR
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $email = $_POST["email"];
	    $name = $_POST["name"];
	    $pw = $_POST["password"];
	    $website = $_POST["website"];
	  }

	  if (empty($email)) {
	    echo "<br>*Please Enter The Email";
	    $flag = FALSE;
	  } else {
	    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
	      echo "<br>Invalid Email Entered !!";
	      $flag = FALSE;
	    }
	  }
	  if (empty($name)) {
	    echo "<br>*Please Enter The name";
	    $flag = FALSE;
	  }
	  if (empty($pw)) {
	    echo "<br>*Please Enter The Password";
	    $flag = FALSE;
	  }
	  if (empty($website)) {
	    echo "*<br>* ENTER URL";
	    $flag = FALSE;
	  } else {
	    if (!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/ix", $website)) {
	      echo "<br>* Invalid URL";
	      $flag = FALSE;
	    }
	  }
	  if($flag)
	  {
	    header("Location: form.html");
	    exit;
	  }
  	?>

	<footer><br><br>
		&copy; Copyright
	</footer>

</body>
</html>