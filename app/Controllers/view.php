<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $heading ?></h1>

    <ul>
        <?php foreach ($todo_list as $week => $tasks): ?>
            <li>
                <h2><?= $week ?></h2>
                <ul>
                    <?php foreach ($tasks as $task): ?>
                        <li><?= $task['title'] ?></li>
                        <li><?= $task['description'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
