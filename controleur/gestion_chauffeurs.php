<h2>Gestion des chauffeurs</h2>
<?php
require_once("vue/vue_insert_chauffeur.php");
if (isset($_POST['Valider'])) {
    //insertion du bus dans la table ligne
    insertchauffeur($_POST);
    echo "<br> Insertion réussie du chauffeur.";
}
require_once("vue/vue_select_chauffeur.php");
?>