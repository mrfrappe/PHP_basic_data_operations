<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
                $mydata = json_decode(file_get_contents("DATA.json"), true);

                echo "<h2>Search</h2>";
                echo "<p><a href='index.php'>Back</a></p>";
                echo "<form method='post' ><div class='row'><div class='centered'><div class='form-group'><label for='search'></label><input class='form-control id='search' placeholder='' type='text' name='search' value='' required></div><p> Search by: id, first_name, last_name, email, gender, ip_address</p><button type='submit' name='submit' class='btn btn-primary'>Search</button></div></div></form>";
                


                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['submit'])) {
                           $tosearch = $_POST['search'];
                            echo "<table class='table-striped table-responsive'><tr><th>id</th>".
                                "<th>first_name</th>".
                                "<th>last_name</th>".
                                "<th>email</th>".
                                "<th>gender</th>".
                                "<th>ip_address</th></tr>";
                            foreach ($mydata as $val) {
                                if ($val["id"] == $tosearch or $val["first_name"] == $tosearch or $val["last_name"] == $tosearch or $val["email"] == $tosearch or $val["gender"] == $tosearch or $val["ip_address"] == $tosearch){
                                $var = $val["id"];
                                print_r("<tr><td>" . $val["id"] . "</td>");
                                print_r("<td>" . $val["first_name"] . "</td>");
                                print_r("<td>" . $val["last_name"] . "</td>");
                                print_r("<td>" . $val["email"] . "</td>");
                                print_r("<td>" . $val["gender"] . "</td>");
                                print_r("<td>" . $val["ip_address"] . "</td>");
                                echo "<td><a href='edit.php?var=$var'>Edit</a></td></tr>";
                                }
                            }
                    }
                }
                    echo "</table>";
            ?>
    </div>
</body>

</html>
