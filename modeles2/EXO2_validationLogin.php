<?php
require "./ConnectionMySQL.php" ;

if (isset($_POST['soumettre'])){
    $utilisateur = (isset($_POST['mail'])) ? $_POST['mail'] : null;
    $password = (isset($_POST['motDePasse'])) ? $_POST['motDePasse'] : null;
}

if(!empty($utilisateur)&&!empty($password))
{
    $hashDuMotDePasse = md5($password);
    $connection = getConnection();
    $sel=$connection->prepare("SELECT * FROM comptes WHERE mail=? AND motDePasse=?");
    $sel->execute(array($utilisateur,$hashDuMotDePasse));
    $tab=$sel->fetchAll();
     if(count($tab)>0){
        $_SESSION["id"]=ucfirst(strtolower($tab[0]["id_compte"]));
        $_SESSION["email"]=ucfirst(strtolower($tab[0]["mail"]));
        header("location:/vues/note.php");
          }
          else
          {
            $erreur="Mauvais login ou mot de passe!";
            header("location:/vues/Connexion.html");
          }
}
else
{
    echo '<script type="text/javascript">alert("Vous devez remplir tous les champs"); </script>';
}


