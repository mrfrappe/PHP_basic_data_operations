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
        <div class="container">
            <?php
            $mydata = json_decode(file_get_contents("DATA.json"), true);
                echo "<h2>Edit</h2>";
                echo "<p><a href='index.php'>Back</a></p>";
                $url = $_SERVER["REQUEST_URI"];
                $value = str_replace("/PHP_basic_data_operations/edit.php?var=", "", $url)-1;
                echo "<table class='table-striped table-responsive'><tr><th>id</th>".
                    "<th>first_name</th>".
                    "<th>last_name</th>".
                    "<th>email</th>".
                    "<th>gender</th>".
                    "<th>ip_address</th></tr>";
                print_r("<tr><td>" . $mydata[$value]["id"] . "</td>");
                print_r("<td>" . $mydata[$value]["first_name"] . "</td>");
                print_r("<td>" . $mydata[$value]["last_name"] . "</td>");
                print_r("<td>" . $mydata[$value]["email"] . "</td>");
                print_r("<td>" . $mydata[$value]["gender"] . "</td>");
                print_r("<td>" . $mydata[$value]["ip_address"] . "</td></tr>");
                echo "</table></br>";
            
                echo "<form method='post'>.
                    <div class='row'>
                    <div class='col-md-6'>
                    <div class='form-group'><label for='firstNameInput'>First name</label><input class='form-control id='firstNameInput' placeholder='Enter first name' type='text' name='first_name' value='" . $mydata[$value]["first_name"] . "' required></div></br>".
                    "<div class='form-group'><label for='lastNameInput'>Last name </label><input class='form-control' id='lastNameInput' placeholder='Enter last name' type='text' name='last_name' value='" . $mydata[$value]["last_name"] . "' required></div></br>".
                    "<div class='form-group'><label for='emailInput'>Email</label><input class='form-control' id='emailInput' placeholder='Enter email' type='email' name='email' value='" . $mydata[$value]["email"] . "' required/></div></br>".
                    "<div class='form-group'><label for='ipAdressInput'>IP address</label><input class='form-control' id='ipAdressInput' placeholder='Enter ip address' type='text' name='ip_address' value='" . $mydata[$value]["ip_address"] . "' required/></div></br>Gender</br>";
     

            if ($mydata[$value]["gender"] == "Female") {
                echo "<div class='form-check'><input class='form-check-input'       id='genderCheck1' type='checkbox' name='gender' value='Male' require><label     class='form-check-label' for='genderCheck2'>Male</label></div>
                    <div class='form-check'><input class='form-check-input' id=genderCheck2' type='checkbox' name='gender' value='Female' require checked><label class='form-check-label' for='genderCheck2'>Female</label></div>";
            }
            else {
                echo "<div class='form-check'><input class='form-check-input'     id='genderCheck1' type='checkbox' name='gender' value='Male' require checked><label class='form-check-label' for='genderCheck2'>Male</label></div>
                    <div class='form-check'><input class='form-check-input' id=genderCheck2' type='checkbox' name='gender' value='Female' require ><label class='form-check-label' for='genderCheck2'>Female</label></div>";
            }
                echo  "<button type='submit' name='proces' class='btn btn-primary'>Create</button></div></div></form>";

             if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['proces'])) {
                        $additionalUser = array(
                                            'id' => $mydata[$value]["id"],
                                            'first_name' => $_POST['first_name'],
                                            'last_name' => $_POST['last_name'],
                                            'email' => $_POST['email'],
                                            'gender' => $_POST['gender'],
                                            'ip_address' => $_POST['ip_address'],
                                            );


                        echo "<h3>Edited user:</h3></br>".
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