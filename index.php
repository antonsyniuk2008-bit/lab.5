<?php

$tasks = [
    [
        'id' => 1,
        'title' => 'Виконати лабораторну роботу №5',
        'priority' => 'High',
        'is_completed' => false
    ],
    [
        'id' => 2,
        'title' => 'Опрацювати теоретичний матеріал',
        'priority' => 'Medium',
        'is_completed' => true
    ],
    [
        'id' => 3,
        'title' => 'Створити багатовимірний масив',
        'priority' => 'High',
        'is_completed' => true
    ],
    [
        'id' => 4,
        'title' => 'Реалізувати цикл foreach',
        'priority' => 'Low',
        'is_completed' => false
    ],
    [
        'id' => 5,
        'title' => 'Підготувати звіт',
        'priority' => 'Medium',
        'is_completed' => false
    ]
];

function formatTitle(string $title): string
{
    if (mb_strlen($title) > 40) {
        return mb_substr($title, 0, 40) . '...';
    }

    return $title;
}

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота №5</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Список завдань</h1>

<ul class="task-list">

    <?php foreach ($tasks as $task): ?>

        <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">

            <strong><?= formatTitle($task['title']) ?></strong>

            <p>Пріоритет: <?= $task['priority'] ?></p>

            <p>
                Статус:
                <?= $task['is_completed'] ? 'Виконано' : 'В процесі' ?>
            </p>

        </li>

    <?php endforeach; ?>

</ul>

</body>
</html>
