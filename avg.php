<?php
// Zwykła średnia
function srednia($a, $b) {
    return ($a + $b) / 2;
}

// Średnia ważona
function srednia_wazona($a, $w1, $b, $w2) {
    return ($a * $w1 + $b * $w2) / ($w1 + $w2);
}
