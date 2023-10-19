<?php
// Load classes
function loadClass($class) {
    require $class . ".class.php";
    }    
spl_autoload_register('loadClass');

// call Somme with catch exceptions
try {
    $newSum = new Somme(1, "a");
    $somme = $newSum->operate();
    echo $somme;
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br>";

// call Soustraction
try {
    $newSoustraction = new Soustraction(6,1);
    $soustraction = $newSoustraction->operate();
    echo "$soustraction";
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br>";

// call Multiplication
try {
    $newMultiplication = new Multiplication(2.5,2);
    $multiplication = $newMultiplication->operate();
    echo "$multiplication";
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br>";

// call Division
try {
    $newDivision = new Division(10,"");
    $division = $newDivision->operate();
    echo "$division";
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br>";

?>