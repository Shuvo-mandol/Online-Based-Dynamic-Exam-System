


<?php
    $user = $_POST["UserName"];
    $passw = $_POST["password"];

    //echo $user;
    //echo $passw;

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

        
        
        $sql = "SELECT username, password from Admin";
        $result = mysqli_query($conn, $sql);

            $cnt = 0;
        
        	while ($row = mysqli_fetch_assoc($result)) {
		    $id = $row['username'];
		    $pass = $row['password'];
		   
            if($id == $user)
            {
                 if($id == $user && $pass ==$passw)
                 {
                    $cnt= 1;
                 }
            }

		}
        if($cnt == 1)
        {
            header("location: form.php");
        }
        else
        {
            echo "Invalid userName and Password!!!!";
         }
    
?>



