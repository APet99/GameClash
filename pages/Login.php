<?php session_start();
    $mysqli = new mysqli('localhost', 'root2', '123','GameClashDB' );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "../styles/loginStyle.css">
</head>
<body>
    <?php include "helpers/headerBar.php"; ?>
    <div class = "container">
        <div class = "row">
            <div class="col-6">
                    <div class ="card text-dark" style="text-decoration : none">
                        <div class = "card-block" id="form">
                            <h4>Sign In</h4>
                            <form method="post" action="../pages/Login.php">
                                <b>Username:</b> 
                                <input type="Text" name="username"><br><br>
                                <b>Password: </b>
                                <input type="Password" name="password"><br><br>
                                <input type="submit" value="Submit" name="Submit">
                                <button type="reset" value="Reset">Reset</button><br>
                            </form> 
                            <?php 
                                   if(isset($_POST['Submit'])){
                                       $username = $_POST['username'];
                                       $password = $_POST['password'];

                                       $result = mysqli_query($mysqli, "SELECT * FROM user where username= '$username'"); //might be an error here.
                                       while($row = mysqli_fetch_assoc($result)){
                                            if(password_verify($password, $row['password'])){
                                                $_SESSION['username'] = $row['username'];
                                                $_SESSION['password'] = $row['password'];
                                                $_SESSION['win'] = $row['win'];
                                                $_SESSION['loss'] = $row['loss'];
                                                header("location: ../pages/Home.php");
                                            }else{
                                                echo "<font color = 'red' ><p align='center'> Incorrect Username or Password</p>";
                                            }
                                        }
                                   }
                                ?>
                        </div>
                    </div>
            </div>
            <div class="col-6">
                    <div class ="card text-dark" style="text-decoration : none">
                        <div class = "card-block" id="FAQ">
                            <h4>Frequently Asked Questions</h4>
                            <ul>
                                <li>Q: What if I don't have an account? </br> A: <a href="../pages/SignUp.php">Create one</a> here.</li>
                                <li>Q: What do I do if I forgot my pasword? </br> A: Make a new account!</li>
                                <li>Q: Is my information safe?</br> A:Yup!</li>
                                <li>Q: Any other questions?</br> A: <a href="../pages/ContactUs.php">Contact Us</a>!</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html> 