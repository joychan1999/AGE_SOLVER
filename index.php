<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Enter your name:
        <input type="text" name="myname">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['myname'])) {
        echo "Hello " . $_POST['myname'];
    }
    ?>

</body>

</html>