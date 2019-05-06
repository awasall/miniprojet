<!DOCTYPE html>
<html>
        <head>
        <Title>Ajouter</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <div class="container">
         <header>
         <h1 class="text-center">Ajouter un produit</h1>
         </header>
         <form  action="" method="POST">
   <div class="col-9">
      <input type="text"  name="np" class="form-control" id="np" placeholder="saisir un produit">
    </div>
      
    
    <div class="col-9">
      <input type="number"  name="pu" class="form-control" id="pu" placeholder="Enter prix unitaire">
    </div>

  
  <div class="col-9">
    
    <input type="number"  name="quantite" class="form-control" id="qt" placeholder="saisir quantite">
  </div>
  
  <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
  </div>
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
if (isset ($_POST['ajouter']))
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
 for($i=0; $i<$n+1;$i++)//recherche
            {
              if( strcasecmp($ndp,$produit[$i][0]) ==0){
                    $t=true;
                }
            }
            if($t==true){
                echo 'ce produit exist deja';
            }
            else{
                $produit[]=array($ndp,$put,$qt,$montant);
                $n++;
                for($i=0; $i<$n;$i++){
                  echo '<tr>';
                if($produit[$i][2]<10) 
              {
              for($j=0; $j<4;$j++)
                {
                echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
                }
              }else{
                    for($j=0; $j<4;$j++)
                    {
                      echo '<td>' .$produit[$i][$j]. '</td>';
                    }
                  }
                    echo '</tr>';
                }
            }
}  
            ?>
            </div>
            </body>
            </html>