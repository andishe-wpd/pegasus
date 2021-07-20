<?php

$numbers = array("one" , "two" , "three" , "four" );
echo $numbers[0];
echo $numbers[1];
echo $numbers[2];
echo $numbers[3];
?><br><?php
$zero = 0;
while ($zero <= 3){
echo $numbers[$zero];
$zero ++;
?><br><hr><?php
}


$zero = 0;
while ($zero <= 3){ //number 3 is hardcoded
    ?>  <li> <?php echo $numbers[$zero]; ?></li><?php
    $zero ++;
    ?><br><hr><?php
}


$zero = 0;
while ($zero < count($numbers)){ 
    ?>  <li> <?php echo $numbers[$zero]; ?></li><?php
    $zero ++;
    ?><br><hr><?php
}


// we can use count($array) as a seprate variable
$zero = 0;
$arrlen = count($numbers);
while ($zero < $arrlen){ 
    ?>  <li> <?php echo $numbers[$zero]; ?></li><?php
    $zero ++;
    ?><br><hr><?php
}

// assosiative array
//normal array
$animals = array("cat" , "dog" , "eagle");
// assosiative array --> a value for each item
$animalsounds = array('cat' => 'meow' , 'dog' => 'bark' ,'eagles' => 'jikjik' );
//for better writing
$animalsounds = array(
    'cat' => 'meow' ,
     'dog' => 'bark' ,
     'eagles' => 'jikjik'
     );
//how to call ?
echo $animalsounds[cat];





?>
