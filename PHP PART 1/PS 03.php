<?php
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];
$x= 0;
while ($x < 3) {
    $y = 0;
    while ($y < 3) {
        $checker = $matrix[$x][$y] % 2;
        $ifeven = ($checker == 0) ? ($matrix[$x][$y]) : null;
        if (isset($ifeven)){
            echo $ifeven . "\n";
        }
        $y++;
    }
    $x++;
}
?>