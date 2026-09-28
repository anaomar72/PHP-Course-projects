<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 8;
    $num2 = 12;
    $LCM= max($num1, $num2);
    while (true) {
        if ($LCM % $num1 == 0 && $LCM % $num2 == 0) {
            echo "LCM of " . $num1 . " and " . $num2 . " is: " . $LCM;
            break;
        }
        $LCM++;
    }
    ?>
</body>
</html>