<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login here</h1>
   <form action="log.php" method="post">

   <input type="text" placeholder="Username" name="name"> <br><br>
   <input type="password" name="pass" placeholder="Password">
   <input type="submit">
   </form>
</body>
</html>

