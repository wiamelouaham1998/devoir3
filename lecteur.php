<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
<section class="signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="POST">
					<?php
							if(isset($_SESSION["errorMessage"])){
						?>
						<div class="error-message"><?php echo $_SESSION["errorMessage"];?></div>
						<?php
							unset($_SESSION["errorMessage"]);
							}
						?>
					<legend><H1>Enregistrement d'un lecteur</H1></legend>
						<table>
					     <td> <tr><th> nom :</th> 
						 <th><input type="text" class="form-control" id="nom " name="nom " placeholder="nom" required></th></tr></td>
						 <td> <tr><th> prénom :</th>
						 <th>  <input type="text" class="form-control" id="prenom " name="prenom " placeholder="prenom" required></th></tr></td>
						 <td> <tr><th> ville :</th>
						 <th> <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required></th></tr></td>
						 <td> <tr><th>Address :</th>
						 <th><input type="text" class="form-control" name="address" id="inputAddress"  placeholder="address" required></th></tr></td>
					     <td> <tr><th> code postal :</th>
						 <th> <input type="text" class="form-control" name="code_postal" id="code_postal" required></th></tr></td>
					     <td><button type="submit" name="signup" class="btn btn-default button-sign">Enregitrer</button></td>
					    </table>
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>*