<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 5px 8px red, 10px 10px 8px orange, 15px 15px 8px yellow;
        width: 25%;
        margin-top: 80px;
        height: 400px;
        border-radius: 10px;
    }

    label {
        font-size: 20px;
    }

    form{
        margin-top: 50px;
    }

    button{
        border-radius: 10px;
        background-color: burlywood;
        color: maroon;
        width: 100px;
        font-size: large;
    }

    input{
        border-radius: 10px;
        height: 30px;
        width: 90%;
        font-size: 20px;
    }
</style>

<body>
    <center>
        <div class="content">
            <form action="" method="post">
                <label for="name">Enter your name:</label>
                <input type="text" name="name">
                <br><br><br>
                <label for="date">Enter your Birthdate:</label>
                <input type="date" name="date">
                <br><br><br>
                <button type="submit">Enter</button>

            </form> <br><br>

            <?php
            if (isset($_POST['name']) && isset($_POST['date'])) {
                getDetails($_POST['name'], $_POST['date']);
            }

            function getDetails($name, $birthdate)
            {
                $date2 = date('Y/m/d');
                $diff = abs(strtotime($date2) - strtotime($birthdate));
                $years = floor($diff / (365 * 60 * 60 * 24));
                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                echo "Hello " . $name . "! You are " . $years . " years old!";
            }
            ?>

        </div>
    </center>
</body>

</html>