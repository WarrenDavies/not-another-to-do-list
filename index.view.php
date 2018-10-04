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
    <?php foreach ($goals as $goal) { ?>
        <li><b>
            <?= $goal->name; ?>
        </li></b>
    <?php } ?>
</ul> 
<ul>
    <?php foreach ($actions as $action) { ?>
        <li><b>
            <?= $action->completed ? '<strike>' : ''; ?>
            <?php $action->name; ?>
            <?= $action->completed ? '</strike>' : ''; ?>
        </li></b>
    <?php } ?>
</ul>

<ul>
    <?php foreach ($physicalgoals as $physicalgoal) { ?>

        <li><b>
            <?= $physicalgoal->completed ? '<strike>' : ''; ?>
            <?php echo $physicalgoal->name; ?>
            <?= $physicalgoal->completed ? '</strike>' : ''; ?>
        </li></b>
    <?php } ?>
</ul>

</body>
</html>

