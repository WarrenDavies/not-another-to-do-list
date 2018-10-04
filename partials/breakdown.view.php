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
            </li>
      <?php }
        }
    if ($area_has_goal) { 
        echo "</ul>";
    }; 
} ?>