<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            display: inline-flex;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            border: 2px solid black;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class= "box">' . $j . '</div>';
        }
        echo "<br>";
    }
    ?>
    
</body>
</html>