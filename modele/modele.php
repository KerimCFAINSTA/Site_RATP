<?php
/*
    dans ce fichier, on réalise toutes les fonctions de 
    connexion à la BDD, deconnexion de la BDD et exécution de 
    l'ensemble des requetes sur les tables de la BDD:
    insert,delete,updtae,<select name="" id="" class=""></select>
    */
function connexion()
{
    $connexion = mysqli_connect("localhost", "root", "", "ratp_284");
    if ($connexion == null) {
        echo "Erreur de connexion au serveur Mysql.";
    }
    return $connexion;
}
function deconnexion($connexion)
{
    mysqli_close($connexion);
}
/****************** Gestion des lignes ******/
function insertligne($tab)
{
    $requete = "insert into ligne values (null,'"
        . $tab['description'] . "','"
        . $tab['stationdebut'] . "','"
        . $tab['stationFin'] . "','"
        . $tab['nbStations'] . "');";

    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllLignes()
{
    $requete = "select * from ligne; ";
    $con = connexion();
    $lesLignes = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesLignes;
}
function deleteLigne ($idligne){
    $requete ="delete from Ligne where idligne=".$idligne;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
    
}
function updateLigne ($tab){
    $requete="update ligne set description="
    .$tab['description']+"' , stationDebut="
    .$tab['stationDebut']+"', stationFin="
    .$tab['stationFin']+"' , nbstations="
    .$tab['nbstations']+"' , where idligne="
    .$tab['idligne'];
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données


}
function selectwhereLigne ($idligne){
    $requete= "select * from ligne where idligne=".$idligne;
    $con = connexion(); 
    $resultats = mysqli_query($con, $requete); 
    $lesLignes = mysqli_fetch_assoc($resultats); 
    deconnexion($con); 
    return $lesLignes ;
    
}
/******************* Gestion des bus ******/
function insertBus($tab)
{
    $requete = "insert into bus values (null,'"
        . $tab['matricule'] . "','"
        . $tab['marque'] . "','"
        . $tab['capacite'] . "','"
        . $tab['energie'] . "');";

    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllbus()
{
    $requete = "select * from bus; ";
    $con = connexion();
    $lesbus = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesbus;

}

/******************* Gestion Chauffeur ******/
function insertchauffeur($tab)
{
    $requete = "insert into chauffeur values (null,'"
        . $tab['nom'] . "','"
        . $tab['prenom'] . "','"
        . $tab['email'] . "','"
        . $tab['mdp'] . "','"
        . $tab['adresse'] . "');";

    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllchauffeur()
{
}
