<?php
require "../modeles2/ConnectionMySQL.php" ;
$connection = getConnection();
$data = $connection->query("SELECT * FROM notes")->fetchAll();
?>

<html>

    <head>
        <link rel="stylesheet" href="style3.css">
        <title>RevelezDeNote</title>
    </head>

    <body>
        <div class="form">
            <ul class = "menu">
                <li>
                    <a href ="ModifierNote.html">AJOUTER une note</a>
                </li>
            </ul>
        </div>
        <center>
            <div>
                <BR>
                <BR>
                <BR>
                <BR>
                <table>
                    <tr>
                        <th>
                            id_eleve
                        </th>
                        <th>
                            Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                            Matiere
                        </th>
                        <th>
                            Note
                        </th>
                        <th>
                            Coefficient
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Appreciation
                        </th>
                    </tr>
                    <?php
                    foreach ($data as $row) {
                    ?>
                    <tr>
                        <td>
                            <?php
                                echo $row['id_eleve']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['prenom']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['nom']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['MATIERE']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['NOTE']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['COEFF']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['id_eleve']."<br />\n";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['APPRECIATION']."<br />\n";
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table> 
            </div>
        </center>
    </body>
    
</html>