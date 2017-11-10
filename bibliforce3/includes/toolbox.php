<?php

function verifPass($mdp)
{
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
    if($longueur >= 6 && $nbMaj >= 1 && $nbNum >=1)
    {
        return true;
    }
    else return false;
}

?>