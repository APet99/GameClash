<?php 
//session details. THIS is what add's the user information to the DB oif it is valid.
session_start();
include 'helpers/dbh.inc.php';
$mysqli = new mysqli('localhost', 'root2', '123','GameClashDB' );

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"]) ){
        if($_POST['password'] == $_POST['password2'] ){
            $username = $_POST['username']; 
            $email = $_POST['email']; 
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

            $username = strip_tags(mysqli_real_escape_string($conn, trim($username)));
            $email = strip_tags(mysqli_real_escape_string($conn, trim($email)));

            $sql = "INSERT INTO `GameClashDB`.`user` (`id`, `username`, `email`, `password`, `win`, `loss`, `join_date`) VALUES ('' , '$username', '$email', '$password', '0', '0', CURRENT_TIMESTAMP);";
            if($mysqli->query($sql)== true){
                $_SESSTION['username'] = $_POST['username'];
                $_SESSTION['message'] = "Registration Successful";
                header("location: ../pages/Login.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "../styles/signUpStyle.css">
</head>
<body>
    <?php include "helpers/headerBar.php"; ?>
    <div class = "container" id="overall">
        <div class = "row">
            <div class="col-6">
                <div class ="card text-dark" style="text-decoration : none">
                    <div class = "card-block" id="form">
                        <form method= "POST" action="../pages/SignUp.php" name="register">
                            <div class="container" id="inner">
                                <h1>Register</h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>

                                <label for="username"><b>Username</b></label>
                                <input type="text" placeholder="JohnDoe79" pattern="[a-z|A-Z|0-9]{4,14}" title="Username must be atleast 4 characters, alphanumeric and no more than 14 characters." name="username" required>

                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b" name="email" title="Enter a valid email." required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$" title="Minimum six characters, at least one uppercase letter, one lowercase letter and one number." name="password" required>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$" title="Minimum six characters, at least one uppercase letter, one lowercase letter and one number." name="password2" required>
                                <hr>

                                <button type="submit" class="registerbtn">Register</button>
                            </div>
                            
                            <div class="container signin">
                                <p>Already have an account? <a href="../pages/Login.php">Sign in</a>.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 