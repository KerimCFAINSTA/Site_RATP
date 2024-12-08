 <?php
require_once("modele/modele.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Ratp</title>
</head>

<body>
    <center>
        <h1> Gestion des affectations de Bus à la Ratp</h1>
        <a href="index.php?page=1">
            <img src="images/20211228035137!RATP.svg" height="100" width="100"> </a>
        <a href="index.php?page=2">
            <img src="images/lignes.webp" height="100" width="100"></a>
        <a href="index.php?page=3">
            <img src="images/480px-Bus-logo.svg.png" height="100" width="100"> </a>
        <a href="index.php?page=4">
            <img src="images/chauffeur.png" height="100" width="100"> </a>
        <a href="index.php?page=5">
            <img src="images/3454843.png" height="100" width="100"> </a>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        switch ($page) {
            case 1:
                require_once("controleur/home.php");
                break;
            case 2:
                require_once("controleur/gestion_lignes.php");
                break;
            case 3:
                require_once("controleur/gestion_bus.php");
                break;
            case 4:
                require_once("controleur/gestion_chauffeurs.php");
                break;
            case 5:
                require_once("controleur/gestion_affectations.php");
                break;
        }
        ?>
    </center>
</body>

</html>