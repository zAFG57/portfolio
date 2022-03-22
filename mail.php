                                <!--        envois de mail           -->

                                <?php

if (isset($_POST['utilisateur']) && isset($_POST['message'])) {


            $destinataire = "ludovic.castiglia@outlook.fr";
            $mail = $_POST['utilisateur'];
            $header = "From:< $mail >\n";
            $header .= "Reply-To: $mail \n";
            $header .="Content-Type:text/html; charset=\"UTF-8\"";
            $object = "message qui vient de ton portfolio";
            $text = $_POST['message'];
            $message = "<p> $text </p>";
            ?>

            <script>r = 1;</script>
            <?php

            if (mail($destinataire, $object, $message, $header)) {
                ?>

                <script>envoie = 1;</script>

                <?php
            }else {
                echo "<div><h1>il y a une erreur, verifiez votre adresse email</h1></div>";
            }  
            $message = '';
            $mail = '';
            header("Location: " . "./");        
} else {        
    ?>

    <script>
    r = 0;
    u = <?=$_POST['utilisateur']?>;
    m = <?=$_POST['message']?>;
    </script>
    <?php
}


        
?>




                        <!--        fin envoi de mail           -->
