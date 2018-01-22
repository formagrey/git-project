<pre>
<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
?>
</pre>




<?php
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results now contains output from print_r
?>

<?php
echo 'Bonjour ' . htmlspecialchars($_POST["name"]) . '!';
?>

<?php
echo 'Bonjour ' . htmlspecialchars($_GET["name"]) . '!';
?>

<!-- Debut du formulaire -->
<form enctype="multipart/form-data" action="./upload.php" method="post">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Envoyer le fichier :</label>
                <input name="fichier" type="file" />
                <input type="submit" name="submit" value="Uploader" />
            </p>
    </fieldset>
</form>
<!-- Fin du formulaire -->
