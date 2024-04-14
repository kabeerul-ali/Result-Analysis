<?php
include 'database.php';

if(isset($_POST['submit'])){
    $s_name = $_POST['name'];
    $s_rollno = $_POST['s_rollno'];
    $subjects = $_POST['subjects'];
    
    // Default values
    $default_values = array_fill(0, 7, 0);
    
    // Merge default values with submitted values
    $subjects = array_replace($default_values, $subjects);
    
    $ORE = $subjects[0];
    $IOT = $subjects[1];
    $BDA = $subjects[2];
    $BD = $subjects[3];
    $MOG = $subjects[4];
    $DM = $subjects[5];
    $SC = $subjects[6];

    $chk = "";
    foreach ($subjects as $chk1) {
        $chk .= $chk1."1";
    }

    //sql query
    $sql = "INSERT INTO result (s_name, s_rollno, ORE, BD, BDA, IOT, DM, SC, MOG) 
    VALUES ('$s_name', '$s_rollno', '$ORE', '$BD', '$BDA', '$IOT', '$DM', '$SC', '$MOG')";

    if(mysqli_query($connection,$sql)){
        echo "<script>alert('successfully add the query')</script>";
    }
    else{
        echo "error:".mysqli_error($connection);
    }
    mysqli_close($connection);
}
include 'form.php';
?>
