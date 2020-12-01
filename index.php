<?php
session_start();
?>
<?php $dictionary = array("En"=>array(    'nom'=>'Nom',
                                    'mot'=>'Motivation',
                                    'dat'=>'Date de naissance',
                                    'sex'=>'Sexe',
                                    'lact'=>'Listes des activités disponibles',
                                    'nom'=>'Nom',
                                    'nbut'=>'Notre but:',
                                    'ren'=>'Réinitialiser',
                                    'val'=>'Valider',
                                    'act'=>'Activité',
                                    'ins'=>'INSCRIVEZ VOUS',
                                    'activite'=>'Choisir une activité',
                                    'lname_placeholder'=> ' Saisir votre prénom',
                                    'pace'=>'Prénom',
                                    'name_placeholder'=>' Saisir votre Nom',
                                    'acc' => 'Accueil',
                                    'insc' => "S'incrire",
                                    'crt' => 'Carte',
                                    'lois' => 'Loisirs pour les étudiants',
                                    'clé'=>'Saisissez la clé de recherche',
                                    'activ' => 'Activités',
                                    'respo' => 'Responsables',
                                    'nbi'=>"Nombre d'inscrit"),

                    "Fr"=>array(    'nom'=>'Name',
                                    'mot'=>'Motivation',
                                    'dat'=>' Date of birth',
                                    'ins'=>'LOG IN',
                                    'val'=>'Validate',
                                    'nbut'=>'Our goal',
                                    'lact'=>'List of available activities',
                                    'nom'=>'Name',
                                    'ren'=>'Reset',
                                    'sex'=>'Sex',
                                    'act'=>'Activity',
                                    'activite'=>'Choose an activity',
                                    'lname_placeholder'=>' Enter your First name',
                                    'pace'=>'Lastname',
                                    'name_placeholder'=>'Enter your name',
                                    'acc' => 'Homepage',
                                    'insc' => "Register",
                                    'crt' => 'Map',
                                    'lois'=>'Leisure for students',
                                    'clé'=>'Enter the Search Key',
                                    'activ' => 'Activity',
                                    'respo' => 'Manager',
                                    'nbi'=>"Number of registered"),
                   );
if(!isset($_SESSION["lang"]))
    $_SESSION["lang"] == "Fr";

$l = $_SESSION["lang"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
	<title>uqtr_loisirs</title>
    <meta value="authors" content="Jeremie Cyrille / Josué Lubaki / Niang Malick / Sarr Badara / Raissa Mbikayi"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
	<script src="jquery-3.4.1.js"></script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv0C3UMlUhyLlkv97wu6ZyvlbQM5SUpWI&callback=initMap"></script>
	<script src="anim.js"></script>
    <script src="site.js"></script>
</head>

<body>
	<header>
		<img alt="logo UQTR" src="https://www.uqtr.ca/images/logos/logo-uqtr.png"></img>
		<p><?php echo $dictionary[$l]['lois' ]?> !</p>
	</header>
	<div class="page">
		<section id="nav">
			<ul>
				<li><a href=#> <?php echo $dictionary[$l]['acc' ]?> </a></li>
				<li id="test"><a href=#> <?php echo $dictionary[$l]['insc' ]?> </a></li>
				<li id="mp"><a href=#> <?php echo $dictionary[$l]['crt' ]?> </a></li>
			</ul>
		</section>

		<section id="contenu">

			<h1 id="nbut"><?php echo $dictionary[$l]['nbut' ]?></h1>

			<p>Notre site propose aux étudiants désireux de réaliser une ou plusieurs activités de loisir de rejoindre les
				différentes activités proposées dans la liste suivante en 3 étapes:</p>
			<ul>
				<li> S'inscrire</li>
				<li> Choisir une ou plusieur activite</li>
				<li> Commencer les activite en groupe</li>
			</ul>
			<p>Les différentes activités des groupes sont sous la responsabilite de professionelles. Il s'agit de passionnés du domaine 
				qui vont feront découvrir des pans inédit de leurs loisirs préférés. Qu'attendez-vous...? Rejoignez-nous!</p>
			<div>
				<h2 id="lact"><?php echo $dictionary[$l]['lact' ]?></h2> 
				<div class="search">
                	<input name = "key" placeholder="<?php echo $dictionary[$l]['clé' ]?>" id="key" class="key">
                	<ul id="popup"></ul>
           		</div>
           </div>
			<table id="table" >
				<tr id="notRemove">
					<th onclick="Trier_order()">#</th>
					<th onclick="Trier_Manager()"><?php echo $dictionary[$l]['respo' ]?></th>
					<th onclick="Trier_Activity()"><?php echo $dictionary[$l]['activ' ]?></th>
					<th onclick="TrierNumofsub()"><?php echo $dictionary[$l]['nbi' ]?></th>
				</tr>
			</table><br>
			<button onclick="fill();" id="remplir">Remplir le Tableau</button>
			<button onclick="removeTable();" id="effacer">Effacer le Tableau</button>
            
           
	
		</section>
        
        
        
		<div id="formulaire">
			<form method="POST" action="serveur.php">
			<p id="ins"><?php echo $dictionary[$l]['ins']?></p>
            <p id="nom"><?php echo $dictionary[$l]['nom' ]?><input type="text"  size="50" id="name"  name="name" placeholder=" <?php echo $dictionary[$l]['name_placeholder' ]?>"> </p>
            <p id="pace"><?php echo $dictionary[$l]['pace' ]?><input type="text"  size="50" id="lname" name= "prenom" placeholder=" <?php echo $dictionary[$l]['lname_placeholder' ]?>"> </p>
			<p id="dat"><?php echo $dictionary[$l]['dat' ]?>  <input type="date" name="day" required> </p>
			<p id="sex"><?php echo $dictionary[$l]['sex' ]?> <input type="radio" name="sexe" value="homme" checked>Homme
            <input type="radio" name="sexe" value="genre">Femme </p>
			<p id="act"><?php echo $dictionary[$l]['act' ]?> :
				<select id="activite">
					<option value="champ_vide"><?php echo $dictionary[$l]['activite' ]?></option>
					<option value="Natation">Natation</option>
					<option value="Randonnée">Randonnée</option>
					<option value="Badminton">Badminton</option>
					<option value="Echec">Echec</option>
					<option value="Vélo">Vélo</option>
					<option value="Kayak">Kayak</option>
				</select>
			</p>
			<p id="mot"><?php echo $dictionary[$l]['mot']?> <input type="text" size="50"> </p>
			<p><input type="submit" id="val" value="<?php echo $dictionary[$l]['val' ]?>">
            <input type="reset" id="ren" value="<?php echo $dictionary[$l]['ren' ]?>"> </p>
			</form>
			<span id="after_verification"></span><br>
			<span id="after_verification_msg"></span>
		</div>
		<div id="map"></div>
        <form action="lang.php" method="GET">
            <input type=submit value="<?php echo  $_SESSION["lang"]?>"/>
        </form>
	</div>
	
</body>
</html>
