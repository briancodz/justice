<?php 
$con = mysqli_connect("localhost","root", "","justice");

    $sql = "SELECT * from tb_data";

    if ($result = mysqli_query($con, $sql)){
        $rowcount = mysqli_num_rows( $result);

        printf("Total rows in this table : %d\n" , $rowcount);

    }

mysqli_close($con);


?>