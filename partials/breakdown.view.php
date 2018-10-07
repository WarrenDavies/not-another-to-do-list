<?php
foreach ($areas as $area) { 
   echo "<p><b>" . $area->name . "</b></p>";
   $area_has_goal = false; 
   foreach ($goals as $goal) {
      if ($area->id == $goal->AreaID) {
        if (!$area_has_goal) { 
            echo "<ul>";
            $area_has_goal = true;
        }; ?>
            <li>
                <?= $goal->completed ? '<strike>' : ''; ?>
                <?php echo $goal->name; ?>
                <?= $goal->completed ? '</strike>' : ''; ?>
                    <?php
                    $goal_has_project = false;
                    foreach ($projects as $project) {
                        if ($project->GoalID == $goal->id) {
                            if (!$goal_has_project) {
                                echo '<ul>';
                                $goal_has_project = true;
                            } ?>
                            <li> 
                                <?= $project->completed ? '<strike>' : ''; ?>
                                <?php echo $project->name; ?>
                                <?= $project->completed ? '</strike>' : ''; ?> 
                            </li>
                        <?php }
                    } 
                    if ($goal_has_project) {
                        echo "</ul>";
                    }?>
            </li>
      <?php }
        }
    if ($area_has_goal) { 
        echo "</ul>";
    }; 
} ?>