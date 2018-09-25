<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Not Another To Do List App</h1>
<h2>Areas</h2>
<ul>
    <?php foreach ($areas as $area) { ?>
        <li><b>
            <?= $area->name; ?>
        </li></b>
    <?php } ?>
</ul> 
<ul>
    <?php foreach ($tasks as $task) { ?>
        <li><b>
            <?= $task->completed ? '<strike>' : ''; ?>
            <?php $task->silly(); ?>
            <?= $task->completed ? '</strike>' : ''; ?>
        </li></b>
    <?php } ?>
</ul>

</body>
</html>

