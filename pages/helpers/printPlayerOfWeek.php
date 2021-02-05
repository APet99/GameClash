<?php
session_start();
function printPlayerOfWeek(){
        $mysqli = new mysqli('localhost', 'root2', '123','GameClashDB' );
        if(!isset($_SESSION['username'])){ 
                $result = mysqli_query($mysqli, "SELECT * FROM `user` ORDER BY `win` DESC LIMIT 1");
                while($row = mysqli_fetch_assoc($result)){
                        $topUser = $row['username'];
                        $topWin = $row['win'];
                        $topLoss = $row['loss'];
                        $topJoin = $row['join_date'];
                }
                ?>
                <p><b>Username:</b> <?= $topUser ?> </p><br>
                <p><b>Overall Record:</b> <?= $topWin ?>-<?= $topLoss ?></p><br>
                <p><b>Join Date:</b> <?php echo date(' m/Y', $topJoin); ?></p><br>
        <?php
        }else{
                $name = $_SESSION['username'];
                if(isset($_POST['winbtn'])){
                        // $_SESSION['win']++;
                        // $wincount = $_SESSION['win'] + 1;
                        $rslt = mysqli_query($mysqli, "SELECT `win` FROM `user` WHERE `username` = '$name'");
                        while($row = mysqli_fetch_assoc($rslt)){
                                $wins = $row['win'] + 1;
                        }
                        $updated = mysqli_query($mysqli, "UPDATE `user` SET `win`= '$wins' WHERE `username`= '$name'");
                        $_SESSION['win'] = $wins;
                        echo "<script>window.location.href = '../pages/Home.php'</script>";
                }
                if(isset($_POST['lossbtn'])){
                        // $_SESSION['win']++;
                        // $wincount = $_SESSION['win'] + 1;
                        $rslt = mysqli_query($mysqli, "SELECT `loss` FROM `user` WHERE `username` = '$name'");
                        while($row = mysqli_fetch_assoc($rslt)){
                                $losses = $row['loss'] + 1;
                                mysqli_query($mysqli, "UPDATE `user` SET `loss`= '$losses' WHERE `username`= '$name'");
                                $_SESSION['loss'] = $losses;
                                echo "<script>window.location.href = '../pages/Home.php'</script>";
                        }
                }
                $dt = new DateTime( $_SESSION['join_date']); ?>
                <p><b>Username:</b> <?= $_SESSION['username'] ?></p><br>
                <p><b>Overall Record:</b> <?= $_SESSION['win'] ?>-<?= $_SESSION['loss'] ?></p><br>
                <p><b>Join Date:</b> <?php echo $dt->format( 'F Y' ); ?></p><br>
                <div id="myButtons">
                        <form method= "POST">
                                <button name='winbtn' value="true" class="btn btn-success btn-block" type = "submit">Win</button>
                                <button name='lossbtn' class="btn btn-danger btn-block" type = "submit">Loss</button>
                        </form>
                </div>
<?php
        }
}
?>