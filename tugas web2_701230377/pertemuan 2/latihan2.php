<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 1px;
        }

        .row {
            margin-bottom: 1px;
        }
    </style>
</head>
<body>
    <?php
    $huruf = array('A', 'A', 'B', 'A', 'B', 'C');
    $index = 0;

    echo "<div class='row'>";
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>{$huruf[$index]}</div>";
            $index++;
        }
        echo "</div>";
        echo "<div class='row'>";
    }
    echo "</div>";
    ?>
</body>
</html>