<?php header('Content-Type: text/html; charset=utf-8');?><!DOCTYPE HTML>
<html>
<head>
	<title><?=$t;?></title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="js/ace.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-1.10.0.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="<?=$p;?>">
	<div class="pure-g">
	
		<header class="principal">
			<a href="index.php">Personal Online Editor</a>
		</header>

		<?php include "views/$p.php"; ?>
		
		<footer class="footer">
			Powered by <a href="http://www.pmedia.no/off/">OneFileFramework</a>.
		</footer>

	</div>
		
</body>
</html>