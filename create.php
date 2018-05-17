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

    echo "<h2>Create</h2>";
    echo "<p><a href='index.php'>Back</a></p>";

    echo "<form method='post'><label>First name<input type='text' name='first_name' value='' required/></label></br>".
        "<label>Last name <input type='text' name='last_name' value='' required/></label></br>".
        "<label>Email <input type='text' name='email' value='' required/></label></br>".
        "<label>IP address <input type='text' name='ip_address' value='' required/></label></br>".
        "<label>Gender </label></br><label><input type='checkbox' name='gender' value='Male' />Male</label><label><input type='checkbox' name='gender' value='Female' /></label>Female</br>".
        "<input type='submit' name='submit' value='Create'/></form>";
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
            $additionalUser = array(
                                'id' => count($mydata)+1,
                                'first_name' => $_POST['first_name'],
                                'last_name' => $_POST['last_name'],
                                'email' => $_POST['email'],
                                'gender' => $_POST['gender'],
                                'ip_address' => $_POST['ip_address'],
                                );
            array_push($mydata, $additionalUser);
            $jsonData = json_encode($mydata);
            file_put_contents('DATA.json', $jsonData);

            echo "<h3>Created user:</h3></br>".
                "<table class='table-striped table-responsive'><tr><th>id</th>".
                "<th>first_name</th>".
                "<th>last_name</th>".
                "<th>email</th>".
                "<th>gender</th>".
                "<th>ip_address</th></tr>".
                "<tr><td>" . $additionalUser['id'] . "</td><td>" . $additionalUser['first_name'] ."</td><td>" . $additionalUser['last_name'] . "</td><td>" . $additionalUser['email'] . "</td><td>" . $additionalUser['gender'] . "</td><td>" . $additionalUser['ip_address'] . "</td></tr></table>";
        } 
    }

?>
<!--checkbox to edit-->
    </body>
</html>