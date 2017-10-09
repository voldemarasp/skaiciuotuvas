function calc() {

	var vienas = parseInt(document.getElementById('vienas').value);
	var du = parseInt(document.getElementById('du').value);
	var trys = parseInt(document.getElementById('trys').value || 0);

 	var suma = (vienas * 2.54) + (du / 10 * 2);

	document.getElementById('result').innerHTML = suma;	

	if (suma > trys) {
		document.getElementById("result").style.color = "red";
		document.getElementById("ratas2").style.display = "none";
		document.getElementById("ratas1").style.display = "block";
	} else {
		document.getElementById("result").style.color = "green"; 
		document.getElementById("ratas1").style.display = "none";
		document.getElementById("ratas2").style.display = "block";
	}
}


function addrow() {

	var lentele = document.getElementById("lentele");
	var vienas = parseInt(document.getElementById('vienas').value);
	var du = parseInt(document.getElementById('du').value);
	var trys = parseInt(document.getElementById('trys').value || 0);
	var keturi = (vienas * 2.54) + (du / 10 * 2);

	/*table.innerHTML += "<tr><td>";*/
	var tr = lentele.insertRow(0);
	
	var td0 = tr.insertCell(0);
	var td1 = tr.insertCell(1);
	var td2 = tr.insertCell(2);
	var td3 = tr.insertCell(3);

	td0.innerHTML = vienas;
	td1.innerHTML = du;
	td2.innerHTML = trys;
	td3.innerHTML = keturi;

}