<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>JSP Page</title>

<style type="text/css">
* {
	text-align: center;
	padding: 8px;
	margin: 5px;
}
</style>

</head>
<body>
<h2>
<% String a=session.getAttribute("username").toString();
out.println("Hello "+a); %>
</h2>
<br/><br/><br/><br/><br/><br/><br/>

<form action="Logout.jsp">

<input type="submit" value="Logout"> 

</form>
</body>
</html>