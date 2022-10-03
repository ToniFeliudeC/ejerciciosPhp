<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php

        function isTrue($thing) {
            return ($thing == 1) ? "true" : "false";
        }

        $values = array(null, 0, true, false, "0", "", "foo", array(), null);
        $valuesContent = array("null", 0, "true", "false", '"0"', '""', "foo", "array()", "unset(\$var)");

        echo "<style>
        th {
            background-color: green;
        }
        table, th, td {
            text-align: center;}</style>";
        echo "<table style=width:100%>";
        echo "<tr>
        <th>Número de fila</th>
        <th>Contenido de \$var</th>
        <th>isset(\$var)</th>
        <th>empty(\$var)</th>
        <th>bool(\$var)</th>
        <th>is_null(\$var)</th>";
        echo "</tr>";
        for ($x = 0; $x < count($values); $x++) {
            echo "<tr>";
            echo "<td>" . $x+1 . "</td>";
            echo "<td>" . $valuesContent[$x] . "</td>";
            echo "<td>" . isTrue(isset($values[$x]))  . "</td>";
            echo "<td>" . isTrue(empty($values[$x])) . "</td>";
            echo "<td>" . isTrue((bool) $values[$x]) . "</td>";
            echo "<td>" . isTrue(is_null($values[$x])) . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>