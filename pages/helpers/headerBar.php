<?php session_start(); ?>

<link rel = "stylesheet" href = "../styles/headerBarStyle.css">
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="../pages/Home.php"> Game Clash</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav d-flex flex-row">
        <li><a href="../pages/Home.php" id="webTitle">Game Clash</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="../pages/Games.php">Games</a></li>
        <li><a href="#">Ladder</a></li>
        <li><a href="../pages/Leaderboards.php">Leaderboards</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right flex-row">
      <?php
      if(isset($_SESSION["username"]) && $_SESSION['username'] != ''){?>
        <li><a>Welcome, <?= $_SESSION['username'] ?> </a></li>
        <li><a href = "../pages/helpers/logout.php">Logout</a></li>
      <?php 
      }else{ ?>
        <li><p class ="navbar-text" overflow="hidden">Already have an account?</p></li>
        <li><a href = "../pages/Login.php">Login</a></li><p> or </p>
        <li><a href = "../pages/SignUp.php">Sign Up</a></li>
      <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>