<?php
include 'database.php';

if(isset($_POST['submit'])){
    $s_name = $_POST['name'];
    $s_rollno = $_POST['s_rollno'];
    $subject = $_POST['subject'];
    
    // Default values
    $default_values = array_fill(0, 7, 0);
    
    // Merge default values with submitted values
    $subject = array_replace($default_values, $subject);
    
    $ORE = $subject;

    $chk = "";
    foreach ($subject as $chk1) {
        $chk .= $chk1."1";
    }

    //sql query
    $sql = "INSERT INTO result (s_name, s_rollno, ORE) 
    VALUES ('$s_name', '$s_rollno', '$ORE')";

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
