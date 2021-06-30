<?php include("server.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">

            <h2>Register</h2>


        </div>
        <form action="registration.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>


            <div>
                <label for="email">Email</label>
                <input type="text" name="email" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="text" name="password_1" required>
            </div>

            <div>
                <label for="password">Confirm Password</label>
                <input type="text" name="password_2" required>
            </div>

            <Button type="submit" name="reg_user">Submit</Button>

            <p> Already a user <a href="login.php"><b>Log In </b></a></p>



        </form>


    </div>


</body>

</html>
