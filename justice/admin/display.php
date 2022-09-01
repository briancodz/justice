<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<!-- PHP code to establish connection with the localserver -->
<?php

require 'connection.php';

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'justice';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM tb_data ORDER BY date DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Crime Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		th {
			color: whitesmoke;
		}
	</style>
</head>

<body>
	<section>
		<h1 class="head">REPORTED CRIMES</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				
				<th>Time</th>
				<th>Date</th>
				<th>Crime Address</th>
                <th>Details</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
			
				<td><?php echo $rows['time'];?></td>
				<td><?php echo $rows['date'];?></td>
				<td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['details'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>

	<div class="print">
	<?php 
$con = mysqli_connect("localhost","root", "","justice");

    $sql = "SELECT * from tb_data";

    if ($result = mysqli_query($con, $sql)){
        $rowcount = mysqli_num_rows( $result);

        printf("Total reports in this table : %d\n" , $rowcount);

    }

mysqli_close($con);


?>
	</div>

	<div>
		<a href="logout.php" class="btn">Logout</a>
	</div>
</body>

</html>
