<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //creating multi dimentional array 
    $info =array(
        array("Anab","C1230691","CA233",90.12),//index 0
        array("Anab omar mohamed","C1230692","CA233",90.12)
    );
    echo '<table border="1" cellpadding="8" cellspacing="0">';
    echo '<thead><tr><th>Name</th><th>ID</th><th>Class</th><th>Grade</th></tr></thead>';
    echo '<tbody>';
    foreach ($info as $row) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';

    //is_array() function is used to check whether the given variable is an array or not.
    //  It returns true if the variable is an array, otherwise it returns false.
    $info = array("Anab omar mohamed");
    if(is_array($info)){
        echo "yes, it is an array";

    }else{
        echo "no, it is not an array";
    }

    //in_array() function is used to check whether a value exists in an array or not.

    $student = array("Anab","Aamina","Aisha" ,"Hafsa");
     if(in_array("Aisha",$student))
        echo "Aisha is in the student array" ."<br>";
     
     else
        echo "Aisha is not in the student array";
     

     //count() function is used to count the number of elements in an array.
     echo "the size of the student array is: " . count($student); 
     echo "<br>";

     //sizeof() function is used to count the number of elements in an array.
     echo "the size of the student array is: " . sizeof($student); 
     echo "<br>";

     //sort() function is used to sort the elements of an array in ascending order.
     echo "the student array in ascending order is: ";
     sort($student);
     print_r($student);


     //rsort() function is used to sort the elements of an array in descending order.
        echo "<br>";
        echo "the student array in descending order is: ";
        rsort($student);
        print_r($student);


    //arsort() function is used to sort the elements of an associative array in ascending order according to the value.
    $info = array("Anab"=>"90.12","Aamina"=>"80.12","Aisha"=>"70.12" ,"Hafsa"=>"60.12");
    echo "<br>";   
    echo "the student array in descending order is: ";

    arsort($info);
    print_r($info);

    //asort() function is used to sort the elements of an associative array in ascending order according to the value.
    echo "<br>";
    echo "the student array in ascending order is: ";
    asort($info);
    print_r($info);

    //min() function is used to find the minimum value in an array.
    echo "<br>";
    echo "the minimum value in the student array is: ". "Hafsa " . min($info);

    //max() function is used to find the maximum value in an array.
    echo "<br>";
    echo "the maximum value in the student array is: ". "Anab " . max($info);

    //implode() function is used to join the elements of an array into a string.
    echo "<br>";
    echo "the student array in string is: ". implode(", ",$student);


    //explode() function is used to split a string into an array.
    $str = "Anab,Aamina,Aisha,Hafsa";
    $arr = explode(",",$str);
    echo "<br>";
    echo "the string in array is: ";
    print_r($arr);

    //shuffle() function is used to shuffle the elements of an array.
    echo "<br>";
    echo "the student array in random order is: ";
    shuffle($student);
    print_r($student);

    //array_merge() function is used to merge two or more arrays into one array.
    $arr1 = array("Anab","Aamina");
    $arr2 = array("Aisha","Hafsa");
    $merged_arr = array_merge($arr1, $arr2);
    echo "<br>";
    echo "the merged array is: ";
    print_r($merged_arr);

    //array reverse() function is used to reverse the order of the elements in an array.
    echo "<br>";
    echo "the student array in reverse order is: ";
    $reversed_arr = array_reverse($student);
    print_r($reversed_arr);

    //array push() function is used to add one or more elements to the end of an array.
    echo "<br>";
    echo "the student array after adding a new element is: ";
    array_push($student, "Safa");
    print_r($student);

    //array pop() function is used to remove the last element from an array.
    echo "<br>";
    echo "the student array after removing the last element is: ";
    array_pop($student);
    print_r($student);
    echo "<br>";

    //creating function

    function myFunction($name){
        echo "Hello " . $name;
        echo "<br>";
    }
    echo myFunction("Anab");
    
    
    
    //creating function with return value
    function add($a, $b){
        return $a + $b;
    }
    
    echo "the sum of 5 and 10 is: " . add(5, 10);
            echo "<br>";


    //creating function with default value
    function myFunction2($name = "Anab"){
        echo "Hello " . $name;
        echo "<br>";
    }

    myFunction2();


    ?>
    
</body>
</html>