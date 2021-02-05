<?php
      session_start();
      include "helpers/printWhatsNew.php";
      include "helpers/printPlayerOfWeek.php";
?>
        <div class="row">
            <!-- Left Box -->
            <div class="col-3">
                <h3>What's New?</h3>
                <div class ="card text-dark" style="text-decoration : none">
                    <div class = "card-block">
                        <ul>
                            <?php
                            print printWhatsNew();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Middle Video Box -->
            <div class="col-6">
                <h3>Featured Game:</h3>
                <div class ="card text-dark" style="text-decoration : none">
                        <div class = "card-block">
                            <!-- This is where the video goes -->
                            <div class="embed-responsive embed-responsive-16by9" id="video">
                                <iframe class="embed-responsive-item" id="video" src="https://www.youtube.com/embed/cejHV76rc68"></iframe>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Right Box -->
            <div class="col-3">
                <?php 
                if(isset($_SESSION['username'])){?>
                    <h3>Profile:</h3>
                <?php }else{ ?>
                    <h3>Top Player:</h3>
                <?php } ?>
                
                <div class ="card text-dark" style="text-decoration : none">
                        <div class = "card-block">
                            <ul>
                                <?php
                                printPlayerOfWeek();
                                ?>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>