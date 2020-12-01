<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ticket de compra</title>


    <style type="text/css">

    body {
    background-color: rgba(207, 207, 207, 0.822);
    }

    div {
    border: 3px solid black;
    font: oblique bold 180% cursive;
    margin-top: 30px;
    background: rgba(207, 207, 207, 0.822);
    width: 600px;       
    height: 1000px;
    position: absolute;
    top:22%;
    left: 35%;           
    margin-top: -100px;
    margin-left: -100px;
    text-align: center;

    }

    textarea{
    height: 650px;
	  resize: none;
	  overflow: auto;
	  width: 400px;
    font: oblique bold 80% cursive;
    }

  </style>

  </head>
  <body>
    
    <div>Detalles de la compra
    <p><br>OXXO<br>
    <?php
      echo date('d/m/Y');
      echo ('<br>');
      $hora = new DateTime("now", new DateTimeZone('America/Mexico_City'));
      echo $hora->format('h:i:s A');
    ?>
    <br><br>
    <textarea id= "CC" name="CC" readonly="" onchange="data()" onclick="data(this)">
    <?php
    $ea=$_POST['CC'];
    if (isset($ea[$i])){
      echo($ea);}
    ?>
     
    </textarea>
    <br>
    
    <input type="button" value="Volver a comprar" name="backtienda" OnClick="location.href='https://tiendaphp.erickalexandera.repl.co/Semana_8/tienda.php'" >
    <br>
    <input type="button" name="CC" value="Generar Ticket" onchange="data()" onclick="data(this)"
    onchange="dos()" onclick="dos(this)">



    <script src="carrito.js" language="javascript" type="text/javascript">
    function data(){

        var t=0;
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
    </script>   
   
    
    </div>
    
    
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

  

</html>
