<?php
    require_once("connect.php");
    
    try {
        $conn->beginTransaction();

        $conn->exec("INSERT INTO practise(`id` ,`name`,`email`) VALUES(1005,'amit5','asdf5@asdf.com')");
        $conn->exec("INSERT INTO practise(`id` ,`name`,`email`) VALUES(1006,'amit6','asdf6@asdf.com')");
        $conn->exec("INSERT INTO practise(`id` ,`name`,`email`) VALUES(1007,'amit7','asdf7@asdf.com')");

        $conn->commit();

        echo "Record inserted successfully<br>";
      } catch(PDOException $e) {
            $conn->rollback();
            echo "Error " . "<br>" . $e->getMessage();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Database</title>
</head>
<body>
    
</body>
</html>