<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("nav.php");
    ?>
    <form action="insert.php" method="POST">
        Nama : <input type="nama" placeholder="Nama" name="nama">
        Password : <input type="password" placeholder="Password" name="password">
        Text : <input type="area" placeholder="catatan" name="text">
        <input type="submit">
    </form>
</body>
</html>