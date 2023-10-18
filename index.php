<?php
// Load classes
function loadClass($class) {
    require $class . ".class.php";
    }    
spl_autoload_register('loadClass');

// call Somme with catch exceptions
try {
    $newSum = new Somme(1, 4);
    $somme = $newSum->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$somme";
echo "<br>";

// call Soustraction
try {
    $newSoustraction = new Soustraction(6,1);
    $soustraction = $newSoustraction->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$soustraction";
echo "<br>";

// call Multiplication
try {
    $newMultiplication = new Multiplication(2.5,2);
    $multiplication = $newMultiplication->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$multiplication";
echo "<br>";

// call Division
try {
    $newDivision = new Division(10,0);
    $division = $newDivision->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$division";
echo "<br>";

?>