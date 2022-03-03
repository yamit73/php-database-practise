<?php
    require_once("connect.php");
    
    try {
        $insertIntoTable="INSERT INTO practise(`id` ,`name`,`email`)
            VALUES(1003,'amit3','asdf3@asdf.com')";
        $conn->exec($insertIntoTable);
        echo "Record inserted successfully<br>";
      } catch(PDOException $e) {
        echo $insertIntoTable . "<br>" . $e->getMessage();
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