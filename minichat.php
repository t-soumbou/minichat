<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>MiniChat</title>
</head>
<body>
	<div class="bloc_page">
		<?php 
			include 'controller/minichat_controller.php';
		?>
			<div class="">
			  <?php
				while($data = $req->fetch())
				{
					sscanf($data['date_post'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);			
					?>
					  <p> <?php echo ''.$jour , ' / ' , $mois , ' / ' , $annee , ' ' , $heure , ':' , $minute; ?> &nbsp; <strong> <?php echo htmlspecialchars($data['pseudo']);?> : </strong>  &nbsp; <?php echo htmlspecialchars($data['message']);?><br/></p>
					<?php
				} 
				  $req->closeCursor();          
			  ?>
			</div>  
		
	</div>     
</body>
</html>
