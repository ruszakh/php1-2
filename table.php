<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 1-2</title>
</head>
<body>

<nav>
    <a href="/table.php">Таблица истинности</a> |
    <a href="/equation.php">Решение уравнений</a> |
    <a href="/include.php">include, как функция</a> |
</nav>

<br>

<table border="1">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>&&</th>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo (int)(false && false); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo (int)(false && false); ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo (int)(false && true); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo (int)(true && true); ?></td>
    </tr>
</table>

<br>

<table border="1">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>||</th>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo (int)(false || false); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo (int)(true || false); ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo (int)(false || true); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo (int)(true ||true); ?></td>
    </tr>
</table>

<br>

<table border="1">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>xor</th>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo (int)(false xor false); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo (int)(true xor false); ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo (int)(false xor true); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo (int)(true xor true); ?></td>
    </tr>

</table>

<br>

<a href="/">Назад</a>
</body>
</html>