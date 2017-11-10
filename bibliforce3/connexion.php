<?php

/* connexion.php */
$titrepage = "BiblµForce - Connexion";
include 'includes/header.php';

?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<form method="post" action="login.php">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-3">
                <div class="form-login">
                <h4>Rebonjour !</h4>
                <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Email" name="email"/>
                </br>
                <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="Mot de passe" name="password" />
                </br>
                <div class="wrapper">
                        <input type="submit" name="btnSub">    
                        </input>

                </div>

            </div>
        </div>
    </div>
</form>


<?php
include 'includes/footer.php';

?>