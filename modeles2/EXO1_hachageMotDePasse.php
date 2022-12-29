<?php
require "./ConnectionMySQL.php" ;

if (isset($_POST['soumettre']))
{
    $password = (isset($_POST['motDePasse'])) ? $_POST['motDePasse'] : null;
    $mail = (isset($_POST['mail'])) ? $_POST['mail'] : null;
    $prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : null;
    $nom = (isset($_POST['nom'])) ? $_POST['nom'] : null;
    $telephone = (isset($_POST['telephone'])) ? $_POST['telephone'] : null;
    $NUMEN = (isset($_POST['NUMEN'])) ? $_POST['NUMEN'] : null;

    if(!empty($password)&&!empty($mail))
    {
        $hashDuMotDePasse = md5($password);
        $connection = getConnection();
        $statement = $connection->prepare("INSERT INTO comptes(motDePasse,mail,prenom,nom,telephone,NUMEN) VALUES(:motDePasse,:mail,:prenom,:nom,:telephone,:NUMEN)");

        $statement->bindParam(':motDePasse', $hashDuMotDePasse, PDO::PARAM_STR);
        $statement->bindParam(':mail', $mail, PDO::PARAM_STR);
        $statement->bindParam(':telephone', $telephone, PDO::PARAM_INT);
        $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
        $statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $statement->bindParam(':NUMEN', $NUMEN, PDO::PARAM_STR);

        $statement->execute() ;

        echo '<script type="text/javascript">alert("Données enregistrées avec succès"); </script>'; 
        header("location:/vues/Connexion.html");
    }


    else
    {
        echo '<script type="text/javascript">alert("Vous devez remplir tous les champs"); </script>';
    }
}
?>

