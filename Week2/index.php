<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $Age = 20;
    // if($Age >= 18){
    //     echo "Adult";
    // }
    // else{
    //     echo "Child";
    // }
    //Switch case 

    // $marks =90;
    // switch($marks)
    // {
    //     case ($marks>=90)
    //     echo "Excellent";
    //     break;
    //     case($marks >=80)
    //     echo "Very good";
    //     break;
    //     case($marks >=50)
    //     echo "minimal pass";
    //     break;
    //     default;
    //     echo "Fail";
    //     break;
    // }

    //ternary operator
    // $Fuel = 0.5;
    // echo $Fuel <= 1 ? "fill tank now": "there is enough fuel";

    // Loops
    //while loop 
    //while key + condition 
    // $Count =1;
    // while($Count<=5){
    //     echo "$Count" . "<br>";
    //     $Count++;

    // }

    //do while loop
    // $Count =1;
    // do{
    //     echo "$Count" . "<br>";
    //     $Count++;
    // }while($Count<=5);

    // for($Count=1; $Count<=5; $Count++){
    //     echo "$Count times 5 = " . ($Count * 5) . "<br>";
    // }

    //Squeare of numbers from 1 to 10
    // for($i=1; $i<=10; $i++){
       
    //         echo "$i * $i= " . ($i * $i) . "<br>";
        
    //     echo "<br>";
    // }

    //Nested for loop multiplication table
//    for($i=1; $i<=3; $i++){
//         for($j=1; $j<=5; $j++){
//             echo "$i * $j = " . ($i * $j) . "<br>";
//         }
//    }
//Nested for loop multiplication table

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {

        $Result = $row * $col;


        echo "Row: $row, Column: $col, Result: $Result <br><br>";
    }
}







    
   
    ?>
</body>
</html>