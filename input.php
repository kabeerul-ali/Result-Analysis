<!DOCTYPE html>
<html>
<head>
    <style>
        *{
    text-align: center;
    justify-content: center;
}
h1{
    font-size: 5rem;
    color: brown;
}
h2{
    margin-top: 4rem;
    font-size: 2rem;
    color: green;
}
#sub{
    cursor: pointer;
    height: 2rem;
    width: 5rem;
    background-color: rgb(100, 151, 223);
    border-radius: 2rem;
}
body{
    background-image: url('photos/sky.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    backdrop-filter: blur(5px);
}
#box{
    background-color: rgb(213, 183, 205);
}
    </style>
   
</head>
<h1>Welcome CSEAIML 6th sem</h1>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter student roll no:<br> <input type="text" name="user_input" id="box">
        <br>
        <br>
        <input type="submit" id="sub">
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input value
        $userInput = $_POST['user_input'];
        // Display the input valu
    }
    ?>
</body>
</html>