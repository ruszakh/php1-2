<?php

function name($name) {
    $n = mb_substr($name, -1);
    if ('р' == $n) {
        echo 'Пол - мужской';
    } elseif ('а' == $n ) {
        echo 'Пол - женский';
    } else {
        echo null;
    }
}

assert('Александр' === 'Мужской');
assert('Пётр' === 'Мужской');
assert('Егор' === 'Мужской');
assert('Ирина' === 'Женский');
assert('Ольга' === 'Женский');
assert('Лариса' === 'Женский');
assert('Картофель' === null);

 name('Артур');