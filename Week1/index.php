<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //php tag is used to write php code  without it php code will not be executed and will be treated as normal text
    <?php ?>

    <?php
    //echo is used to print the output on the screen   
       echo "Welcome to PHP!";
       //echo can also be used with parentheses
       echo ("Welcome to PHP!");
     //print is also used to print the output on the screen
       print "This is the first PHP program!";
       //print can also be used with parentheses
       print ("This is the first PHP program!");

       //echo can be used to print multiple strings at once
       echo "Anab" , " omar";
       //print can only print one string at a time
       print "Anab" , " omar"; 

       //variables are used to store data in php
       $FullName = "Anab Omar mohamed";
       echo $FullName;
       echo("My full name is: $FullName"); 
     // single quotes will not parse the variable and will print the variable name instead of its value
       echo('My full name is $FullName'); 

       //strlen() function is used to get the length of a string";
       $length = strlen($FullName);
       echo "The length of the string is: $length";
       //str_word_count() function is used to count the number of words in a string
       $Count = str_word_count($FullName);
       echo "The number of words in the string is: $Count";

    

    


       
    ?>
</body>
</html>