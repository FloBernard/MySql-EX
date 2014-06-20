<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulaire</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
		<h1 class="centerform">TD1 : Formulaire HTML</h1>
		<div class="centerform">
			<form method="POST" action="valid.php">
				<label class="sr-only" for="first_name">Nom :</label><input type="text" name="nom" placeholder="Nom"/><br><br>
				<label class="sr-only" for="last_name">Prénom :</label><input type="text" name="prenom" placeholder="Prénom"/><br><br>
				<input type="submit" class="btn btn-success" value="Enregistrer"/>
			</form>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
