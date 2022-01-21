<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <input type="radio" id="clase1" name="tablas" checked>
    <input type="radio" id="clase2" name="tablas">
    <input type="radio" id="clase3" name="tablas">
    <input type="radio" id="clase4" name="tablas">
    <input type="radio" id="clase5" name="tablas">
    <input type="radio" id="clase6" name="tablas">
    <input type="radio" id="clase7" name="tablas">
    <input type="radio" id="clase8" name="tablas">
    <input type="radio" id="clase9" name="tablas">
    <input type="radio" id="clase10" name="tablas">
    <input type="radio" id="clase11" name="tablas">

    <div class="contenido-inventario">

        <!--slide vertical-->
        <div class="slide">
            <button role="button" id="up" class="up"><img src="jpg/up.png" alt="">
            </button>
            <div class="slide_clases">
          

                    <div class="clases1">
                        <label for="clase1"><figure><img src="jpg/todo.png" alt="">
                            <h2>All</h2>
                        </figure>
                 
                        </label>
                    </div>
                    
          
               
                <div class="clases2">
                    <label for="clase2"><figure><img src="jpg/mineria.png" alt=""><h3>Mineria</h3></figure></label>
                </div>
                <div class="clases3">
                    <label for="clase3"><figure><img src="jpg/seguro.png" alt=""><h4>Dotaciones</h4></figure></label>
                </div>
                <div class="clases4">
                    <label for="clase4"><figure><img src="jpg/materiales eletricos.png" alt=""><h4>Materiales <br> Eletricos</h4></figure></label>
                </div>
                <div class="clases5">
                    <label for="clase5"><figure><img src="jpg/tornillos.png" alt=""><h4>Tornilleria</h4></figure></label>
                </div>
                <div class="clases6">
                    <label for="clase6"><figure><img src="jpg/lubricantes.png" alt=""><h4>Lubricantes</h4></figure></label>
                </div>
                <div for="clases7">
                    <label for="clase7"><figure><img src="jpg/tuberia.png" alt=""><h5>Tuberia <br> y <br> PVC</h5></figure></label>
                </div>
                <div class="clases8">
                    <label for="clase8"><figure><img src="jpg/ladrillo.png" alt=""><h6>Construcción </h6></figure></label>
                </div>
                <div class="clases9">
                    <label for="clase9"><figure><img src="jpg/banos.png" alt=""><h4>Sanitarios</h4></figure></label>
                </div>
                <div class="clases10">
                    <label for="clase10"><figure><img src="jpg/agricultura.png" alt=""><h4>Agricultura</h4></figure></label>
                </div>
                <div class="clase11">
                    <label for="clase11"><figure><img src="jpg/general.png" alt=""><h3>General</h3></figure></label>
                </div>
            </div>

            <button role="button" id="down" class="down"><img src="jpg/down.png" alt="">
            </button>

        </div>

<!-- tablas -->
        <div class="tabla1">
           
            <div class="menus">
               
                <div class="botones" >
                    
                    <div class="salir">
                 
                    <li><button alt="salir"><a href="/FerroGameza/proyecto%20php/registrar%20producto/#"><i class="fas fa-sign-in-alt"></i></a></button></li>
                    <li><a href="/FerroGameza/proyecto%20php/registrar%20producto/#"><h3>Salir</h3></li></a>
                    </div>
                   

                    <li><button><a href="/FerroGameza/proyecto%20php/registrar%20producto/#modal"><i class="fas fa-plus"></i></a> </button></li>
                  
                </div>


                <div class="buscar">
                      <input type="text" class="fas fa-search icon" placeholder="Buscar">
                      <a href="" class="boton"> <i class="fas fa-search icon"></i></a>
                   
                    
                   
                </div>    
                

            </div>

            <table class="datos">
                <thead>
                    <tr>
                       <th>Nombre</th>
                       <th>Clasificacion</th>
                       <th>Stock</th>
                       <th>Marca</th>
                       <th>Medida</th>
                       <th>Material</th>
                       <th>Precio</th>
                       <th></th>
      
                    </tr>
                </thead>
   
                <tbody>
                    <tr>
                       <td>Lavamanos Milano </td>
                       <td>Sanitario</td>
                       <td>15</td>
                       <td>Milano</td>
                       <td></td>
                       <td>Porcelana </td>
                       <td>80000</td>
                       <td><button><i class="fas fa-pen"></i></button></td>
                    </tr>
                    <tr>
                       <td>Lavamanos Milano </td>
                       <td>Sanitario</td>
                       <td>15</td>
                       <td>Milano</td>
                       <td></td>
                       <td>Porcelana </td>
                       <td>80000</td>
                       <td><button><i class="fas fa-pen"></i></button></td>
                    </tr>
                    <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
                     <tr>
                        <td>Lavamanos Milano </td>
                        <td>Sanitario</td>
                        <td>15</td>
                        <td>Milano</td>
                        <td></td>
                        <td>Porcelana </td>
                        <td>80000</td>
                        <td><button><i class="fas fa-pen"></i></button></td>
                     </tr>
               
   
                </tbody>
   
            </table>
      

          
        </div>
        <div class="tabla2">
           
        </div>
        <div class="tabla3">
            <div class="contenido"><img src="jpg/dotaciones 2.jpg " alt=""></div>
        </div>
        <div class="tabla4">
            <div class="contenido"><img src="jpg/materiales eletricos 2.jpg " alt=""></div>
        </div>
        <div class="tabla5">
            <div class="contenido"><img src="jpg/tornilleria 2.jpg " alt=""></div>
        </div>
        <div class="tabla6">
            <div class="contenido"><img src="jpg/lubricantes 2.jpg" alt=""></div>
        </div>
        <div class="tabla7">
            <div class="contenido"><img src="jpg/tuberias 2.jpg 2.jpg " alt=""></div>
        </div>
        <div class="tabla8">
            <div class="contenido"><img src="jpg/construccion 2.jpg " alt=""></div>
        </div>
        <div class="tabla9">
            <div class="contenido"><img src="jpg/sanitario.jpg" alt=""></div>
        </div>
        <div class="tabla10">
            <div class="contenido"><img src="jpg/agricultura 2.jpg " alt=""></div>
        </div>
        <div class="tabla11">
            <div class="contenido"><img src="jpg/general 2.jpg " alt=""></div>
        </div>







    </div>








    <script src="js.js"></script>


</body>

</html>