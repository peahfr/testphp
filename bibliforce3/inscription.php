<?php
$titrepage = "BiblioForce - Bibliothèque Numérique en Torrent (F*** HADOPI)";
include "includes/header.php";


?>



<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5 style="text-align: center;">Tu peux t'inscrire GRATUITEMENT</h5>
				<h3 style="text-align: center;"> Ad vitam æternam</h3>
					<form class="" method="post" action="ajoutAbonne.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nom" id="name"  placeholder="Entrez votre nom"/>
								</div>
							</div>
                        </div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Prenom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="name"  placeholder="Entrez votre prenom"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Adresse</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adresse" id="name"  placeholder="Entrez votre adresse"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Code postal</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="codepostal" id="name"  placeholder="Code postal" maxlength="5"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Ville</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="ville" id="name"  placeholder="ville" maxlength="30"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Votre email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Entrez votre email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" minlength=6 placeholder="Entrez votre Mot de passe (6 caractères minimum)"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirmez votre mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmez votre Mot de passe"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Telephone :</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telephone" id="email"  placeholder="Votre telephone"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" href="" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" name="btnSub"></input>
						</div>
						
					</form>
		</div>
	</div>
</div>

<?php
include "includes/footer.php";
?>

