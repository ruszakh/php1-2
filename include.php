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
</nav>

<p>
    1.var_dump(include __DIR__ . '/discriminant.php'); возвращает нам
    <?php var_dump(include __DIR__ . '/discriminant.php'); ?>
    что говорит о существовании файла,true.
</p>
<hr>
<p>
    1.var_dump(include __DIR__ . '/foo.php'); возвращает нам
    <?php var_dump(include __DIR__ . '/foo.php'); ?>
    что говорит об отсутствии файла, false.
</p>
<hr>
<p>
    1.var_dump(include __DIR__ . '/test.php'); возвращает нам
    <?php var_dump(include __DIR__ . '/test.php'); ?>
    что говорит о том, что мы можем получать из файла возвращаемое значение.
</p>

<a href="/">Назад</a>
</body>
</html>