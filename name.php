<?php

function name($n) {
    switch ($n) {
        case 'Александр':
            echo 'Мужской';
            break;
        case 'Дмитрий':
            echo 'Мужской';
            break;
        case 'Сергей':
            echo 'Мужской';
            break;
        case 'Максим':
            echo 'Мужской';
            break;
        case 'Олег':
            echo 'Мужской';
            break;
        case 'Ольга':
            echo 'Женский';
            break;
        case 'Татьяна':
            echo 'Женский';
            break;
        case 'Елена':
            echo 'Женский';
            break;
        case 'Светлана':
            echo 'Женский';
            break;
        case 'Ирина':
            echo 'Женский';
            break;
        default:
            echo 'null';
    }
}

assert('Александр' === 'Мужской');
assert('Ирина' === 'Женский');
assert('Лариса' === 'null');

 name('Олег');

