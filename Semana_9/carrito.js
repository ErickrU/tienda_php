var t=0;
function data() {

    //dios sabe que lo intente
		var SrT = document.getElementById('PR');
		var vect = SrT.options[SrT.selectedIndex].text;
		var rTWW = SrT.options[SrT.selectedIndex].value;
		var L=document.getElementById('C0').value;
		var s1=parseFloat(L);
		var s3=parseFloat(rTWW);
		var TC =s1*s3;
		t = t + TC;
		document.getElementById("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n\n";
		document.getElementById('PGR').value=t;

	}
