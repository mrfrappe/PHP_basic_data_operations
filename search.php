<?php
    $mydata = json_decode(file_get_contents("DATA.json"), true);
 
    echo "<h2>Search</h2>";
    echo "<p><a href='index.php'>Back</a></p>";
    echo "<form method='post'><input type='text' name='search' value=''><input type='submit' name='submit' value='Search'></form>";
    echo "<p>Search by: id, first_name, last_name, email, gender, ip_address.</p>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
               $tosearch = $_POST['search'];
                echo "<table><tr><th>id</th>".
                    "<th>first_name</th>".
                    "<th>last_name</th>".
                    "<th>email</th>".
                    "<th>gender</th>".
                    "<th>ip_address</th></tr>";
                foreach ($mydata as $val) {
                    if ($val["id"] == $tosearch or $val["first_name"] == $tosearch or $val["last_name"] == $tosearch or $val["email"] == $tosearch or $val["gender"] == $tosearch or $val["ip_address"] == $tosearch){
                    print_r("<tr><td>" . $val["id"] . "</td>");
                    print_r("<td>" . $val["first_name"] . "</td>");
                    print_r("<td>" . $val["last_name"] . "</td>");
                    print_r("<td>" . $val["email"] . "</td>");
                    print_r("<td>" . $val["gender"] . "</td>");
                    print_r("<td>" . $val["ip_address"] . "</td>");
                    echo "<td><a href='edit.php'>Edit</a></td></tr>";
                    }
                }
        }
    }
        echo "</table>";
?>