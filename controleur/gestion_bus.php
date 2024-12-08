<h2>Gestion des bus</h2>
<?php
require_once("vue/vue_insert_bus.php");
if (isset($_POST['Valider'])) {
    //insertion du bus dans la table ligne
    insertBus($_POST);
    echo "<br> Insertion reussi du Bus.";
}
require_once("vue/vue_select_bus.php");
?>