<nav class="col-xs-12" >
	<ul class="flexbox">
		<?php
			/*
			chercher dans le dossier : template/pages tous mes fichiers php
			on va recuperer de manière recursive les nom des fichiers
			on va fabriquer les balises en affectant pour chaque balise la valeur
			correspondant au nom du fichiers
			$sortie = '<li><a href="./index.php?page='.$nomdufichier.'">'.$nomdufichier.'</a></li>';
			*/
		$repertoirePages = opendir('../view');
		if($repertoirePages){
			while(false !== ($fichier = readdir($repertoirePages))){
				$nomdufichier = substr($fichier,0,strpos($fichier,'.php'));
				//si il y a bien un nom de fichier
				if(!empty($nomdufichier)){
					//On fabrique notre lien de page
					$sortie = '<li><a href="./app.php?view='.$nomdufichier.'">'.$nomdufichier.'</a></li>';
					echo $sortie;
				}
			}
		}else{
			echo 'erreur dans le dossier';
		}
		closedir($repertoirePages);
		?>
	</ul>
</nav>
