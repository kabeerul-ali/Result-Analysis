<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
<style>
    body {
    background-image: url('photos/booke.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
#sb{
    background-color: blue;
    height: 2rem;
    width: 5rem;
    border-radius: 2rem;
}
#name,
#s_rollno{
    height: 1.3rem;
    width: 6rem;
}
#BD,
#ORE,
#BDA,
#SC,
#MOG,
#DM,
#IOT{
    height: 1.0rem;
    width: 3rem;
    color: red;
}
#head{
    padding: 0;
    margin: 0;
    font-size: 3rem;
    color: brown;
}
#subject{
    justify-content: space-between;
    padding: 1rem;
}
#nr{
    display: flex;
    margin-top: 0rem;
    margin-bottom: 0.2rem;
    padding: 1rem;
}
</style>
</head>
<body>
<h2 id="head">Student Result Form</h2>
<form action="process.php" method="post">
    <div id="nr">
    <label for="name">Name:<br></label><br>
    <input type="text" id="name" name="name" required placeholder="name"><br><br>
    
    <label for="s_rollno">Roll No:<br></label><br>
    <input type="text" id="s_rollno" name="s_rollno" required placeholder="rollno"><br><br>
    </div>
    <div id="subject">
    <label for="subjects">Subjects:</label><br>
    <label for="ORE">OR</label>
    <input type="text" id="ORE" name="subjects[]" >
    <br><br>
    <label for="IOT">IOT</label>
    <input type="text" id="IOT" name="subjects[]" >
    <br><br>
    <label for="BDA">BDA</label>
    <input type="text" id="BDA" name="subjects[]" >
    <br><br>
    <label for="BD">BD</label>
    <input type="text" id="BD" name="subjects[]"  >
    <br><br>
    <label for="MOG">MOG</label>
    <input type="text" id="MOG" name="subjects[]" >
    <br><br>
    <label for="DM">DM</label>
    <input type="text" id="DM" name="subjects[]"  >
    <br><br>
    <label for="SC">SC</label>
    <input type="text" id="SC" name="subjects[]" >
</div>
    <input type="submit" value="Submit" name="submit" id="sb">
</form>
</body>
</html>