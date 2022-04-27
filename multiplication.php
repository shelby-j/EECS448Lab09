<?php
$cols = 100;
$rows = 100;
$space = 'x';

echo "<table border=\"2\">";
		echo '<tr>';
        echo '<td>' .$space. '</td>';
        for ($r =1; $r <= $rows; $r++){
			echo '<td>' .$r. '</td>';  
        }
        echo '</tr>';
        
        for ($r =1; $r <= $rows; $r++){

            echo'<tr>';
			echo '<td>' .$r. '</td>';
            for ($c = 1; $c <= $cols; $c++){
            	
                echo '<td>' .$c*$r.'</td>';
            }
            echo '</tr>'; // close tr tag here

        }

  echo"</table>";
?>