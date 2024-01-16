<?php include "connect.php";
?>
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
    $id = $_GET['id'];
  
  $query = "SELECT * FROM user WHERE id = $id LIMIT 1";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);
    ?>
    
    <form action="updated.php" method="POST">
    ID :  <input hidden  type="text" name="id" value="<?php echo $row['id'] ?>">
        Nama : <input type="text" placeholder="Nama" name="nama" value="<?php echo $row['nama'] ?>"> <br>
        Password : <input type="password" placeholder="Password" name="pasword" value="<?php echo $row['pasword'] ?>"> <br>
        Text : <input type="area" placeholder="catatan" name="text" value="<?php echo $row['text'] ?>"><br>
        <input type="submit" value ="simpan">
    </form>
</body>
</html>