<?php

    include("../config.php") ;

    if(isset($_GET["action"])){
        switch ($_GET["action"]) {
          
            case "ajouter":
               $maRequete = "INSERT INTO `plantes` (`id`, `nom`, `description`,`prix`, `dateins`) VALUES (NULL, '".$_POST["nom"]."','".$_POST["description"]."','".$_POST["prix"]."', CURRENT_TIMESTAMP)" ;
                
              // echo "i égal 0.$maRequete";
                break;
            
             case "modifier":
                    $maRequete = "UPDATE `plantes` SET  `nom` = '".$_POST["nom"]."', 
                                                         `description` = '".$_POST["description"]."', 
                                                         `prix` = '".$_POST["prix"]."'
                                                         WHERE `plantes`.`id`=".$_GET["id"]; 
                     
                   // echo "i égal 0.$maRequete";
                     break;

                
               
            case "supprimer":
            

                $maRequete = "DELETE FROM `plantes` WHERE `plantes`.`id` =".$_GET["id"];
                break;
            default:
              // echo "i n'est ni égal à 2, ni à 1, ni à 0.";
        }

     $mysqli->query($maRequete) ; 


    }
        // redirection par defaut
    header("location: ".$dir_ws."admin/") ;
    


?>