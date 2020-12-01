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
		<p>Loisirs pour les étudiants!</p>
	</header>
	<div class="page">
		<section id="nav">
			<ul>
				<li><a href=#> Accueil </a></li>
				<li id="test"><a href=#> S'inscrire </a></li>
				<li id="mp"><a href=#> carte </a></li>
			</ul>
		</section>

		<section id="contenu">

			<h1>Notre but:</h1>

			<p>Notre site propose aux étudiants désireux de réaliser une ou plusieurs activités de loisir de rejoindre les
				différentes activités proposées dans la liste suivante en 3 étapes:</p>
			<ul>
				<li> S'inscrire</li>
				<li> Choisir une ou plusieur activite</li>
				<li> Commencer les activite en groupe</li>
			</ul>
			<p>Les différentes activités des groupes sont sous la responsabilite de professionelles. Il s'agit de passionnés du domaine 
				qui vont feront découvrir des pans inédit de leurs loisirs préférés. Qu'attendez-vous...? Rejoignez-nous!</p>
			
			<h2>Liste des activités disponibles</h2> 
           
			<table id="table" >
				<tr id="notRemove">
					<th onclick="Trier_order()">#</th>
					<th onclick="Trier_Manager()">Responsable</th>
					<th onclick="Trier_Activity()">Activités</th>
					<th onclick="TrierNumofsub()">Nombre d'inscrit</th>
				</tr>
			</table><br>
			<button onclick="fill();" id="remplir">Remplir le Tableau</button>
			<button onclick="removeTable();" id="effacer">Effacer le Tableau</button>
            <br><br>
            <div class="search">
                <input name = "key" placeholder="Saisissez la clef de recherche" id="key" class="key">
                <ul id="popup"></ul>
            </div>
	
		</section>
		<div id="formulaire">
			<form method="POST" action="javascript:alert( 'Erreur Detecté!' );">
			<p>inscrivez vous</p>
			<p>Nom  <input type="text" size="50" class ="vide" value=""> </p>
			<p>Prenom  <input type="text" class ="vide" size="50"value=""> </p>
			<p>Date de naissance  <input type="date" required> </p>
			<p>Sexe <input type="radio" name="check" value="homme" checked>Homme <input type="radio" name="check" value="genre">Femme </p>
			<p>Activite :
				<select id="activite">
					<option value="champ_vide">Choisir une activité</option>
					<option value="Natation">Natation</option>
					<option value="Randonnée">Randonnée</option>
					<option value="Badminton">Badminton</option>
					<option value="Echec">Echec</option>
					<option value="Vélo">Vélo</option>
					<option value="Kayak">Kayak</option>
				</select>
			</p>
			<p>Motivation <input type="text" size="50"> </p>
			<p><input type="submit" value="valider"> <input type="reset" value="Réinitialiser"> </p>
			</form>
			<span id="after_verification"></span><br>
			<span id="after_verification_msg"></span>
		</div>
		<div id="map"></div>
	</div>
	
</body>
</html>
