<?php
	include('./database.php');
	include('./query.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Introdução ao docker</title>
	<style type="text/css">
		h1 {
			color: deepskyblue;
			text-align: center;
			font-family: sans-serif;
		}
		div.tech {
			color: #444;
			margin: 5px auto;
			box-shadow: 0 0 5px lightgray;
			padding: 5px;
		}
		div.erro {
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>

<h1>Hello Docker</h1>

<h2>O DockerHub possui diversas imagens docker, como por exemplo:</h2>

<?php
	if( $erro ){
		echo '<div class="erro">'.$erro.'</div>';
	} elseif ( $techs ) {
		foreach ($techs as $key => $tech) {
			echo '<div class="tech">'.$tech['name'].'</div>';
		}
	}
?>

</body>
</html>