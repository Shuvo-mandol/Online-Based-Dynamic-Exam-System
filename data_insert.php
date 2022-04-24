<html>
<body>

<head>
<meta charset="utf8mb4">
<meta http-equiv="content-type" content="text/html; charset=utf8mb4">
</head>

Your selected topic is: <?php echo $_POST["topic"]; ?><br>
Your question is: <?php echo $_POST["question"]; ?><br>


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



$sql = "SELECT * from All_Question WHERE SUBJECT = '".$_POST["subject"]."' AND TOPIC = '".$_POST["topic"]."'";


/*
$sql = "INSERT INTO TOTAL_QUESTION (SUBJECT,TOPIC,TOPIC_WISE_TOTAL_NUMBER)
        VALUES ('".$_POST["subject"]."','".$_POST["topic"]."')";
*/


// je koita row mil pabe sa koita row number return korbe. ar mil na pele
// false. return korbe. mane notun. false return korle or serial number 1 kore dibo. 
// true return korle koita return korese, sa onujari serial_no. kolam ta update
// kore dibo.


$result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) == 0){
  
   echo "False.";
   $value = 1;

  
   $sql = "INSERT INTO All_Question (SUBJECT,TOPIC,SERIAL_NO, QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,OPTION_5,ANSWER)
        VALUES ('".$_POST["subject"]."','".$_POST["topic"]."','$value','".$_POST["question"]."','".$_POST["option_1"]."','".$_POST["option_2"]."','".$_POST["option_3"]."','".$_POST["option_4"]."','".$_POST["option_5"]."','".$_POST["answer"]."')";
   
}
else{

  $row = mysqli_num_rows($result);
  echo "$row";
  $Newvalue = $row + 1; 
     $sql = "INSERT INTO All_Question (SUBJECT,TOPIC,SERIAL_NO, QUESTION,OPTION_1,OPTION_2,OPTION_3,OPTION_4,OPTION_5,ANSWER)
        VALUES ('".$_POST["subject"]."','".$_POST["topic"]."','$Newvalue','".$_POST["question"]."','".$_POST["option_1"]."','".$_POST["option_2"]."','".$_POST["option_3"]."','".$_POST["option_4"]."','".$_POST["option_5"]."','".$_POST["answer"]."')"; 
  
}



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>



</body>
</html>
