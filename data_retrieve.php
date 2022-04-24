<html>

<head>

<link rel = "stylesheet" href="data_retrieve_style.css">
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

   <?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "MCQ";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection

                mysqli_query($conn,'SET CHARACTER SET utf8mb4'); 
                mysqli_query($conn,"SET SESSION collation_connection ='utf8mb4_unicode_520_ci'");
                  
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		//echo "Total Question : ";

		$clicked =$_POST["submit"];

		$sql = "SELECT QUESTION, OPTION_1, OPTION_2, OPTION_3, OPTION_4, ANSWER FROM All_Question WHERE TOPIC = '$clicked'";	
		$result = mysqli_query($conn, $sql);

		 $row = mysqli_num_rows($result);
		  //echo "$row";
		  echo "<br>";
?>
		
	<form action = "welcome.php" method = "post">
        
		<?php
           session_start();
           
           $arr = array();
		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) {
		    $question = $row['QUESTION'];
		    $option1 = $row['OPTION_1'];
		    $option2 = $row['OPTION_2'];
		    $option3 = $row['OPTION_3'];
            $option4 = $row['OPTION_4'];
            $right_Answer = $row['ANSWER'];
            $arr[$i] = $right_Answer;
            //echo $arr[$i];
            
            

		    ?>


            
		    <?php echo "<p> <font color=blue  size='7pt'> </font> <font color=Blue size='5pt'>$question</font></p>"; ?>
            
             
		    <input type="checkbox" name="answer[]"<?php echo $i ?>" value="A"><?php echo $option1 ?><br>
		    <input type="checkbox" name="answer[]"<?php echo $i ?>" value="B"><?php echo $option2 ?><br>
		    <input type="checkbox" name="answer[]"<?php echo $i ?>" value="C"><?php echo $option3 ?><br>
            <input type="checkbox" name="answer[]"<?php echo $i ?>" value="D"><?php echo $option4 ?><br>
		    <?php echo "" ?><br>
		    <?php
		    $i++;
		}

           
           $_SESSION['student']=$arr;
		?>
		    <input type="submit" value="submit"/>
	</form>

       

	<div class="footer">

            <p></p>
           
	</div>

</div>

</body>

</html>
