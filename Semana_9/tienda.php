<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tienda</title>

    <script src="carrito.js" language="javascript" type="text/javascript"></script>
    <style type="text/css">

    body {
    background-color: rgba(207, 207, 207, 0.822);
    }
    H1{
        text-align: center;
    }
    form {
    border: 1px solid black;
    width: 1000px;
    font: oblique bold 120% cursive;
    margin-top: 90px;
    }

    textarea{
    height: 350px;
	  resize: none;
	  overflow: auto;
	  width: 900px;
    font: oblique bold 120% cursive;
    }

  </style>

  </head>
  <body>
    <h1>Bienevenido a la tienda :)</h1>
    <form class="formulario">
		<p><label>Cantidad   <input type="number" min="0" max='10' id="C0"></label></p>
		<p><label>Producto </label>
		<select id="PR">
			<option disabled selected>Seleciona un producto</option>
			<option id="snacks" value="20">Donas - 20</option>
			<option id="papas" value="15">Sabritas - 30</option>
			<option id="coca"   value="20">Coca cola - 20</option>
			<option id="galletas" value="12">Galletas maria - 12</option>
			<option id="tortas" value="10">Tortas de tamal - 10</option>
			<option id="Hotdog" value="30">Hot dog - 30</option>
			<option id="chetos" value="13">chetos verdes - 13</option>
			<option id="helador" value="60">Helado holanda - 60</option>
			</select>
		<input type="button" name="insertar" value="Insertar" onclick="data(this)" onchange="data()"></p>
    
		<p><label>Carrito</label><br>
		<textarea id="CC" name="CC" readonly=""></textarea>
		<p><label></br>Total a pagar</label>
        <input type="number" id="PGR" readonly="" placeholder="0.0"></label></p>
        <input type="reset" name="nuevacompra" value="Nueva compra" id="botonNueva" >
        <input type="button" value="pagar" name="nueva compra" OnClick="location.href='https://tiendaphp.erickalexandera.repl.co/Semana_8/ticket.php'">
        
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
