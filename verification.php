<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultat</title>
  </head>
  <body>
    <p>bonjour <?php echo $_POST['nom'] .' '. $_POST['prenom'];?></p>
  </body>
</html>


<?php
/*if (empty($_POST["nom"]))
{
echo "erreur Nom";
}
  else if(empty($_POST["prenom"])){
    echo "erreur prenom";
  }
  else if(empty($_POST["adresse"])){
    echo "erreur adresse";
  }
  else if(empty($_POST["email"])){
    echo "erreur email";
  }
  else if(empty($_POST["message"])){
    echo "erreur message";
  }
  */

  $formulaire = array (
    "nom" => $_POST['nom'],
    "prenom" => $_POST['prenom'],
    "adresse" => $_POST['adresse'],
    "email" => $_POST['email'],
    "message" => $_POST['message']
  );

  foreach ($formulaire as $key => $value) {
    if($value == ""){
      echo $key .' '. 'erreur<br>';
    }else{
      echo $key .' '.'ok<br>';
    }

  }

?>
