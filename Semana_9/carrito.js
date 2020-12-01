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
    //let  ticketr += ["Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n"];
		document.getElementById("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
		document.getElementById('PGR').value=t;
    

    localStorage.setItem(ticketr);
    document.getElementById("CC").value += ticketr;
    document.getElementById("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
    document.getElementsByName("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
    document.getElementByName("CC").value += "Cantidad:"+cantidad+"\tProducto:"+seleccion+"\tTotal: "+ " $"+totalC + "\n";

	}

var t=0;
function dos(){

    var SrT = document.getElementById('PR');
		var vect = SrT.options[SrT.selectedIndex].text;
		var rTWW = SrT.options[SrT.selectedIndex].value;
		var L=document.getElementById('C0').value;
		var s1=parseFloat(L);
		var s3=parseFloat(rTWW);
		var TC =s1*s3;
		t = t + TC;
    //let  ticketr += ["Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n"];
		document.getElementById("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
		document.getElementById('PGR').value=t;
    
    //document.write(ticketr);
    document.getElementById("CC").value += ticketr;
    document.getElementById("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
    document.getElementsByName("CC").value += "Cantidad "+L+"\tProducto "+vect+"\tTotal  "+ " $"+TC + "\n";
    document.getElementById("CC").value += L + vect + TC + "\n";
    document.getElementsByTagName("CC").value += L + vect + TC + "\n";
    document.getElementByName("CC").value += "Cantidad:"+cantidad+"\tProducto:"+seleccion+"\tTotal: "+ " $"+totalC + "\n";
}
