<html>

<head>

<link rel = "stylesheet" href="english_page_style.css">
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

        <div class="Home_page_first_row">	     
		    
			<div class="English_area">
			    <form action ="data_retrieve.php" method="post">
		    <button type="submit" name ="submit" class = "button" value="number">Number</button>
		       </form> 		
			</div>

			<div class="Bangla_area">
			<form action ="data_retrieve.php" method="post">
		            <button type="submit" name ="submit" class = "button" value="Pronoun">Pronoun</button>
                    
		            </form> 
			</div>

       </div>


       <div class="Home_page_second_row">

          	<div class="English_area">
	        <form action ="data_retrieve.php" method="post">
                <button type="submit" name ="submit" class = "button" value="Preposition">Preposition</button>
                
                </form>		
	        </div>

			<div class="Bangla_area">
			<form action ="data_retrieve.php" method="post">
                    <button type="submit" name ="submit" class = "button" value="Idioms">Idioms</button>
		            </form> 
			</div>     
		             
	   </div>

	<div class="footer">
           <p> </p>
	</div>

</div>

</body>

</html>

