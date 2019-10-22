<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>

	<style type="text/css">
		body {
			background-color: skyblue;
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

		.error {
			color: red;
		}
	</style>
</head>

<body>
	<header>
		<div id="head-div">
			<h1>FORM</h1>
		</div>
	</header>

	<?php
	  // DECLARING VAR
	  	$flag = TRUE;
	  	$email = $url = $name = $uname = "";
	  	// TAKING INPUT IN GLOBAL VAR
	  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	$email = $_POST["email"];
	    	$name = $_POST["name"];
	    	$uname = $_POST["uname"];
	    	$url = $_POST["url"];
		}
	?>

	<div class="container">
		<div id="signup">
			<h2><u>Sign Up  </u></h2><label id="wrg"></label>
			<form name="myform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form" id="myform">
				* Required<br><br>

				Name :
			  	<input type="text" name="name" id="name">&nbsp;&nbsp;&nbsp;&nbsp;
			  	<?php
			  	if (empty($name)) {
			  		echo "*";
				}
				?>
			  	<br><br>

			  	E-Mail Id :
			  	<input type="email" name="email" placeholder="abc@xyz.com">&nbsp;&nbsp;&nbsp;
			  	<?php
			  	if (empty($email)) {
			  		echo "*";
				}			
				else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
				  echo "Invalid Email Entered !!";
				}
				?>
			  	<br><br>

			  	UserName :
			  	<input type="text" name="uname" placeholder="abc123" id="uname">&nbsp;&nbsp;&nbsp;
			  	<?php
			  	if (empty($uname)) {
			  		echo "*";
				}
				?>
			  	<br><br>

			  	WebSite :
			  	<input type="text" name="url" id="url">&nbsp;&nbsp;&nbsp;
			  	<?php
			  	$file_headers = @get_headers($url);
			  	if (empty($url)) {
				    echo "*";
				}
			  	else if (!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/ix", $url)) {
				      echo "Invalid URL";
	    		}
				else if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
					echo "URL does not Exist";
				}
			  	?>
			  	<br><br>

			  	<button class="clear" type="reset" value="CLEAR">CLEAR</button>
			  	<button class="submit" type="submit" value="Submit">SUBMIT</button><br><br>
			</form>
		</div>
	</div>

	<footer><br><br>
		&copy; Copyright
	</footer>

	<?php

	if (empty($email)) {
	    $flag = FALSE;
	}
	else {
	    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
	      $flag = FALSE;
	    }
	}

	if (empty($name)) {
	    $flag = FALSE;
	}

	if (empty($uname)) {
	    $flag = FALSE;
	}
	
	if (empty($url)) {
	    $flag = FALSE;
	}
	else {
	    if (!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/ix", $url)) {
	      $flag = FALSE;
	    }

		$file_headers = @get_headers($url);
		if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
		    $flag = false;
		}
	}

	if($flag) {
	    header("Location: formPHP.html");
	    exit;
	}
	else {
		//do nothing;
	}

	?>

</body>
</html>