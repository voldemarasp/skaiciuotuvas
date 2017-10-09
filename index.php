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
			<div class="col">
				<button onclick="addrow()" class="btn-success">Prideti i lentele</button>
			</div>
			<div id="ratas1" class="col">
				<img src="images/1.png">
			</div>
			<div id="ratas2" class="col">
				<img src="images/2.gif">
			</div>
		</div>
		<div class="row">
			<div class="col">
<table class="table">
  <thead>
    <tr>
      <th>Ratlankio skersmuo coliais</th>
      <th>Padangos skersmuo milimetrais</th>
      <th>Arkos dydis</th>
      <th>Bendras CM</th>
    </tr>
  </thead>
  <tbody id="lentele">

  </tbody>
</table>
			</div>
		</div>
	</div>

</body>
</html>