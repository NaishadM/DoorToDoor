<?php 
	session_start();
	$sql_db_host = "localhost";// MySQL Hostname
$sql_db_user = "root";// MySQL Database User
$sql_db_pass = "";// MySQL Database Password
$sql_db_name = "crud";
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$rate=0;
	
	
	if (isset($_POST['fix'])) {
       
        $rate = $_POST['rate'];
		$sql="INSERT INTO betfix  VALUES (NULL, '$rate')";
		$res=$db->query($sql);
        
	
		$_SESSION['message'] = "rate fixed"; 
		header('location: bitfix.php');
		
		
    }
    
   
    ?>