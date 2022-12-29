<?php
require "./ConnectionMySQL.php" ;

if (isset($_POST['soumettre']))
{
    $note = (isset($_POST['note'])) ? $_POST['note'] : null;
    $coeff = (isset($_POST['coeff'])) ? $_POST['coeff'] : null;
    $prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : null;
    $nom = (isset($_POST['nom'])) ? $_POST['nom'] : null;
    $matiere = (isset($_POST['matiere'])) ? $_POST['matiere'] : null;
    $appreciation = (isset($_POST['appreciation'])) ? $_POST['appreciation'] : null;
    $datenote = (isset($_POST['date_eval'])) ? $_POST['date_eval'] : null;
    $id_eleve = (isset($_POST['id_eleve'])) ? $_POST['id_eleve'] : null;

}
if(!empty($note)&&!empty($coeff)&&!empty($prenom)&&!empty($nom)&&!empty($matiere)&&!empty($appreciation)&&!empty($datenote)&&!empty($id_eleve))
{

$connection = getConnection();
$statement = $connection->prepare("INSERT INTO notes(id_eleve,NOTE,COEFF,prenom,nom,MATIERE,APPRECIATION,DATE_EVAL) VALUES(:id_eleve,:note,:coeff,:prenom,:nom,:matiere,:appreciation,:date_eval)");

$statement->bindParam(':note', $note, PDO::PARAM_STR);
$statement->bindParam(':coeff', $coeff, PDO::PARAM_STR);
$statement->bindParam(':matiere', $matiere, PDO::PARAM_STR);
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->bindParam(':appreciation', $appreciation, PDO::PARAM_STR);
$statement->bindParam(':date_eval', $datenote, PDO::PARAM_STR);
$statement->bindParam(':id_eleve', $id_eleve, PDO::PARAM_STR);

$statement->execute() ;

echo '<script type="text/javascript">alert("Données enregistrées avec succès"); </script>'; 
header("location:/vues/note.php");
}


else
{
    echo '<script type="text/javascript">alert("Vous devez remplir tous les champs"); </script>';
    echo "$note";
    echo "<BR>";
    echo "$coeff";
    echo "<BR>";
    echo "$matiere";
    echo "<BR>";
    echo "$nom";
    echo "<BR>";
    echo "$prenom";
    echo "<BR>";
    echo "$appreciation";
    echo "<BR>";
    echo "$datenote";
    echo "<BR>";
    echo "$id_eleve";
}
