<h3>Liste des bus</h3>
<table border="1">
    <tr>
        <td>Id bus</td>
        <td>Matricule</td>
        <td>Marque</td>
        <td>Capacité</td>
        <td>Energie</td>
    </tr>
    <?php
    // Vérifie si $lesbus est un tableau avant de le parcourir
    if (is_array($lesbus) && count($lesbus) > 0) {
        foreach ($lesbus as $unbus) {
            echo "<tr>";
            echo "<td>" . $unbus['idbus'] . "</td>";
            echo "<td>" . $unbus['matricule'] . "</td>";
            echo "<td>" . $unbus['marque'] . "</td>";
            echo "<td>" . $unbus['capacite'] . "</td>";
            echo "<td>" . $unbus['energie'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Aucun bus disponible</td></tr>";
    }
    ?>
</table>