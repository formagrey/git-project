<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/envoi-mix.css" />
		<title>Formulaire de contact</title>
	</head>
	<body>
		<form action="verification.php" method="POST">

			<div>
				<label for="nom">Nom :</label>
       			<input type="text" name='nom'/>
       		</div>
					<label for="prenom">Prénom :</label>
							<input type="text" name="prenom" />
					</div>
					<label for="adresse">Adresse :</label>
							<input type="text" name="adresse" />
					</div>
       		<div>
	       <label for="Mail">Mail :</label>
		      	<input type="email" name="email" />
			</div>
 		    <div>
  			    <label for="message">Message :</label>
  			    <textarea name="message"></textarea>
  			</div>

    			<div class="boutton">
		        <button type="submit">Envoyer</button>
		    </div>
		</form>

	</body>
</html>
