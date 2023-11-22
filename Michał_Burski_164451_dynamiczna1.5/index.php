 <!DOCTYPE html>
 <?php
 include('cfg.php')
 ?>
 <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
		$strona = 'html/Glowna.html';
		
        if($_GET['idp'] == '') $strona = 'html/Glowna.html';
        if($_GET['idp'] == 'drapiezniki') $strona = 'html/Drapiezniki.html';
        if($_GET['idp'] == 'roslinozercy') $strona = 'html/Roslinozercy.html';
		if($_GET['idp'] == 'kontakt') $strona = 'html/Kontakt.html';
    ?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="pl" />
		<meta name="Author" content="Michał Burski" />
		<script src="kolorujtlo.js" type="text/javascript"></script>
		<script src="timedate.js" type="text/javascript"></script>
		<title>Moje hobby to Zwierzęta Afryki</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>

				
	<body>

		<div id="wrapper">
			<header>
				<img id="gora"src="img/sawanna.jpg" alt="sawanna - header"/>
			</header>
			<nav>
				<a class="menu active" href="index.php?idp=">Strona głowna</a>
				<a class="menu" href="index.php?idp=drapiezniki">Drapieżniki</a>
				<a class="menu" href="index.php?idp=roslinozercy">Roślinożercy</a>
				<a class="menu" href="index.php?idp=kontakt">Kontakt</a>


			</nav>

			<section>
				<article>
				<?php
				if (file_exists($strona)){
		 		include($strona);
				}
				?>
				</article>
			</section>

		</div>
		

        <?
        $nr_indeksu = '1234567';
        $nrGrupy = 'X';
        echo 'Autor: Michał Burski' .$nr_indeksu. 'ISI 1' .$nrGrupy.' <br /><br />';
        ?>
	</body>
</html> 