<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

//creating two dimensional array
$Colors = array(
      "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue",
      ),
      "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue",

      ),
        "Dark" => array(
            "Red" => "Dark Red",
            "Green" => "Dark Green",
            "Blue" => "Dark Blue",

      )

    );
   //displaying into table format
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr style='background-color: lightgray;'><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
    foreach ($Colors as $type => $color) {
        echo "<tr>";
        echo "<td style='background-color: lightgray;'>$type</td>";
        foreach ($color as $shade) {
            echo "<td>$shade</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
</body>
</html>