<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>

<style type="text/css">
* {
	text-align: center;
	padding: 8px;
	margin: 5px;
}
</style>

</head>
<body>

<h1>Login Page</h1>
<form action="LoginCheck.jsp" method="post">
<br>
Username:
<input type="text" name="username">
<br>
Password :
<input type="password" name="password">
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>