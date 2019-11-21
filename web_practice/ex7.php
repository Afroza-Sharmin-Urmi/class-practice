<?php
echo "<table border =\"1\" style= 'border-collapse:collapse'>";
for ($row=1; $row <=7 ; $row++) { 
     for ($column=1; $column <=7 ; $column++) { 
     	$a=$row*$column;
     	echo "<td>$a</td>";
     }
     echo "</tr>";

}
?>