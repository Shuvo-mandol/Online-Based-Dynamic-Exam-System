
<html>

<head>

<link rel = "stylesheet" href="admin_login_style.css">
<meta charset=utf8mb4>
<meta http-equiv="content-type" content="text/html; charset=utf8mb4">

</head>


<body>

<div class="main_container">

	<div class="header">

	    <p></p>

	    <form action ="home_page.php" method="post">
		<button type="submit" name ="submit" class = "Home_Button">Home</button>
	    </form>

	</div>
		             
	   <form method="post" action="admin_login_process.php">
             User Name: <input type="text" name ="UserName"><br><br>
             Password: <input type="password" name="password"><br><br>
             <input type="submit" value="Submit">
        </form>

	<div class="footer">
           <p> </p>
	</div>

</div>

</body>

</html>

