<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>this is php client1</title>
</head>
<body>
     <h1 style="color:red">this is php client1</h1>
     <h2><a href="http://localhost:8080/cas-client1">java client1</a></h2>
     <h2>LoginName: <?php   $username=phpCAS::getUser();  echo $username;  ?></h2>
     <h2><a href="http://localhost:8081/cas/logout?service=http%3A%2F%2Flocalhost%3A8080%2Fcas-client1">Logout</a></h2>
</body>
</html>