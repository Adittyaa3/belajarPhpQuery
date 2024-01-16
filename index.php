<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hallo dunia</h1>
    <?php include "nav.php";?>
   <a href="tambah.php">Tambah</a>



    <?php
      if ($_SERVER ['REQUEST_METHOD'] == 'GET') {
        $sql = "SELECT * from user";
      
       if ($result = $conn->query($sql)) {
            echo"<table>";
            echo "<tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Text</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['nama']."</td>";
            echo"<td>".$row['pasword']."</td>";
            echo"<td>".$row['text']."</td>";
            echo"<td>"."<a href='update.php?id=".$row['id']."'>UPDATE</a>"."</td>";
            echo"<td>"."<a href='delete.php?id=".$row['id']."'>DELETE</a>"."</td>";
            # code...
        }
        echo "</table>";
    } else {
        echo "Data not found";
                }}
    ?>
    
    
</body>
</html>