<div class="text">Lister</div>

<?php 

$resultQueryPlante = $mysqli->query("SELECT * FROM `plantes` ORDER BY `id` DESC") ;

?>

<table class="styled-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>prix</th>
            
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    <?php 
    
    if($resultQueryPlante->num_rows >0) {

        // boucle sur $resultQueryPlante
  
        foreach($resultQueryPlante as $rowPlante) {
    
    ?>
        <tr>
            <td><?php echo $rowPlante['nom']?></td>
            <td><?php echo $rowPlante['description']?></td>
            <td><?php echo $rowPlante['prix']?></td>
            <td> 
                <a href="index.php?mod=modifier&id=<?php echo $rowPlante['id']?>"><i class='bx bxs-edit sizeIconXL'></i></a></td> 
            <td>
                <a href="crud.php?action=supprimer&id=<?php echo $rowPlante['id']?>"><i class='bx bx-trash sizeIconXL'></i></a>
            </td>
        </tr>
    

        <?php



            }


                }

        ?>
        <!-- <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
        </tr>
         and so on... -->
    </tbody>
</table>

