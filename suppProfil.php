<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>

<?php

$id = $_POST['id'];
$mabd = connexionBD();
$req = "DELETE FROM Usagers WHERE id_usager LIKE '%" . $_SESSION['id_usager'] . "%'";
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer votre compte '.$id.'</h2>';
header("refresh:2;url=formInscription.php");
exit;
?>

</body>
</html>
