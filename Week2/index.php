<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//     //constant
//     define("Age", 18);
//     echo Age;

//     //Sequential statements
//     $name = "Anab";
//     $age = 20;

//     echo "My name is $name";
//     echo "I am $age years old";
    

// // if else statement
//     $Age = 20;
//     if($Age >= 18){
//         echo "Adult";
//     }
//     else{
//         echo "Child";
//     }

//    // Switch statement
//     $marks =90;
//     switch($marks)
//     {
//         case ($marks>=90):
//         echo "Excellent";
//         break;
//         case($marks >=80):
//         echo "Very good";
//         break;
//         case($marks >=50):
//         echo "minimal pass";
//         break;
//         default;
//         echo "Fail";
//         break;
//     }

//     // ternary operator
//     $Fuel = 0.5;
//     echo $Fuel <= 1 ? "fill tank now": "there is enough fuel";

//     // Loops

//     // while loop 
//     $Count =1;
//     while($Count<=5){
//         echo "$Count" . "<br>";
//         $Count++;

//     }

//     // do while loop
    
//     $Count =1;
//     do{
//         echo "$Count" . "<br>";
//         $Count++;
//     }while($Count<=5);


//     // for loop
//     for($Count=1; $Count<=5; $Count++){
//         echo "$Count times 5 = " . ($Count * 5) . "<br>";
//     }

//     // Square of numbers from 1 to 10
//     for($i=1; $i<=10; $i++){
       
//             echo "$i * $i= " . ($i * $i) . "<br>";
        
//         echo "<br>";
//     }

//     //Nested for loop multiplication table
//    for($i=1; $i<=3; $i++){
//         for($j=1; $j<=5; $j++){
//             echo "$i * $j = " . ($i * $j) . "<br>";
//         }
//    }

//     //Nested for loop multiplication rows and columns
//    for ($row = 1; $row <= 5; $row++) {
//     for ($col = 1; $col <= 5; $col++) {
//         $Result = $row * $col;
//         echo "Row: $row, Column: $col, Result: $Result <br><br>";
//     }
//   }

   //implicity and explicity

 //Numerical index array can do two ways
 // creating and initializing at once

  $numbers= array(2,"Anab",29.5 , TRUE);

  // creating an empty array
  $numbers =array();

// Initializing the array by assigning a value to an index
  $numbers[0]=2;


  //display array using var_dump function 
  var_dump($numbers);

  //display array using print_r function and pre tag
   echo "<pre>";
   print_r ($numbers);
   echo "</pre>";

   echo "<pre>";
   var_dump ($numbers);
   echo "</pre>";

//display array using for loop and print_r function
for($count= 0; $count < count($numbers); $count++ ){
    echo "<pre>";
   print_r ($numbers[$count]);
   echo 
   "</pre>";

}

// Associative array
$info = array(
    "Id" => "C1230691",
    "Name"=> "Anab",
    "Age" => 30,
    "address"=> "madiino",
    "Status"=> "single"

);

//display associative array using foreach loop and print_r function
echo "Personal information: <br>";

foreach ($info as $key => $value) {
    echo $key . ": " . $value . "<br>";
} 

 //display assciative array accessing value using key
echo $info["Name"] . "<br>";



    
  
   
 

    ?>
</body>
</html>