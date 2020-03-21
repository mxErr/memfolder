<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
<?php 
$categories = ['Главная', 'Мемы', 'Гифки', 'Приколы'];
?>

<div class="navigation__item">
    <h3 class="navigation__title">Категории</h3>
    <nav class="navigation__links">
    <?php $index = 0;
    $num = count($categories);
    while($index < $num) {
        $cat = $categories[$index];
        print('<br><a href="#">' . $cat . '</a>');
        $index = $index + 1;
    }
?>
</nav>
</div>
</body>
            </html>
            