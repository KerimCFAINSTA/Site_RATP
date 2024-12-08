<h3> Liste des lignes</h3>

<table border="1">
    <tr>
        <td> Id ligne</td>
        <td> Description </td>
        <td> Station Début </td>
        <td> Station Fin </td>
        <td>Nb Station</td>
        <td>Opérations</td>
    </tr>
    <?php
    foreach ($lesLignes as $uneLigne) {
        echo "<tr>";
        echo "<td>" . $uneLigne['idligne'] . "</td>";
        echo "<td>" . $uneLigne['description'] . "</td>";
        echo "<td>" . $uneLigne['stationDebut'] . "</td>";
        echo "<td>" . $uneLigne['stationFin'] . "</td>";
        echo "<td>" . $uneLigne['nbStations'] . "</td>";
        echo  "<td>";
        echo "<a
             href='index.php?page=2&action=sup&idligne=".
             $uneLigne['idligne']."'><img src='images/sup.png' heigth='50' width='50'></a>";
             echo "<a
             href='index.php?page=2&action=edit&idligne=".
             $uneLigne['idligne']."'><img src='images/edit.jpg' heigth='50' width='50'></a>";

        echo "</td>";     
        echo "</tr>";
    }
    ?>
</table>