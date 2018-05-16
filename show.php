<?php
    echo "<h2>Show</h2>";
    $mydata = json_decode(file_get_contents("DATA.json"), true);

    echo "<p><a href='index.php'>Back</a></p>";
    echo "<table><tr><th>id</th>";
    echo "<th>first_name</th>";
    echo "<th>last_name</th>";
    echo "<th>email</th>";
    echo "<th>gender</th>";
    echo "<th>ip_address</th></tr>";
    foreach ($mydata as $val) {
        echo "<tr><td>";
        print_r($val["id"]);
        echo "</td>";
        echo "<td>";
        print_r($val["first_name"]);
        echo "</td>";
                echo "<td>";
        print_r($val["last_name"]);
        echo "</td>";
                echo "<td>";
        print_r($val["email"]);
        echo "</td>";
                echo "<td>";
        print_r($val["gender"]);
        echo "</td>";
                echo "<td>";
        print_r($val["ip_address"]);
        echo "</td></tr>";   
    }
    echo "</table>";
?>