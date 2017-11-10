<?php

$mdp = "A1bcdefgh";

// longueur du mot de passe
$longueur = strlen($mdp);



// variables pour compter les maj et les nbr
$nbMaj = 0; // ou $nbMaj = $nbNum = 0;
$nbNum = 0;

/* une chaine de caractères est un tableau */
for($i = 0; $i < $longueur; $i++)
{
    $caractere = $mdp[$i];
    // le caractère est il numerique ?
    if(is_numeric($caractere)){$nbNum++;}
    //le caractere est il une majuscule ?
    else if (strtoupper($caractere)== $caractere){$nbMaj++;}
}

//test cohérence mdp 8 caract dont 1 maj et 1 nbr)
if($longueur >= 8 && $nbMaj >= 1 && $nbNum >=1)
{
    echo'<p>Le mot de passe est conforme</p>';
}
else echo'<p>Mdp Bidon</p>';





/* Controle adresse mail */
$email = 'toto@tufu.fr';
// se termine par .fr
if(substr($email, -3) == '.fr')
{
    echo'<p>Adresse mail terminée par .fr</p>';
}
else echo'<p>Adresse mail ne se terminant pas par .fr</p>';
    
    
// presénce d'un @?
if(strpos($email, '@') !== false)
{
    echo'<p>Présence @ dans email</p>';
}

// vérification email

if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo '<p>Email valide</p>';
}
else echo '<p>Email Bidon!</p>';


// encodage MD
echo $mdp.'<br/>';
echo md5($mdp).'<br/>';

// encodage blowfish;
$hash =  password_hash($mdp, PASSWORD_DEFAULT);
echo $hash.'<br/>';

//verification
if(password_verify($mdp, $hash))
{
    echo '<p>MDP OK ma chéwiiiiiiie</p>';
}
else echo '<p>Mot de passe pas Ok du tout du tout du tout ma chéwiiiiiie</p>';
?>