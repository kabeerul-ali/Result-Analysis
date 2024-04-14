<?php
include 'database.php';
// Assuming $userInput is defined in input.php or some other file
include 'input.php';
// Check if $userInput is set
if(isset($userInput)) {
    // Fetch data from the table
    $s1 = "SELECT * FROM result WHERE s_rollno = '$userInput'";
    $result = mysqli_query($connection, $s1);
     include 't.php'; // I'm not sure what t.php is supposed to do, uncomment if necessary
    mysqli_close($connection);
} else {
    echo "No user input provided.";
}
?>
