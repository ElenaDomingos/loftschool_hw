<!DOCTYPE html>
<head>
    <title>Multiply it</title>
    <style>
        td {
            border: 1px solid #1d1d1d;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    $y = 1;
    for ($x = 1; $x <= 10; $x++) {

        echo '<td>';
        $res = $i * $y;
        $y++;
        if ($x > 1 && $i > 1) {
            if ($x % 2 == 0 && $i % 2 == 0) {
                echo '(' . $res . ')';
            } elseif ($x % 2 !== 0 && $i % 2 !== 0) {
                echo '[' . $res . ']';
            } else {
                echo $res;
            }
        } else {
            echo $res;
        }

        echo '</td>';

    }
    echo '</tr>';
}

echo '</table>';

?>

</body>
</html>
