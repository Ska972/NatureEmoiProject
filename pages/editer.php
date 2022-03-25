<?php

$nom = "";
$description = "";
$prix = "";
$title = "Ajouter";
$lienCrud ="crud.php?action=ajouter";


if(isset($_GET['mod']) && isset($_GET['id'])){
    $title="Modifier";
    $lienCrud="crud.php?action=modifier&id=".$_GET['id'] ;


        $rqPlante = $mysqli->query("SELECT * FROM `plantes` WHERE id = '".$_GET['id']. "'") ;
 
         // var_dump($rqPlante) ;
 
         if ($rqPlante->num_rows > 0) {
             
             $row = $rqPlante->fetch_assoc() ;
            $nom = $row['nom'];
            $description = $row['description'];
            $prix = $row['prix'];
         }


        }

?>

<div class="text"><?php echo $title?></div>
<form action="<?php echo $lienCrud ?>" method="post">
    <label for="">Nom de la Plante</label>
<input type="text" name="nom" value="<?php echo $nom ;?>" id="">
    <label for="">Description</label>
<input type="text" name="description" value= "<?php echo $description ?>"id="">
    <label for="">Prix</label>
<input type="text" name="prix" value= "<?php echo $prix ?>"id="">
<input type="submit" class= "button-3  "value="Ajoutez">

</form>

