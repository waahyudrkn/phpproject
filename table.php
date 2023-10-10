<?php
    include("koneksi.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        };
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <th>id</th>
            <th>user</th>
            <th>reg_date</th>

            <tr><?php  echo $row["id"]  ?></tr>
        </table>
    </body>
    </html>
<?php

   
    
    mysqli_close($conn);
?>