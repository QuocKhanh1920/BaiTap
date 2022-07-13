<!DOCTYPE html>

<html lang="en">

<head>
    <title>Bàn cờ vua</title>
</head>

<body>
    <table style="width: 540px; margin-top: 70px; margin-left: 400px; border: 1px;">
        <?php
        
        $row = 8;

        $total = 0;

        $col = 8;

        for ($i = 0; $i < $row; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $col; $j++) {
                $total++;

                $sum = $i + $j;

                if ($sum % 2 == 0) {
                    echo
                    '<td style="height: 60px; width: 60px; background-color: #fff; text-align: center">' /* . setQueen($index, $j) ? "Queen" : $index[$i][$j] . */ .$total. '</td>';
                } else {
                    echo
                    '<td style="height: 60px; width: 60px; color: #fff; background-color: #000; text-align: center">' /* . setQueen($index, $j) ? "Queen" : $index[$i][$j] . */  .$total. '</td>';
                }
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>