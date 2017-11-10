<?php

/* login.php */

//bouton cliqué?
if(isset($_POST['btnSub']))
{

    //Mr Propre !!!!
    
    $safe = array_map('strip_tags', $_POST);

//email Valide ?
if(filter_var($safe['email'], FILTER_VALIDATE_EMAIL))
{



// include toolbox
include 'includes/toolbox.php';


// mot de passe conforme
if(verifPass($safe['password']))
{



//include database
include 'includes/database.php';


//preparation
$stmt = $dbh->prepare("SELECT id_abonne, nom, prenom, password
                       FROM abonnes
                       WHERE email = :email");




// parametres
$params = array(':email' => $safe['email']);


// execution
$stmt->execute($params);


//recuperation
$abonne = $stmt->fetch();
    
//pour le controle
print_r($abonne);
    
// controle validité mot de passe 
if(password_verify($safe['password'], $abonne['password']))
{
    echo 'Eureka !';
    //traitement si password reconnu
}
else echo'Mot de passe incorrect !';


// controle validité mot de passe

    
    
        } // fin verifPass
         else echo'Mauvais Mot de passe';
    } //fin verif email
    else echo'email bidon';
} //fin isset btn
 else echo'Et le formulaire ?';