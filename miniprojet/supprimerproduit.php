<!DOCTYPE html>
<html>
        <head>
        <Title>Ajouter</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <div class="container">
         <header>
         <h1 class="text-center">Supprimer un produit</h1>
         </header>
         <form  action="" method="POST">
         
  <div class="form-group">
    <input type="text"  name="np" class="form-control" id="np" placeholder="A modifier">
    </div>
      
    <div class="form-group">
      <input type="number"  name="pu" class="form-control" id="pu" placeholder="Enter prix unitaire">
    </div>

  
  <div class="form-group">
   
    <input type="number"  name="quantite" class="form-control" id="qt" placeholder="A modifier">
  </div>
  
  <button type="submit" name="supprimer" class="btn btn-primary">Supprimer</button>
  
  </div>
</form>
<div class="container">
<?php
$produit=array(
    array('Lait' ,1500, 2, 3000),
    array('Farine' , 300 , 6, 1800),
    array('Mil' , 200, 9, 1800) ,
    array('Riz' , 500, 10, 5000) ,
    array('Blé' , 600, 10, 6000) ,
    array('Savon' , 350, 10, 3500) ,
    array('Madar' , 800, 10, 8000) ,
    array('sucre' , 600, 10, 6000) ,
    array('Beurre' , 800, 10, 8000) ,
    array('Chocolat' , 1000, 7, 7000) ,

   
);
if (isset ($_POST['supprimer']))
{
    
    $ndp=$_POST['np'];
    $put=$_POST['pu'];
    $qt=$_POST['quantite'];
    $n=10;
    $montant=$put*$qt;
    $t=false;
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
    for($i=0; $i<$n;$i++)//recherche
    {
        if($ndp==$produit[$i][0]){
            $t=true;
            $indice=$i;
            
        }
    }
    if($t==true){
        
      unset($produit[$indice]);
      for($i=0; $i<$n;$i++){
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

      }
          echo '</tr>';
      }
      else
      {
        echo 'ce produit nexiste pas';
      }  
    }
  
   
           
          
        
            ?>
            </div>
            </body>
           </html>