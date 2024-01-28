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
    echo 'Success';
} else {
    echo 'Fail';
}