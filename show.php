<?php
    $mydata = json_decode(file_get_contents("DATA.json"), true);

    echo "<h2>Show</h2>";
    echo "<p><a href='index.php'>Back</a></p>";
    echo "<table><tr><th>id</th>".
        "<th>first_name</th>".
        "<th>last_name</th>".
        "<th>email</th>".
        "<th>gender</th>".
        "<th>ip_address</th></tr>";

    foreach ($mydata as $val) {
        print_r("<tr><td>" . $val["id"] . "</td>");
        print_r("<td>" . $val["first_name"] . "</td>");
        print_r("<td>" . $val["last_name"] . "</td>");
        print_r("<td>" . $val["email"] . "</td>");
        print_r("<td>" . $val["gender"] . "</td>");
        print_r("<td>" . $val["ip_address"] . "</td></tr>");
    }
    echo "</table>";
?>