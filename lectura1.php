<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lecturas</title>
    <meta name="title" content="Fase de Diseño - Crear el Guión y la maquetación para un OVI en formato WEB con HTML5 y CSS3">
    <meta name="description" content="Descripción de la WEB">
    <link href="estructura.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <?php require 'header.php'; ?>
    </header>
    <div class="">
          <?php require 'menu.php'; ?>
    </div>
    <?php require 'banner.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <a class="twitter-timeline" data-lang="es" data-width="400" data-height="400" href="https://twitter.com/UniversidadUNAD?ref_src=twsrc%5Etfw">Tweets by UniversidadUNAD</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-sm-7">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Ventajas de la programación estructurada</h3><br></div>
              <div class="panel-body">
                <p>
                Ventajas de la programación estructurada comparada con el modelo anterior (hoy llamado despectivamente código espagueti).

                Los programas son más fáciles de entender, pueden ser leídos de forma secuencial y no hay necesidad de hacer engorrosos seguimientos en saltos de líneas (GOTO) dentro de los bloques de código para intentar entender la lógica.
                La estructura de los programas es clara, puesto que las instrucciones están más ligadas o relacionadas entre sí.
                Reducción del esfuerzo en las pruebas y depuración. El seguimiento de los fallos o errores del programa ("debugging") se facilita debido a su estructura más sencilla y comprensible, por lo que los errores se pueden detectar y corregir más fácilmente.
                Reducción de los costos de mantenimiento. Análogamente a la depuración, durante la fase de mantenimiento, modificar o extender los programas resulta más fácil.
                Los programas son más sencillos y más rápidos de confeccionar.
                Se incrementa el rendimiento de los programadores, comparado con la forma anterior que utiliza GOTO.</p>
              </div><br>
          </div>
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Programación estructurada de bajo nivel</h3><br></div>
              <div class="panel-body">
                <p>Un un bajo nivel, los programas estructurados con frecuencia están compuestos de simples estructuras de flujo de programa jerárquicas. Estas son secuencia, selección y repetición:

                "Secuencia" se refiere a una ejecución ordenada de instrucciones.
                En "selección", una de una serie de sentencias es ejecutada dependiendo del estado del programa. Esto es usualmente expresado con palabras clave como if..then..else..endif, switch, o case. En algunos lenguajes las palabras clave no se puede escribir textualmente, pero debe ser delimitada (stropped).
                En la "repetición" se ejecuta una sentencia hasta que el programa alcance un estado determinado, o las operaciones han sido aplicadas a cada elemento de una colección. Esto es usualmente expresado con palabras clave como while, repeat, for o do..until. A menudo se recomienda que cada bucle sólo debe tener un punto de entrada (y en la programación estructural original, también sólo un punto de salida, y pocos lenguajes refuerzan esto).

                Un lenguaje es descrito como estructurado en bloques cuando tiene una sintaxis para encerrar estructuras entre palabras clave tipo corchete, como una sentencia if..fi en ALGOL 68, o una sección de código entre corchetes BEGIN..END, como en PL/I - o la de llaves {...} de C y muchos otros lenguajes posteriores.</p>
              </div>
        </div>
        </div>

      </div>


    </div>


  <footer>
    <div class="col-sm-12 mt-5 bg-black">
        <?php require 'footer.php'; ?>
    </div>
  </footer>
  </body>
</html>
