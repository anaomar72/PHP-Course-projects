<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Create an array of numbers
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    // Display all the elements in the array
    echo " All the elements in the array are: ". "<br>";
    foreach ($numbers as $num) {
        echo $num . " ";
    }

    //calculate and printing the sum of all the elements in the array
    $sum = array_sum($numbers);
    echo " <br> The sum of all the elements in the array is: " . $sum . "<br>";

    //calculating and printinf the total of even numbers in the array
     $evenSum = 0;
    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $evenSum += $num;
        }
    }
    echo " <br> The sum of all even numbers in the array is: " . $evenSum . "<br>";

    //calculating and printing the total of odd numbers in the array
    $oddSum =0;
    foreach($numbers as $num){
        if($num%2 != 0){
            $oddSum +=$num;
        }
    }
    echo " <br> The sum of all odd numbers in the array is: " . $oddSum . "<br>";

    //find the minimum number and it's position in the array
    $min = min($numbers);
    $minIndex = array_search($min, $numbers);
    echo " <br> The minimum number in the array is: " . $min . "<br>";
    echo " The position of the minimum number in the array is: " . $minIndex . "<br>";

    //find the maximum number and it's position in the array
    $max = max($numbers);
    $maxIndex = array_search($max, $numbers);
    echo " <br> The maximum number in the array is: " . $max . "<br>";
    echo " The position of the maximum number in the array is: " . $maxIndex
    
    
?>
</body>
</html>