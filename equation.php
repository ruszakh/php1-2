<?php

include __DIR__ . '/discriminant.php';

$a = 4;
$b = 7;
$c = 3;
$d = discriminant($a,$b,$c);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP1-2</title>
</head>
<body>

<nav>
    <a href="/table.php">Таблица истинности</a> |
    <a href="/equation.php">Решение уравнений</a> |
    <a href="/include.php">include, как функция</a> |
    <a href="/name.php">Определение пола по имени</a> |
</nav>

<p>
    a = 4 <br>
    b = 7 <br>
    c = 3
</p>

<p>
<?php

if ($d > 0) {
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    ?>Уравнение имеет 2 различных вещественных корня:<br>
    x1 = <?php echo $x1; ?><br>
    x2 = <?php echo $x2;

} elseif (0 == $d) {
    $x = (-$b / (2 * $a));
    ?>Уравнение имеет 1 корень (или же 2 совпадающих вещественных корня):<br>
      x = <?php echo $x;

} else {
    ?>Уравнение имеет 2 мнимых корня (т.е. вещественных корней нет)<?php
}

?>

</p>

<a href="/">Назад</a>
</body>
</html>