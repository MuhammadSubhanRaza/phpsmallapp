
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
    
    <div class="loginContainer">
        <h3>SIGN IN</h3>
        <form method="post" action="loginConfig.php">
            <input type="text" name="username" class="form-control" placeholder="Username"/>
            <br>
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="LOGIN"/>
        </form>
    </div>

</body>
</html>

