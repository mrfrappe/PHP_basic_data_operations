<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
<?php
    $mydata = json_decode(file_get_contents("DATA.json"), true);

    echo "<h2>Show</h2>";
    echo "<p><a href='index.php'>Back</a></p>";
    echo "<table class='table-striped table-responsive'><tr><th>id</th>".
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
    </body>
</html>