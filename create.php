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

                echo "<h2>Create</h2>";
                echo "<p><a href='index.php'>Back</a></p>";

                echo "<form method='post'>
                <div class='row'>
                <div class='centered'>
                    <div class='form-group'><label for='firstNameInput'>First name</label><input class='form-control id='firstNameInput' placeholder='Enter first name' type='text' name='first_name' value='' required></div>".
                    "<div class='form-group'><label for='lastNameInput'>Last name </label><input class='form-control' id='lastNameInput' placeholder='Enter last name' type='text' name='last_name' value='' required></div>".
                    "<div class='form-group'><label for='emailInput'>Email</label><input class='form-control' id='emailInput' placeholder='Enter email' type='email' name='email' value='' required/></div>".
                    "<div class='form-group'><label for='ipAdressInput'>IP address</label><input class='form-control' id='ipAdressInput' placeholder='Enter ip address' type='text' name='ip_address' value='' required/></div></br>Gender</br>".
                    "<div class='form-check'><input class='form-check-input' id='genderCheck1' type='radio' name='gender' value='Male' required><label class='form-check-label' for='genderCheck2'>Male</label></div>
                    <div class='form-check'><input class='form-check-input' id=genderCheck2' type='radio' name='gender' value='Female' required><label class='form-check-label' for='genderCheck2'>Female</label></div>".
                    "<button type='submit' name='submit' class='btn btn-primary'>Create</button></div></div></form>";


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
        </div>
    </body>

</html>