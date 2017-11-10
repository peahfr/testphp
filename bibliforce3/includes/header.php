<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titrepage; ?></title>
    <meta name="viewport" content="width=device-width;initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <script src="js/jquery-3.2.1.js"></script>
    
</head>
<body>
    <div class="container">
        <header class="header row">
            <div class="col-md-3 col-xs-6">
                <img src="images/logo.png" class="img-responsive" alt="Logo de l'association" id="logo"/>
            </div>
            <div class="col-md-9 col-xs-6">
               <h1 id="titre">BiblµForce </h1>
               <h2 id="titre2">Que la litterature soit avec toi !</h2>     
            </div>
        </header>
        <?php include "nav.php";
              include "database.php";
        ?>
        
        
        <main>
        
   
