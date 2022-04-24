<html>

<head>

<link rel = "stylesheet" href="bangla_page_style.css">
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

    <div class="subject">

        <div class="Bangla_first_row">	     
		    
	    <div class="Gender_area">
	        <form action ="data_retrieve.php" method="post">
	        <button type="submit" name ="submit" class = "Gender_Button" value="সমাস">সমাস</button>
                </form> 		
	    </div>

	    <div class="Noun_area">
		<form action ="data_retrieve.php" method="post">
		    <button type="submit" name ="submit" class = "button" value="বিপরীত">বিপরীত শব্দ </button>
		</form> 
	    </div>

       </div>


        <div class="Bangla_second_row">

            <div class="Gender_area">
	        <form action ="blank_page.php" method="post">
	        <button type="submit" name ="submit" class = "Gender_Button" value="Gender">পদ</button>
                </form> 		
	    </div>
 
             <div class="Noun_area">
		<form action ="blank_page.php" method="post">
		    <button type="submit" name ="submit" class = "Gender_Button" value="Noun">সন্ধি</button>
		</form> 
	    </div>	     
		             
	</div>

	<div class="footer">
           
	</div>

</div>

</body>

</html>
