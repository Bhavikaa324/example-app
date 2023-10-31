<?php
$rows = 5; // Change the number of rows as per your requirement

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
