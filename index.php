<?php
// Load classes
function loadClass($class) {
    require $class . ".class.php";
    }    
spl_autoload_register('loadClass');

// call Somme with catch exceptions
try {
    $newSum = new Somme("a", 4);
    $somme = $newSum->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$somme";

// call Soustraction
try {
    $newSoustraction = new Soustraction("a",1);
    $soustraction = $newSoustraction->operate();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "$soustraction";

// call Multiplication
$newMultiplication = new Multiplication(2.5,2);
$multiplication = $newMultiplication->operate();
echo "$multiplication";

// call Division
$newDivision = new Division(10,2);
$division = $newDivision->operate();
echo "$division";

?>