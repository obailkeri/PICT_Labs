<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"
    %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<h1>Logout was done successfully.</h1>
<% session.removeAttribute("username");
session.removeAttribute("password");
response.sendRedirect("index.jsp");
session.invalidate();
%>

</body>
</html>