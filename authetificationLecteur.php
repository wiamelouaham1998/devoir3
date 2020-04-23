<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController(); 
if (isset($_POST["signup"])) {
    
	$name =  $_POST["name"];
	$email =  $_POST["email"];
	$password =  $_POST["password"];
	$address =  $_POST["address"];
	$city =  $_POST["city"];
	$zip =  $_POST["zip"];
	


	$sql = $db_handle->runQuery("INSERT INTO `users`( `name`, `email`, `password`, `address`, `city`, `zip` ) VALUES ('{$name}' , '{$email}' , '{$password}' ,'{$address}' , '{$city}', '{$zip}')");
 
 	if ($sql) {
			
           header("Location: menu.php");
           exit();
 
	}

}
if (isset($_POST["login"])) {

        $email =  $_POST["email"] ;
        $password = $_POST["password"] ;

		$sql1 = $db_handle->runQuery("SELECT * FROM `users` WHERE `email`='{$email}' AND `password`= '{$password}' ");

        if ($sql1) {
			$_SESSION['email'] = $_POST["email"];
            header("Location: menu-login.php");
            exit();

        } else{
			header("Location: login.php");
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
				<form method="POST" action="login.php">
					<legend><H1>Authentification du lecteur</H1></legend>
						<table>
					     <td> <tr><th> nom :</th> 
						 <th><input type="text" class="form-control" id="nom " name="nom " placeholder="nom" required></th></tr></td>
					     <td> <tr><th> password :</th>
						 <th><input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password"></th></tr></td>
					     <td><button button type="submit" class="btn btn-default button-sign" name="login">Enregitrer</button></td>
					    </table>
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>