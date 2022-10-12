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

        function debug_to_console($data) {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        }

        $array = [43, 12, 54, 32, 65, 1, 99, 33, 24, 30, 16, 1233, 81, 2];

        echo "<p>Array desordenada:</p>";
        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " ";
        }
        echo "<p>Array ordenada:</p>"; 

        function bubbleSort($arr) {

            $temp;

            for ($i = 0; $i < count($arr); $i++) {
                for ($j = 1; $j < (count($arr)-$i); $j++) {
                    if ($arr[$j-1] > $arr[$j]) {
                        $temp = $arr[$j-1];
                        $arr[$j-1] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }

            return $arr;

        }

        $array = bubbleSort($array);

        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " ";
        }
  
    ?>
</body>
</html>