<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <div class="mainContainer">

        <a href="#" class="btnLogin">LOGIN</a>

        <h1>Welcome !</h1>
        <p>Welcome to the JOB portal app</p>

        <br>
        <button class="btn btn-warning">READ MORE >></button>

        <div class="registerContainer">
            <h2>get yourself registered for vacant places</h2>
            <br>
            <form method="post" action="register.php">
            <table>
                <tr>
                    <td colspan="2">
                        <input type="text" name="txtId" placeholder="ID *" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtFullName" placeholder="Full Name *" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="txtQualification" placeholder="Qualification *" class="form-control">
                    </td>
                </tr>
                 <tr>
                    <td>
                        <input type="text" name="txtEmail" placeholder="Email *" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="txtContact" placeholder="Contact *" class="form-control">
                    </td>
                </tr>
                 <tr>
                    <td>
                        <input type="text" name="txtReference" placeholder="Reference *" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="txtDescription" placeholder="Description *" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Register" class="btn btn-primary">
                    </td>
                </tr>
            </table>
            </form>
        </div>

    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
