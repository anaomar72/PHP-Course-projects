<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   echo "<h2>Multiplication Table</h2>";
echo "<table border='1' cellspacing='0' cellpadding='8'>";

// Loop for rows
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    
    // Loop for columns
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
    ?>
    
</body>
</html>