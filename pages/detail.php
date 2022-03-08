<br><br>
        <h1>Détail des actualitées</h1>
    
<?php

    if (isset($_GET["id"])) {
        $rqActu = $mysqli->query("SELECT * FROM actu  WHERE  id  = '".$_GET['id']."'");
        //var_dump($rqActu);
        if ($rqActu->num_rows >0){
            $row = $rqActu->fetch_assoc();
            //"fetch_assoc" recupere une ligne du resultat sous forme de tableau
?>

    <h3><?php echo $row["Title"];?></h3>
    <h6><?php echo $row["Description"];?></h6>


<?php            
    }else{
            }
            # code...

        }else {
            echo'Actu introuvable !';
            # code...
    } //end if "id"



    ?>