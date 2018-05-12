<?php

function discriminant($a, $b, $c) {
    return ($b ** 2 - 4 * $a * $c);
}

assert (0 === discriminant(4,4,1));
assert (4 === discriminant(5,8,3));
assert (-243 === discriminant(7,3,9));
assert (361 === discriminant(-20,-21,-1));