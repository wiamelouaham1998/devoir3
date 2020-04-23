<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController(); 
if (isset($_POST["signup"])) {
    
	$nomAuteur =  $_POST["nomAuteur"];
	$prenomAuteur =  $_POST["prenomAuteur"];
	$titre =  $_POST["titre"];
	$categorie =  $_POST["categorie"];
	$code_postal =  $_POST["code_postal"];
	


	$sql = $db_handle->runQuery("INSERT INTO `livres`( `nomAuteur`, `prenomAuteur`, `titre`, `categorie`, `numeroISBN` ) VALUES ('{$nom}' , '{$prenom}' , '{$password}' ,'{$address}' , '{$code_postal}')");
 
 	if ($sql) {
			
           header("Location: livre.php");
           exit();
 
	}

}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
<section class="signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="POST" action="livreValidation.php">
					<legend><H1>Enregistrement d'un livre</H1></legend>
						<table>
					     <td> <tr><th> Nom de l'auteur:</th> 
						 <th><input type="text" class="form-control" id="nomAuteur" name="nomAuteur" placeholder="nomAuteur" required></th></tr></td>
						 <td> <tr><th> Prénom de l' auteur:</th>
						 <th>  <input type="text" class="form-control" id="prenomAuteur" name="prenomAuteur" placeholder="prenomAuteur" required></th></tr></td>
						 <td> <tr><th> titre :</th>
						 <th> <input type="text" class="form-control" id="titre" name="titre" placeholder="titre" required></th></tr></td>
						 <td> <tr><th>Catégorie :</th>
						 <th><select name='categorie' class='form-control' required>
			                      <option value>Roman</option>
			                      <option value='1'>Roman</option>
			                      <option value='2'>Autre</option>
		                     </select></th></tr></td>
					     <td> <tr><th> Numéro ISBN :</th>
						 <th> <input type="text" class="form-control" name="numeroISBN" id="numeroISBN"  placeholder="numero" required></th></tr></td>
					     <td><button type="submit" name="signup" class="btn btn-default button-sign">Enregitrer</button></td>
					    </table>
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>