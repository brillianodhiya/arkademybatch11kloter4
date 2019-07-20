<script type="text/javascript">
	function mrBrulee(operasi, N, [nilai1,nilai2,nilai3]) {
		var angka = [];
		for (var i = 0; i < (N+1); i++) {
			angka = angka + i;
		}
		if (operasi.toUpperCase() == "SUM") {
			var totalSum = parseInt(angka[nilai1]) + parseInt(angka[nilai2]) + parseInt(angka[nilai3]);
			return totalSum.toString();
		}
		else if(operasi.toUpperCase() == "MUL") {
			var totalMul = parseInt(angka[nilai1]) * parseInt(angka[nilai2]) * parseInt(angka[nilai3]);
			return totalMul.toString();
		}
		else if(operasi.toUpperCase() == "SUB") {
			var totalSub = parseInt(angka[nilai1]) - parseInt(angka[nilai2]) - parseInt(angka[nilai3]);
			return totalSub.toString();
		}
		else if(operasi.toUpperCase() == "DIV") {
			var totalDiv = parseInt(angka[nilai1]) / parseInt(angka[nilai2]) / parseInt(angka[nilai3]);
			return totalDiv.toString();
		}
	}
	document.write(mrBrulee("SUM",20, [11,13,15]));
	document.write("<br>");
	document.write(mrBrulee("MUL",20, [12,15,17]));
	document.write("<br>");
	document.write(mrBrulee("SUB",20, [11,13,15]));
	document.write("<br>");
	document.write(mrBrulee("DIV",20, [12,13,15]));
</script>