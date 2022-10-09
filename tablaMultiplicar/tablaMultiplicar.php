<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $multiplicador = 10;
        $multiplicando = 10;

        echo "<table><th>*</th>";

        for ($i = 0; $i <= $multiplicador; $i++) {
            echo "<th>$i</th>";
        }

        echo "</tr>";

        for($i = 0; $i <= $multiplicando; $i++){
            echo "<tr><th>$i</th>";
            for($j = 0; $j <= $multiplicador; $j++){
              echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
          }    
    ?>
</body>
</html>
