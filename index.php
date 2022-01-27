<?php session_start();
        if(!isset($_GET['t']) && !isset($_SESSION['tème'])) {
            $_SESSION['tème'] = 'n';
        } elseif (isset($_GET['t']) && htmlspecialchars($_GET['t']) === 'n') {
            $_SESSION['tème'] = 'n';
            echo '<script>window.location = "./"</script>';
        } elseif (isset($_GET['t']) && htmlspecialchars($_GET['t']) === 'j'){
            $_SESSION['tème'] = 'j';
            echo '<script>window.location = "./"</script>';
        }
        if (isset($_SESSION['tème']) && $_SESSION['tème'] == 'n') {
            ob_start();?>
            <link rel="stylesheet" href="css/thèmesombre.css">
            <script>t=false</script>
            <?php $css = ob_get_clean();
        } elseif(isset($_SESSION['tème']) && $_SESSION['tème'] == 'j') {
            ob_start();?>
            <link rel="stylesheet" href="css/thèmeclaire.css">
            <script>t=true</script>
    <?php $css = ob_get_clean();
        }?>
<?php include_once('page/nav.php'); ?>
<?php include_once('page/home.php'); ?>
<?php include_once('page/contact.php'); ?>
<?php include_once('page/projet.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludovic CASTIGLIA</title>
</head>
<body class="body" id="body" onload="load();">
    



<?php
        
        if(isset($home) && isset($contact) && isset($projet) && isset($nav)) {
            echo $nav;
            echo $home;
            echo $contact;
            echo $projet;
        } else {
            echo 'vas te faire enculer hackeur de merde';
        }
            
    ?>
    <?php
        echo $css;
        ?>




</body>
</html>