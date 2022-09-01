<?php
$conn = mysqli_connect("localhost","root","","justice");
?>

<?php
 
$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "justice";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=justice",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>