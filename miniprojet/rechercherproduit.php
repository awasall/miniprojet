<!DOCTYPE html>
<html>
        <head>
        <Title>Rechercherproduit</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <div class="container">
         <header>
         <h1>Recherche de produit</h1>
         </header>
         
         <form class="form-inline" action="" method="POST">
         
  <div class="form-group">
    
   
    <input type="number"  name="quantite" class="form-control" id="quantite" placeholder="Enter un seuil de quantité">
    <input type="number"  name="pmin" class="form-control" id="pmin" placeholder="Enter prix minimum">
    <input type="number"  name="pmax" class="form-control" id="pmax" placeholder="Enter prix maximum">
  <button type="submit" name="rechercher" class="btn btn-primary">Rechercher</button>

  </div>
  </div>
</form>

<div class="container">
<?php
$produit=array(
            array('Lait' ,1500, 2, 3000),
            array('Farine' , 300 , 6, 1800),
            array('Mil' , 200, 9, 1800) ,
            array('Riz' , 500, 11, 5500) ,
            array('Blé' , 600, 10, 6000) ,
            array('Savon' , 350, 10, 3500) ,
            array('Madar' , 800, 10, 8000) ,
            array('sucre' , 600, 10, 6000) ,
            array('Beurre' , 800, 10, 8000) ,
            array('Chocolat' , 1000, 7, 7000) ,

           
        );
        if (isset ($_POST['rechercher']))
        {
            $qt=$_POST['quantite'];
            $min=$_POST['pmin'];
            $max=$_POST['pmax'];
            echo'<table class="table">
            <tr>
            <thead class="thead-dark">
            <th scope="col">NOM</th>
            <th scope="col">Prix Unitaire</th>
            <th scope="col">Quantité</th>
            <th scope="col">Montant</th>
            </tr>
            </thead>
            ';   
            for($i=0; $i<10;$i++)
            {
                if ((!empty ($_POST['quantite'])) and (empty ($_POST['pmin'])) and (empty ($_POST['pmax']))){
               if($qt<=$produit[$i][2]) 
               {
                echo '<tr>';
                if($produit[$i][2]<10) {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                    }
                  }else
                  {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td>' .$produit[$i][$j]. '</td>';
                    }
                  }
                echo "</tr>";
               }
            }
            else if ((!empty ($_POST['pmin'])) and (empty ($_POST['quantite'])) and (empty ($_POST['pmax']))){
                if($min<$produit[$i][1]){
                echo '<tr>';
                if($produit[$i][2]<10) {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                    }
                  }else
                  {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td>' .$produit[$i][$j]. '</td>';
                    }
                  }
                echo "</tr>";

               }
            }
            else if ((!empty ($_POST['pmax'])) and (empty ($_POST['pmin'])) and (empty ($_POST['quantite']))){

               if($max>$produit[$i][1]){
                echo '<tr>';
                if($produit[$i][2]<10) {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                    }
                  }else
                  {
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td>' .$produit[$i][$j]. '</td>';
                    }
                  }
                echo "</tr>";

               }
            }
            else if( (!empty ($_POST['pmin'])) and (!empty ($_POST['pmax'])) and (empty ($_POST['quantite']))){
                if($min<$max){
                    if($min<$produit[$i][1] && $max>$produit[$i][1]){
                   
                        echo '<tr>';
                        if($produit[$i][2]<10) {
                            for($j=0; $j<4;$j++)
                            {
                              echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                            }
                          }else
                          {
                            for($j=0; $j<4;$j++)
                            {
                              echo '<td>' .$produit[$i][$j]. '</td>';
                            }
                          }
                        echo "</tr>";
        
                       }
                      

                }
                else{
                    echo"le prix minimum ne doit pas dépassé le prix maximum";
                }

               
            }
            
        else if( (!empty ($_POST['quantite'])) and (!empty ($_POST['pmin'])) and (!empty ($_POST['pmax']))){
               
            if ($qt<=$produit[$i][2] && ( $min<$produit[$i][1] && $max>$produit[$i][1])){
               echo '<tr>';
               if($produit[$i][2]<10) {
                for($j=0; $j<4;$j++)
                {
                  echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                }
              }else
              {
                for($j=0; $j<4;$j++)
                {
                  echo '<td>' .$produit[$i][$j]. '</td>';
                }
              }
                echo "</tr>";

               }
            }

                 

            }
        }
                
                        
		
        
        
            ?>
            </div>
           </body>
   </html>         
