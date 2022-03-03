<?php
    require_once("connect.php");
    
    try {
        $createDb="DROP DATABASE store";
        $conn->exec($createDb);
        echo "Database dropped successfully<br>";
      } catch(PDOException $e) {
        echo $createDb . "<br>" . $e->getMessage();
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