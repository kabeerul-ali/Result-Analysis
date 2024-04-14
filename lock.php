<?php
// User's username and password
$correct_username = "acem";
$correct_password = "acem@12345";

// Initialize a variable to track form submission
$form_submitted = false;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == $correct_username && $password == $correct_password) {
        // Set the flag to true if the username and password are correct
        $form_submitted = true;
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        * {
    justify-content: center;
    text-align: center;
}
#ali{
    text-align: center;
    margin-top: 6rem;
}

body {
    background-image: url('photos/stree.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
#sb{
    background-color: blue;
    height: 2rem;
    width: 5rem;
    border-radius: 2rem;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div id="ali">
    <?php
    // Include form.php content only if the form has been submitted successfully
    if ($form_submitted) {
        include 'form.php';
    } else {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <input type="text" name="username" placeholder="Username" required autocomplete="off"><br><br>
       <input type="password" name="password" placeholder="Password" required autocomplete="off"><br><br>
       <input type="submit" value="Submit" id="sb">
    </form>
    <?php
    }
    ?>
    </div>
</body>
</html>
