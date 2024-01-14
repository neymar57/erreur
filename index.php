<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR 404 not found</title>
</head>
<body>
    <h1>ERROR 404 not found page!</h1>
</body>
</html>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents("ip.txt", $ip . "," . " ", FILE_APPEND);
?>