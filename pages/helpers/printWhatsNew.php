<?php
function printWhatsNew(){
?>
        <?php
        $newList = file("helpers/whatsNew.txt");
        foreach(file("helpers/whatsNew.txt") as $newFeature){
            list($item) = explode(".. ", $newFeature);
        ?>
            <li><p> <?=$item ?> </p></li>
<?php
        }
}
?>