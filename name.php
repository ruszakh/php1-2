<?php

function name($name) {
    $lastNameLetter = mb_substr($name, -1);
    if ('р' == $lastNameLetter) {
        return 'Мужской';
    } elseif ('а' == $lastNameLetter) {
        return 'Женский';
    }
    return null;
}

assert('Мужской' == name('Александр'));
assert('Мужской' == name('Пётр'));
assert('Мужской' == name('Егор'));
assert('Женский' == name('Ирина'));
assert('Женский' == name('Ольга'));
assert('Женский' == name('Лариса'));
assert(null == name('Картофель'));

echo name('Артур');