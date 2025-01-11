<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO emp_db (employee_id, nic, title, first_name, last_name, gender, dob, age, salary)
        VALUES ('".$_POST['employee_id']."', '".$_POST['nic']."', '".$_POST['title']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['age']."', '".$_POST['salary']."')";
?>
