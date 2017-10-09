function calc() {

	var vienas = parseInt(document.getElementById('vienas').value);
	var du = parseInt(document.getElementById('du').value);
	var trys = parseInt(document.getElementById('trys').value || 0);

 	var suma = (vienas * 2.54) + (du / 10 * 2);

	document.getElementById('result').innerHTML = suma;	

	if (suma > trys) {
		document.getElementById("result").style.color = "red"; 
	} else {
		document.getElementById("result").style.color = "green"; 
	}
}