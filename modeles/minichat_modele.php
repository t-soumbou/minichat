<?php 
		
	function getAllChat($bdd)
	{
		$req = $bdd->query('SELECT * FROM chat ORDER BY date_post DESC');
		return $req;
	}

	function insererChat($bdd, $message, $pseudo)
	{
		$sql = "INSERT INTO chat (message, date_post,pseudo) VALUES ( '" .$message ."', NOW(), '" .$pseudo ."')";
		$bdd->exec($sql);
	}

	function getLastPseudo($bdd)
	{
		$req = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0,1');
		$donnees = $req->fetch();
		return $donnees['pseudo'];

	}

?>

		

		