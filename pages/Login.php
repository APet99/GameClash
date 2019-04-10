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
    <link rel = "stylesheet" href = "/styles/loginStyle.css">
</head>
<body>
    <?php include "/sections/headerBar.php"; ?>
    <div class= "inputFields">
        <h1>Sign In</h1>
        <form action="/action_page.php">
            Email: 
            <input type="Email" name="Email" value="Email">
            <br>
            Password: 
            <input type="Password" name="Password" value="Password">
            <br><br>
            <input type="submit" value="Submit">
            <button type="reset" value="Reset">Reset</button>
        </form> 
    </div>
    <div class= "FAQ">
        <h3>Frequently Asked Questions</h3>
        <ul>
            <li>Q: What do I do if I forgot my pasword? la la la lla la la la this is</br> A: Make a new account!</li>
            <li>Q: Quetion 2?</br> A: Answer 2!</li>
            <li>Q: Quetion 3?</br> A: Answer 3!</li>
            <li>Q: Quetion 4?</br> A: Answer 4!</li>
            <li>Q: Quetion 5?</br> A: Answer 5!</li>
        </ul>
    </div>
</body>
</html> 