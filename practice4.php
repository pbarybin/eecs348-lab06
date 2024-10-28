<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //set size variable based on input passed from html form
        $size = $_POST["size"];

        if ($size > 0) {
            //title
            echo "<h2>$size by $size Multiplication Table</h2>";
            //create table
            echo "<table border = '1' cellpadding = '5'>";
            //top row
            echo "<tr><th></th>";
            for ($i=1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            //all other rows
            for ($i=1; $i <= $size; $i++) {
                echo "<tr>";
                //first entry column indicies
                echo "<th>$i</th>";
                //fill rest of row with multiplication values
                for ($j=1; $j <= $size; $j++) {
                    echo "<td>".$i*$j."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>