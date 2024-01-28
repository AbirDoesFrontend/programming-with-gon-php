<!-- Booleans -->

<?php

$isComplete = true;

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

if($isComplete) {
    // Do something
    // echo 'Success';
} else {
    // echo 'Fail';
}

?>

<!-- Integers -->
<?php

$max_int = PHP_INT_MAX;
var_dump($max_int);

echo '</br>';
echo '</br>';

$float_max_int = PHP_INT_MAX + 1;
var_dump($float_max_int);

?>


