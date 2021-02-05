<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/leaderboardsStyle.css">
    <link rel ="Stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    
    <title>Leaderboards</title>
</head>
<body>
    <div>
        <?php include "helpers/headerBar.php"; ?>
    </div>
    
    <table class = "table table-hover">
        <thead class = "thead-dark">
            <tr>
                <th style = "width: 5%" >Rank</th>
                <th style = "width: 20%" >Username</th>
                <th style = "width: 5%" >Win</th>
                <th style = "width: 5%" >Loss</th>
                <th style = "width: 5%" >Win %</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $mysqli = new mysqli('localhost', 'root2', '123','GameClashDB' );
            // $result = mysqli_query($mysqli, "SELECT * FROM `user` ORDER BY `win` DESC, `loss` ASC");
            $result = mysqli_query($mysqli, "SELECT * FROM `user` ORDER BY `win`/ (`win` + `loss`) DESC, `win` DESC");
            $count = 0;            
            while($row = mysqli_fetch_assoc($result)):

            ?>

            <tr>
                <th> <?= ++$count; ?> </th>
                <td> <?=  $row['username']; ?> </td>
                <td> <?=  $row['win']; ?> </td>
                <td> <?= $row['loss']; ?> </td>
                <td><?php
                if($row['win'] == 0 && $row['loss'] == 0 ){
                    echo "0.000%";
                }else{ ?>
                     <?= number_format($row['win'] / ($row['win'] + $row['loss']), 3). '%';
                } ?>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    <script>
        $(".table").dataTable();
    </script>
</body>
</html>