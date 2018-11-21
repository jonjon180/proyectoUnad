<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>UNAD</title>
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
            <div class="col-sm-3 col-sm-offset-0 mr-2 mt-2 bg-secundary">
              <section>
                  <article>
                    <div class="articulo ">

                    <a class="twitter-timeline" data-lang="es" data-width="400" data-height="400" href="https://twitter.com/UniversidadUNAD?ref_src=twsrc%5Etfw">Tweets by UniversidadUNAD</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>

                  </article>
              </section>
            </div>
            <div class="col-sm-8 mr-1 mt-2 bg-secundary">
              <h5> Ficha Técnica del Curso </h5>
              <div class="row">
                <div class="col-sm-4">

                  <ul class="text-left">
                      <li type="square">Intrioducción a la programación</li>
                      <li type="square">Programación estructurada</li>
                      <li type="square">programación orientada a objetos</li>
                      <li type="square">Diseño de web 1</li>
                </ul>
                      </div>
                      <div class="col-sm-4">


                      <ul class="text-rigth">
                        <li type="square">Introducción a base de datos</li>
                        <li type="square">Modelo entidad-relacion</li>
                        <li type="square">Documentación y Técnicas de Prueba de Software</li>
                        <li type="square">Programación web 2</li>
                      </ul>
                        </div>
              </div>



              <aside>
              <div class="tableaside">
                <table>
                  <tr>
                    <td colspan="6" class="text-center"><h3>Introducción al Desarrollo de Software</h3></td>
                  </tr>

                  <tr>
                    <td><b>Código Curso</b></td>
                    <td><b>Breve Descripción de la Temática General</b></td>
                    <td><b>Subtemas Relevantes Asociados de la Temática General</b></td>
                  </tr>

                  <tr>
                    <td>204017</td>
                    <td>Identificar las etapas necesarias para el desarrollo de cualquier software</td>
                    <td>Análisis y especificaciones de requerimientos, modelos</td>
                  </tr>

                </table>
              </div>
              </aside>
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
