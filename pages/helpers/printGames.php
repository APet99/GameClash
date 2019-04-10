<?php
function printGames(){
            $gameList = file("helpers/gamesList.txt");
            foreach(file("helpers/gamesList.txt") as $game){
                list($gameTitle, $gameDescription, $gameImage) = explode(", ", $game); ?>
            <div class = "col-md-6 col-lg-3">
                <a href ="#" class ="card text-dark" style="text-decoration : none">
                        <img src = "<?= $gameImage ?>", class = "card-img-top-img-fluid" height="150px" width = "auto"/>
                        <div class = "card-block">
                            <h4 class = "card-title"> <b><?= $gameTitle ?> </b> </h4>
                            <p> <?= $gameDescription ?> </p>
                        </div>
                </a>
            </div>
<?php
            }
}
?>