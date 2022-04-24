<html>

<head>

<link rel = "stylesheet" href="home_page_style.css">
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

         <div class="admin_button">
            <form action ="admin_login.php" method="post">
		<button type="submit" name ="submit" class = "Home_Button">admin</button>
	    </form>
        </div>  

	</div>

    
         
    

    <div class="subject">

        <div class="Home_page_first_row">	     
		    
			<div class="English_area">
			    <form action ="english_page.php" method="post">
		            <button type="submit" name ="submit">English</button>
		            </form>		
			</div>

			<div class="Bangla_area">
			<form action ="bangla_page.php" method="post">
		            <button type="submit" name ="submit" class = "English_button">বাংলা</button>
		            </form> 
			</div>

       </div>


       <div class="Home_page_second_row">

          	<div class="English_area">
	        <form action ="blank_page.php" method="post">
                <button type="submit" name ="submit" class = "English_button">Ict</button>
                </form>		
	        </div>

			<div class="Bangla_area">
			<form action ="blank_page.php" method="post">
		            <button type="submit" name ="submit" class = "English_button">Math</button>
		            </form> 
			</div>     
		             
	   </div>

	<div class="footer">
           <p>  </p>
	</div>

</div>

</body>

</html>

