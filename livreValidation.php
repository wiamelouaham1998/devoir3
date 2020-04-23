<?php

session_start();

if (empty($_SESSION['nom'])) {
	header('Location: livre.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation d'un Livre</title>
</head>

<body>
    <h3>
        Validation d'un Livre
    </h3>
    <table class="table">
        <tbody>
            <tr>
                <td scope="row">Nom de l'Auteur</td>
                <td>
                    
                   <?php echo $_SESSION['nomAuteur']; ?>
                    
                </td>
            </tr>
            <tr>
                <td scope="row">prenom de l'Auteur</td>
                <td>
                   
                    <?php echo $_SESSION['prenomAuteur']; ?>
                    
                </td>
            </tr>
            <tr>
                <td scope="row">titre</td>
                <td>
                    
                    <?php echo $_SESSION['titre']; ?>
                    
                </td>
            </tr>
            <tr>
                <td scope="row">categorie</td>
                <td>
                    <?php echo $_SESSION['categorie']; ?>
                </td>
            </tr>
            <tr>
                <td scope="row">ISBN</td>
                <td>
                    <?php echo $_SESSION['numeroISBN']; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
?>