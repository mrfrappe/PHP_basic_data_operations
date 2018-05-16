<?php
    $mydata = json_decode(file_get_contents("DATA.json"), true);

    echo "<h2>Create</h2>";
    echo "<p><a href='index.php'>Back</a></p>";

    echo "<form method='post'><label>First name<input type='text' name='first_name' value=''></label></br>".
        "<label>Last name <input type='text' name='last_name' value=''></label></br>".
        "<label>Email <input type='text' name='email' value=''></label></br>".
        "<label>IP address <input type='text' name='ip_address' value=''></label></br>".
        "<label>Gender </label></br><label><input type='checkbox' name='gender' value='Male'>Male</label><label><input type='checkbox' name='gender' value='Female'></label>Female</br>".
        "<input type='submit' name='submit' value='Create'></form>";
    

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
                "<table><tr><th>id</th>".
                "<th>first_name</th>".
                "<th>last_name</th>".
                "<th>email</th>".
                "<th>gender</th>".
                "<th>ip_address</th></tr>".
                "<tr><td>" . $additionalUser['id'] . "</td><td>" . $additionalUser['first_name'] ."</td><td>" . $additionalUser['last_name'] . "</td><td>" . $additionalUser['email'] . "</td><td>" . $additionalUser['gender'] . "</td><td>" . $additionalUser['ip_address'] . "</td></tr></table>";
        } 
    }

?>
