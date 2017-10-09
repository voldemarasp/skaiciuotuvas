<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script.js"></script>
	<title>Skaiciuotuvas</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<label>Ratlankio skersmuo coliais</label>
				<input onkeyup="calc()" type="text" id="vienas">
				
				<label>Padangos skersmuo milimetrais</label>
				<input onkeyup="calc()" type="text" id="du">
				
				<label>Arkos dydis</label>
				<input onkeyup="calc()" type="text" id="trys">
				
			</div>
			<div id="result" class="col">
				none
			</div>
		</div>
	</div>

</body>
</html>