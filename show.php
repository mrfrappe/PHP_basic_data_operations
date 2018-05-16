<?php
    echo "<h2>Show</h2>";
    $mydata = json_decode(file_get_contents("DATA.json"), true);
//    foreach ($mydata as $key => $val){
//        print_r($val);
//    }
    echo "<table><tr><th>id</th>";
    echo "<th>first_name</th>";
    echo "<th>last_name</th>";
    echo "<th>email</th>";
    echo "<th>gender</th>";
    echo "<th>ip_address</th></tr>";
    foreach ($mydata as $val) {
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
    echo "<p><a href='index.php'>Back</a></p>";
?>

<!--"id":2,"first_name":"Horst","last_name":"Duprey","email":"hduprey1@eventbrite.com","gender":"Male","ip_address":"170.206.190.138"},-->