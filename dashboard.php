
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginstyles.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <?php
    
        $server = "localhost";
        $userName = "root";
        $password = "admin123";
        $databaseName = "smallappdb";

        $conn = mysqli_connect($server,$userName,$password,$databaseName);

        if($conn->connect_error)
        {
            die("Some error occured");
        }

        $sql = "SELECT * FROM registration";

        $result = mysqli_query($conn,$sql);

        $count=mysqli_num_rows($result);
        

    ?>
<br>
        <a href="loginpge.php" class="btn btn-warning">LOGOUT</a>
<br><br>
    <div class="mainContainer">
        <h3>ALL REGISTRATIONS</h3>
        <br><br>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Qualification</th>
                <th>Email</th>
                <th>Reference</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php
                    if($count>0){
                         while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo '<td>'.$row["regID"].'</td>';
                            echo '<td>'.$row["regName"].'</td>';
                            echo '<td>'.$row["regQualification"].'</td>';
                            echo '<td>'.$row["regEmail"].'</td>';
                            echo '<td>'.$row["regREference"].'</td>';
                            echo '<td>'.$row["regDescription"].'</td>';
                            echo "</tr>";
                        }    
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

