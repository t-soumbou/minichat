<?php 
	include('../common/connexion_bdd.php');
	include_once('../modeles/minichat_modele.php');  
	
	if(isset($_POST['pseudo']) & isset($_POST['message']) & !empty($_POST['pseudo']) & !empty($_POST['message']))
		{					   
			$message = htmlspecialchars($_POST['message']);
			$pseudo = htmlspecialchars($_POST['pseudo']);
			insererChat($bdd, $message,$pseudo);			
		}
	header('Location: ../minichat.php');
	exit();		
?>				
		