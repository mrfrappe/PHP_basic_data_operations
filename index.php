<?php
    $mydata = json_decode(file_get_contents("DATA.json"), true);
	echo "<h2>PHP Basic data operations</h2>";
    echo count($mydata) . " records in database";
    echo "<p><a href='create.php'>Create user</a></p>";
    echo "<p><a href='show.php'>Show users</a></p>";
    echo "<p><a href='search.php'>Search</a></p>";
?>