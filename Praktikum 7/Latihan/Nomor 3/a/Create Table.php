<?php
$conn = mysqli_connect("localhost", "root", "", "myDB");

// Create table
$sql = "CREATE TABLE liga ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
     champion int(3) 
    )";
    
if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}
  
mysqli_close($conn);
?>