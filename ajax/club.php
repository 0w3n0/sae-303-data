<?php
    if(isset($_POST['aff'])){
        $l = $_POST['aff'];
        $id = mysqli_connect("localhost", "owendonnars_ow", "mmitest2022", "owendonnars_tdajax");
	    $res = mysqli_query($id,"SELECT * FROM joueurs WHERE nom LIKE '$l%'");
        echo "<table>";
        while ($ligne=mysqli_fetch_assoc($res)){
            echo "<tr>";
            foreach($ligne as $valeur){
                echo "<td>$valeur</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    else if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $poste = $_POST['poste'];
        $id = mysqli_connect("localhost", "owendonnars_ow", "mmitest2022", "owendonnars_tdajax");
        if($res = mysqli_query($id,"INSERT INTO joueurs(nom,prenom,poste) VALUES('$nom','$prenom','$poste')")){
		    echo "insertion effectuée";
	    }
        
        else{
		    echo "l'insertion a échoué";
        }
    }
?>