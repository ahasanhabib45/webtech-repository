<?php
	$ezl = new mysqli("localhost", "root", "", "dream house");
    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

	$sql = "SELECT * FROM chat";
    $qry = $ezl->query($sql);
    
	echo "<table style='margin-top: 100%;' border='0px' width='100%''>";
        echo "<tbody>";          
            while ($data = $qry->fetch_assoc()) {
                if($data['User'] == 'seller'){
                    echo "<tr>";
                    echo "<td>";
                    echo "<div>" . $data['Chat'] . "</div>";
                    echo "</td>";
                    echo "</tr>";
                }
                else {
                    echo "<tr>";
                    echo "<td>";
                    echo "<div align = 'right' border='1px solid black'>" . $data['Chat'] . "</div>";
                    echo "</td>";
                    echo "</tr>";   
                }
            }
        echo "</tbody>";
    echo "</table>";
?>