<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JSP Page</title>
</head>
<body>
<% String username=request.getParameter("username");
String password=request.getParameter("password");
if((username.equals("1234") && password.equals("1234"))) {
	session.setAttribute("username",username);
	response.sendRedirect("Home.jsp");
}
else {
	response.sendRedirect("index.jsp");
}%>
</body>
</html>