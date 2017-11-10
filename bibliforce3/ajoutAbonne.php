<?php

// ajoutAbonne.php


$titrepage = "BiblµForce - Inscription";
include "includes/header.php";
//boite à outils pour verifier le mot de pass
include "includes/toolbox.php";

// Securité
if(isset($_POST['btnSub']))
{
    
    
    
//Mr propre
$safe = array_map('strip_tags', $_POST);

//Verifier format email

if(filter_var($safe['email'], FILTER_VALIDATE_EMAIL))

{
    
//verifier format mot de passe
if(verifPass($safe['password']))
    
{
    //verifier si l'email n'est déjà dans la table
    $stmt2 = $dbh->prepare("SELECT COUNT(*)
                            FROM abonnes
                            WHERE email = :email");
    
    //paramètres
    $params2 = array(':email' => $safe['email']);
    
    
    //execution
    $stmt2->execute($params2);
    
    //recuperation
    $exists = $stmt2->fetchColumn();
    
    // si email absent
    
    if($exists == 0)
    {
    
    
    
    /* -------------------- */
    
    
    
    //preparation requete
    $stmt = $dbh->prepare("INSERT INTO abonnes(nom, prenom, adresse, code_postal, ville, email, password, telephone)
                           VALUES(:nom, :prenom, :adresse, :cp, :ville, :email, :password, :telephone)");
    
    // Hashade mot de passe
    $hash = password_hash($safe['password'], PASSWORD_DEFAULT);


    // parametres
    $params = array(':nom' => $safe['nom'],
                    ':prenom' => $safe['prenom'],
                    ':adresse' => $safe['adresse'],
                    ':cp' => $safe['codepostal'],
                    ':ville' => $safe['ville'],
                    ':email' => $safe['email'],
                    ':password' => $hash,
                    ':telephone' => $safe['telephone']
                    );
                   
                   

    // execution
    if($stmt->execute($params))
    {
        //c'est ok!
        echo '<div class="alert alert-succes">
                Merci pour votre inscription !
              </div>';
        
        
    } // fin execute 
     else echo '<div class="alert alert-danger">Ouuuuups</div>';
    } // fin du email absent
     else echo'<div class="alert alert-danger">Adresse email déjà présente</div>';
   } // fin test mdp
    else echo '<div class="alert alert-danger">Mot de passe non conforme !</div>';
  } // fin test email
   else echo '<div class="alert alert-danger">Email non valide</div>';
}  // fin test bouton
 else echo '<div class="alert alert-danger">Il faut passer par le formulaire</div>';

include "includes/footer.php";

?>