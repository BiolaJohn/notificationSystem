<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        // echo "string";
        $title = $_POST['title'];

        $q1 = "insert into posts (title) values ('$title')";
        $q2 = "insert into notifications (title,read_n) values ('$title','1')";
        // we will process it
        $pdo->query($q1);
        $pdo->query($q2);

        echo "Posted";
    }
    
    
    ?>
    <form action="" method="POST" style="text-align: center;">
        <textarea name="title" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit" value="Post">


    </form>
</body>
</html>