<!DOCTYPE html>
<html>
        <head>
        <Title>Produit</Title> 
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
       
        <div class="container">
         <header>
         <h1 class="text-center">Liste des produits</h1>
         </header>
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
          
          echo '<tr>';
          if($produit[$i][2]<10) 
          {
            for($j=0; $j<4;$j++)
            {
                echo '<td class="bg-danger">' .$produit[$i][$j]. '</td>';
            }
        }
        else{
            for($j=0; $j<4;$j++)
          {
              echo '<td>' .$produit[$i][$j]. '</td>';
          }
        }
          
          
          echo "</tr>";
      }
      
        
        ?>  
        </div>


        
    </body>
</html>
