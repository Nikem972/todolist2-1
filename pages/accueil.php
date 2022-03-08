  <br>
  <?php

      //SELECT * FROM `actu` ORDER BY `actu`.`id` ASC
      $resultQueryActu= $mysqli->query("SELECT * FROM `actu` ORDER BY `id` DESC ");
      //var_dump($resultQueryActu);

      //verif numb_rows > 0
      if($resultQueryActu->num_rows >0){
        foreach($resultQueryActu as $rowActu ){
  ?>
    <p>
      <span class="titre substr"> <?php echo $rowActu["Title"] ?></span>
      <a href="<?php echo $dir_ws."index.php?mod=detail&id=".$rowActu["id"]?>">detail</a>
    </p>
  <?php
    } // en foreach
      }else{
  ?>
      pas d'actu 
  <?php
      }
  ?>
  






