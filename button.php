<!DOCTYPE html>
<html>
<head>
    <title>Button Click PHP</title>
    <style>
        /* Center align the buttons */
        

        .center {
            display: inline;
            justify-content: center;
            align-items: center;
        }
        /* Style for the buttons */
        .btn {
            border-radius: 1rem;
            background-color: rgb(138, 138, 200);
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            cursor: pointer;
        }
        h1{
            font-size: 4rem;
            justify-content: center;
            text-align: center;
            color: blue;
        }
        h3{
            color: skyblue;
            justify-content: center;
            text-align: center;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="whole" >
    <h3>ARAVALI COLLEGE OF ENGINEERING AND MANAGEMENT</h3>
    <h1>WELCOME CSEAIML 6TH </h1>

<div class="center">
    <button class="btn" onclick="window.location.href='lock.php'">Add record</button>
    <button class="btn" onclick="window.location.href='resultview.php'">view result</button>
</div>
    </div>
</body>
</html>
