<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
 <body><center>
 <div class="loginbox">
 	<h1>login hier</h1>
 		<form action='#' method='POST'>
 			<p>Email</p>
 			<input type="text" name="login" placeholder="Entre Username">
 			<p>password</p>
 			<input type="password" name="password" placeholder="Entre password">
       <br>
       <button type="submit" name="connexion">connexion</button>
 			</div>
 		</form>
 </div>
 </center>
<?php
                $utilisateurs=array(
                    array('sall','awa' , 'mohamed'),
                    array('ndao', 'ibrahima' , 'ibou'),
                    array('diop', 'bamba', 'khadim') ,
                   
                );
                
                if (isset ($_POST['connexion']))
                {
                  extract($_POST);
                    $login=$_POST['login'];
                    $password=$_POST['password'];
                    $lp=false;
                    
                    
                    for($i=0; $i<3;$i++)
                    {
                      
                      
                        if($login==$utilisateurs[$i][1] &&  $password==$utilisateurs[$i][2])
                        {
                          $lp=true;

                      }
                    }
                       if($lp==true)
                            {
                              header("location:acceuil.php");
                             
                            }
                            else
                            {
                              echo"login ou mot de pass incorrect";
                            }
                          }
                ?>
 
   </body>
   </html>         
