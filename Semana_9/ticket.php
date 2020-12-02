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
    width: 1100px;       
    height: 990px;
    position: absolute;
    top:22%;
    left: 21%;           
    margin-top: -110px;
    margin-left: -100px;
    text-align: center;

    }

    textarea{
    height: 650px;
	  resize: none;
	  overflow: auto;
	  width: 990px;
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
    <textarea id= "ZZ" name="ZZ" readonly method="POST">
    <?php
      $ea = $_GET['CC'];
      print ($ea);
    ?>
    </textarea>
    <br> 
    <input type="button" value="Volver a comprar" name="backtienda" OnClick="location.href='https://tiendaphp.erickalexandera.repl.co/Semana_9/tienda.php'" >
    <br>
    <script src="carrito.js" language="javascript" type="text/javascript">
    </script></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
