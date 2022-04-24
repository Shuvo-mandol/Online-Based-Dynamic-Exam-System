
<html>

<head>

<link rel = "stylesheet" href="welcome_style.css">
<meta charset=utf8mb4>
<meta http-equiv="content-type" content="text/html; charset=utf8mb4">

</head>

<body>

<div class="main_container">

	<div class="header">

	    <p>This is header</p>

	    <form action ="home_page.php" method="post">
		<button type="submit" name ="submit" class = "Home_Button">Home</button>
	    </form>    

	</div>

<?php
$i = 0;
$j = 0;
$result_arr1 = array();
$result_arr2 = array();
session_start();

    $items_in_cart = count($_SESSION['student']);
    //echo $items_in_cart;
    echo "<h2> Result: </h2>";
    foreach ($_SESSION['student'] as $key=>$val)
    {
    //echo $val." ";
    $result_arr1[$i] = $val;
    $i++;
    }
    //echo "<br>";
    

  if(isset($_POST['answer']) && !empty($_POST['answer']))   
       foreach($_POST['answer'] as $answer)
       {
			 //echo $answer."<br>";
             $result_arr2[$j] = $answer;
             $j++;
       }

   $cnt = 0;
   for($x=0; $x<count($result_arr1); $x++)
     {

          //echo "ans = ".$result_arr1[$x]."<br>";
          //echo "input = ".$result_arr2[$x]."<br>";
          if($result_arr1[$x] == $result_arr2[$x])
              $cnt++;
     }
    echo "Right answer is : ".$cnt;
    


?>

	<div class="footer">

            <p>This is a footer page.
           
	</div>

</div>

</body>
</html>
