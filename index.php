<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Page</title>
<style>
    #welcome {
        display: block;
    }
    #content {
        display: none;
    }
</style>
<script>
    setTimeout(function() {
        document.getElementById('welcome').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    }, 5000); // 10 seconds
</script>
</head>
<body>
<div id="welcome">
    <?php
    include 'firsthtml.php';
    ?>
    </div>
<!-- <div id="welcome">
    <h1>Welcome</h1>
    <p>Welcome to our website!</p>
</div> -->
<div id="content">
    <?php
    include 'button.php';
    ?>
</div>
</body>
</html>
