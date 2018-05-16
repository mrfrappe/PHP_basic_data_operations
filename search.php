<?php
    echo "<h2>Search</h2>";
    $mydata = json_decode(file_get_contents("DATA.json"), true);

    echo "<p><a href='index.php'>Back</a></p>";
    echo "<form method='post'><input type='text' name='search' value=''><input type='submit' name='submit' value='Search'></form>";
    echo "<table><tr><th>id</th>";
    echo "<th>first_name</th>";
    echo "<th>last_name</th>";
    echo "<th>email</th>";
    echo "<th>gender</th>";
    echo "<th>ip_address</th></tr>";

    $tosearch = $_POST['search'];

    foreach ($mydata as $val) {
        if ($val["id"] == $tosearch or $val["first_name"] == $tosearch or $val["last_name"] == $tosearch or $val["email"] == $tosearch or $val["gender"] == $tosearch or $val["ip_address"] == $tosearch){
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
    }
        echo "</table>";
?>