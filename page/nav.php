<?php
 ob_start();?>
    <link rel="stylesheet" href="css/nav.css">

    <header>
        <div class="homebtn h" onclick="window.location = './'">
            Ludovic CASTIGLIA
        </div>

        
        <div class="burgeur h" onclick="wtf()" tabindex="1">
            <span class="burgerhaut"></span>
            <span class="burgermilleux"></span>
            <span class="burgerbas"></span>
        </div>
        <div id="mouse"></div>
        <div id="mouselerp"></div>

            <div class="thème h" onclick="thème()"></div>
            <div class="thème h" onclick="thème()"></div>

            <script src="js/j.js">
            </script>
    </header>

<?php 
    

$nav = ob_get_clean();
?>



