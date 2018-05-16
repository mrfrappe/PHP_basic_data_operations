<?php
    echo "<h2>Create</h2>";
    echo "<p><a href='index.php'>Back</a></p>";
    $mydata = json_decode(file_get_contents("DATA.json"), true);
    echo "<form method='post'><label>First name<input type='text' name='first_name' value=''></label></br>";
    echo "<label>Last name <input type='text' name='last_name' value=''></label></br>";
    echo "<label>Email <input type='text' name='email' value=''></label></br>";
    echo "<label>IP address <input type='text' name='ip_address' value=''></label></br>";
    echo "<label>Gender </label></br><label><input type='checkbox' name='gender' value='Male'>Male</label><label><input type='checkbox' name='gender' value='Female'></label>Female</br>";
    echo "<input type='submit' name='submit' value='Create'></form>";
    
    $id = count($mydata)+1;
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $ip_address = $_POST['first_name'];
    echo "<h3>Created user:</h3></br>";
    echo "<table><tr><th>id</th>";
    echo "<th>first_name</th>";
    echo "<th>last_name</th>";
    echo "<th>email</th>";
    echo "<th>gender</th>";
    echo "<th>ip_address</th></tr>";
    echo "<tr><td>".$id."</td><td>".$firstname."</td><td>".$lastname."</td><td>".$email."</td><td>".$gender."</td><td>".$ip_address."</td></tr></table>";
?>
