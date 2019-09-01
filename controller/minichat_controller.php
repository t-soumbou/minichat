<?php
    
	include('common/connexion_bdd.php');
	
	include_once('modeles/minichat_modele.php');    
	
	$req = getAllChat($bdd);
	
	$lastPseudo = getLastPseudo($bdd);
	
	include_once('vues/minichat_vue.php');  