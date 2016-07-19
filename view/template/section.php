	<section class="col-xs-12">
	<h2>
	<?php
	/*
		On inclue le fichier php correspondant a la valeur passé dans l'URL
	*/
	//si la clé page existe dans le tableau $_GET
	if(isset($_GET['page'])){
		include './template/pages/'.$_GET['page'].'.php';
	}else{
		include './template/pages/home.php';
	}
	?>
	</h2>
</section>
