

<?php

    $userName = $_POST["username"];
    $password = $_POST["password"];

    
        $server = "localhost";
        $userNameDB = "root";
        $passwordDB = "admin123";
        $databaseName = "smallappdb";

        $conn = mysqli_connect($server,$userNameDB,$passwordDB,$databaseName);

        if($conn->connect_error)
        {
            die("Some error occured");
        }

        $sql = "SELECT * FROM login WHERE userName = '$userName' and password='$password'";

        $result = mysqli_query($conn,$sql);

        $count=mysqli_num_rows($result);

        if($count>0)
        {
            echo 'Authenticated';
        }
        else
        {
            echo 'Unauthenticated';
        }

?>

