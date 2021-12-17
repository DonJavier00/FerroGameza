<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

  <header>
    <div class="cerrar">
      <i class="fas fa-door-open"></i>
      <a href="Login Ferreteria/index.html">Cerrar sesion</a>

    </div>
  </header>

  <div class="grande">
    <div class="contenedorGrande contenedor">


      <div class="contenedor-principal">
        <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

        <div class="contenedor-carousel">
          <div class="carousel">
            <div class="contenido1">
              <br>
              <h2>Gestionar Usuario</h2><br>
              <img src="imag/locksmith.svg" alt="">
              <br>

              <p>Agrega tus clientes y proveedores a tu base de datos </p>

              <nav class="menu">
                <ul>
                  <b>
                    <li class="submenu"><a href="#"> Seleccionar<i class=" fas fa-caret-down"></i> </i></a>
                  </b>

                  <ul>
                    <b>
                      <li><a href="#gestionar_administrador" class="btn-open">Administrador</a></li>
                      <li><a href="#gestionar_empleado" class="btn-open">Empleado</a></li>
                      <li><a href="#gestionar_proveedor" class="btn-open">Proveedor</a></li>

                    </b>

                  </ul>

                  </li>
              </nav>

            </div>
            <div class="contenido1">
              <br>
              <h2>Inventario</h2><br>
              <img src="imag/inventario.png" alt="">
              <br>

              <p>Crea tus productos y servicios con todas sus características</p>
              <nav class="menu">
                <ul>
                  <b>
                    <li class="submenu"><a href="#"> Seleccionar<i class=" fas fa-caret-down"></i> </i></a>
                  </b>

                  <ul>
                    <b>
                      <li><a href="#factura" class="btn-open">Ver Inventario</a></li>


                    </b>

                  </ul>

                  </li>
              </nav>
            </div>

            <div class="contenido1">
              <br>
              <h2>Gestionar Reporte</h2><br>
              <img src="imag/reporte.png" alt="">
              <br>
              <p>Genera los reportes necesarios diarios</p> <br>

              <nav class="menu">
                <ul>
                  <b>
                    <li class="submenu"><a href="#"> Seleccionar<i class=" fas fa-caret-down"></i> </i></a>
                  </b>

                  <ul>
                    <b>
                      <li><a href="#factura" class="btn-open"> Ver Reporte</a></li>

                    </b>

                  </ul>

                  </li>
              </nav>
            </div>
            <div class="contenido1">
              <br>
              <h2>Gestionar Factura</h2><br>
              <img src="imag/cuenta.svg" alt="">
              <br>


              <p>Genera tu factura de la mejor manera, rapido y efectivo </p>


              <nav class="menu">
                <ul>
                  <b>
                    <li class="submenu"><a href="#"> Seleccionar<i class=" fas fa-caret-down"></i> </i></a>
                  </b>

                  <ul>
                    <b>
                      <li><a href="#factura" class="btn-open">Factura </a></li>
                      <li><a href="#factura_cotizacion" class="btn-open">Cotizacion </a></li>
                    </b>

                  </ul>

                  </li>
              </nav>
            </div>

            <div class="contenido1">

              <br>
              <h2>Registrar Producto</h2><br>
              <img src="imag/caja.png" alt="">
              <br>


              <p>Genera tu venta y administra tu ingreso </p>
              <br>

              <nav class="menu">
                <ul>
                  <b>
                    <li class="submenu"><a href="#"> Seleccionar<i class=" fas fa-caret-down"></i> </i></a>
                  </b>

                  <ul>
                    <b>
                      <li><a href="#modal" class="btn-open">Nuevo </a></li>
                      <li><a href="#registrar_compra" class="btn-open">Reg Compra </a></li>

                    </b>

                  </ul>

                  </li>
              </nav>
            </div>

          </div>
          <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>

      </div>



      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
      <script src="js/main.js"></script>




      <div class="contenido" id="modal">
        <div class="ventana">

          <div class="texto">
            <div class="img">
              <img src="imag/proveedor.png" alt="">
              <font size=5>
                <h3>Proveedor</h3>
              </font>
            </div>
            <h1>Documento: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>

            <div class="btnregresar">
              <b><a href="" class="Regresar"> Regresar</a></b>
            </div>
            <b></b>
            <div class="btnsiguiente">
              <b><a href="#clasificacion" class="Siguiente"> Siguiente </a></b>
            </div>


          </div>
          <a href="#" class="btn-close">X</a>
        </div>

      </div>


      <div class="cproducto" id="clasificacion">
        <div class="ventan1">

          <div class="texto1">
            <div class="img1">
              <img src="imag/categorias.png" alt="">
              <font size=5>
                <h3>categoria</h3>
              </font>
            </div>
            <h1>Nombre </h1>
            <form action="">
              <input type="text" class="Nomb">
            </form>
            <div class="btnregresar">
              <b><a href="#modal" class="Regresar"> Regresar</a></b>
            </div>
            <b></b>
            <div class="btnsiguiente">
              <b><a href="#datos" class="Siguiente"> Siguiente </a></b>
            </div>
          </div>
          <a href="" class="btn-close">X</a>
        </div>

      </div>


      <div class="dproductos" id="datos">
        <div class="ventana2">

          <div class="texto2">
            <div class="img2">
              <img src="imag/escaner-de-codigo-de-barras.png" alt="">
              <font size=5>
                <h3>Datos producto</h3>
              </font>
            </div>
            <h1>Codigo: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>
            <h1>Nombre: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>
            <div class="btnregresar">
              <b><a href="#clasificacion" class="Regresar"> Regresar</a></b>
            </div>
            <b></b>
            <div class="btnsiguiente">
              <b><a href="#material" class="Siguiente"> Siguiente </a></b>
            </div>
          </div>
          <a href="#" class="btn-close">X</a>
        </div>

      </div>
      <div class="dmaterial" id="material">
        <div class="ventana3">

          <div class="texto3">
            <div class="img3">
              <img src="imag/caja.png" alt="">
              <font size=5>
                <h3>Datos material</h3>
              </font>
            </div>
            </form>
            <h1>Nombre: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>
            <div class="btnregresar">
              <b><a href="#datos" class="Regresar"> Regresar</a></b>
            </div>
            <b></b>
            <div class="btnsiguiente">
              <b><a href="#marca" class="Siguiente"> Siguiente </a></b>
            </div>
          </div>
          <a href="#" class="btn-close">X</a>
        </div>

      </div>
      <div class="dmarca" id="marca">
        <div class="ventana4">

          <div class="texto4">
            <div class="img4">
              <img src="imag/marca.png" alt="">
              <font size=5>
                <h3>Datos marca</h3>
              </font>
            </div>
            </form>
            <h1>Nombre: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>
            <div class="btnregresar">
              <b><a href="#material" class="Regresar"> Regresar</a></b>
            </div>
            <b></b>
            <div class="btnsiguiente">
              <b><a href="#medida" class="Siguiente"> Siguiente </a></b>
            </div>
          </div>
          <a href="#" class="btn-close">X</a>
        </div>

      </div>
      <div class="dmedida" id="medida">
        <div class="ventana5">

          <div class="texto5">
            <div class="img5">
              <img src="imag/reduccion-de-peso.png" alt="">
              <font size=5>
                <h3>Datos medida</h3>
              </font>
            </div>
            </form>
            <h1>Nombre: </h1>
            <form action="">
              <input type="text" class="docum">
            </form>
            <div class="tipomedida">
              <h2>Tipo medida: </h2>
              <select name="seleccionar">
                <option disabled>--seleccione tipo medida--</option>
                <option value="Metrica">Metrica</option>
                <option value="Masa">Masa</option>
                <option value="Volumen">Volumen</option>
                <option value="Longitud">Longitud</option>

              </select>
            </div>
            <div class="unidadmedida">
              </form>
              <h2>Unidad medida</h2>
              <form action="">
                <input type="text" class="medida">
              </form>
            </div>

            <div class="btnregresar1">
              <b><a href="#marca" class="Regresar"> Regresar</a></b>
            </div>

            <div class="btnregistrar">
              <b><a href="" class="registrar"> Crear</a></b>
            </div>


            <a href="#" class="btn-close">X</a>
          </div>

        </div>
      </div>
      <!-----------------------Registrar compra-------------------->














      <div class="registrar_compra" id="registrar_compra">
        <div class="ventana_registrar_compra">
          <a href="#" class="btn-close_registro_compra">X</a>
          <section id="contenido_general_registrar">
            <div class="logo_factura">
              <img src="imag/logo.jpg" alt="">
            </div>
            <form name="datos_proveedor_registro" id="datos_proveedor_registro" class="factura_proveedor_registro">
              <div class="proveedor_factura_fecha">
                <label>Fecha:<label>
                    <input type="date" name="fecha" id="fecha_registro_producto">
              </div>
              <div class="proveedor_factura_numero">
                <label>No :<label>
                    <input type="text" name="empresa_numero" id="numero_registro">
              </div>
            </form>

            <div class="datos_proveedor">

              <div class="titulo_datos_cliente">
                <h4>Datos proveedor</h4>
              </div>
              <form name="form_nuevo_proveedor_venta" id="form_nuevo_proveedor_venta"
                class="datos_proveedor_formulario">
                <div class="registro_documento_proveedor">
                  <label>Documento :<label>
                      <input type="text" name="Doc_proveedor" id="Doc_proveedor">
                      <a href="" id="buscar_proveedor_registro" class="link_buscar_proveedor_registro"><i class="fas fa-search"></i></a>
                   
                        <a href="#gestionar_proveedor" class="tbn_nuevo_proveedor"><i class="fas fa-plus"></i>Agregar proveedor</a>
                      
                </div>
                <div class="registro_nombre_proveedor">
                  <label>Nombre:<label>
                      <input type="text" name="nom_proveedor" id="nom_proveedor">
                </div>

                <div class="registro_apellido_proveedor">
                  <label>Apellido :<label>
                      <input type="text" name="ap_proveedor" id="ap_proveedor">
                </div>
                <div class="registro_telefono_proveedor">
                  <label>Telefono :<label>
                      <input type="text" name="tel_proveedor" id="tel_proveedor" disabled required>
                </div>
                <div class="registro_correo_proveedor">
                  <label>Correo :<label>
                      <input type="text" name="cor_proveedor" id="cor_proveedor" disabled required>
                </div>


              </form>

            </div>
            <table class="tbl_venta">
              <thead>

                <tr class="descripcion_factura_registro_proveedor">
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Disponible</th>
                  <th class="textright">Precio Und</th>
                  <th class="number">Cantidad registro</th>
                
                  <th class="textright">Precio Total</th>
                  <th>Accion</th>

                </tr>
                <tr>
                  <td><input type="text" name="txt_cod_producto" id="txt_cod_producto"><a href=""
                      id="buscar_producto_factura" class="link_buscar_producto_factura"><i
                        class="fas fa-search"></i></a></td>
                  <td id="txt_nombre_factura_registro">-</td>
                  <td id="txt_marca_factura_registro">-</td>
                  <td><input type="number" name="txt_disponibilidad_factura_registro" id="txt_disponibilidad_factura_registro" value="0" min="0" disabled> </td>   
                  <td id="txt_precio_unidad_registro" class="textright">0.00</td>
                  <td><input type="number" name="txt_cant_producto_registro" id="txt_cant_producto_registro" value="0" min="0"></td>   
                  <td id="txt_precio_total" class="textright">0.00</td>
                  <td> <a href="" id="agregar_producto_compra" class="link_Agregar_producto_compra"><i
                        class="fas fa-plus"></i>Agregar</a></td>

                </tr>
              
                <tr class="descripcion_factura_registro_proveedor">
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Disponible</th>
                  <th class="textright">Precio Und</th>
                  <th class="number">Cantidad registro</th>
                
                  <th class="textright">Precio Total</th>
                  <th>Accion</th>

                </tr>

              </thead>
              <tbody id="detalle_venta">
               

                <tr>
                  <td>7707294382076</td>
                  <td>martillo</td>
                  <td>carterpilla</td>
                  <td>34</td>
                  <td>9000</td>
                  <td>6</td>
                  <td>360000</td>
                  <td>
                    <a class="link_eliminar" href=""
                      onclick="event.preventDefault()(7707294382076);"><i
                        class="far fa-trash-alt"></i></a>
                        <div class="btnmodificar">
                          <b><a href="" class="modificar">Modificar</a></b>
                        </div>
                  </td>
                </tr>
              </div>
              
             

              </tbody>
           
            </table>
            <table class="total_factura_proveedor">
              <tr>

                <th>total</th>
                <td class="texttright">40000.00</td>

              </tr>
            </table>
          
            
       
        </section>
       

      </div>


    
     
    
    <!-------------------------------------------Formularios gestionar administrador ----------------------------------------------->
    <div class="gestionar_administrador" id="gestionar_administrador">
      <div class="ventana_administrador">
        <section class="registro-administrador">

          <a href="#" class="btn-close_gestionar_administrador">X</a>

          <strong>
            <h1>Formulario Administrador</h1>
          </strong>
          <form>

            <div class="documento_administrador">
              <h3>Documento:</h3>
              <select>
                <option disabled selected=""> Tipo de documento</option> <br>
                <option>Cédula de ciudadania</option>
                <option>Código NIT</option>
              </select>
            </div>

          </form>

          <div class="contoles_datos">

            <input class="controls" type="text" name="documento" id="documento"
              placeholder="Ingrese su numero de Documento">
            <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese su correo Electronico">
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su teléfono">
            <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
            <form>
          </div>

          <div class="estado">
            <h3>Estado:</h3>
            <select>

              <option disabled selected=""> Seleccione su estado:</option> <br>
              <option>Activo</option>
              <option>Inactivo</option>
            </select>

          </div>
          <input class="botons" type="submit" value="Registrar">
      </div>



      </form>


      </section>




    </div>

  </div>
  </div>

  <!-------------------------------------------Formularios gestionar proveedor ----------------------------------------------->
  <div class="gestionar_proveedor" id="gestionar_proveedor">
    <div class="ventana_proveedor">
      <section class="Formulario-Proveedor">
        <a href="#" class="btn-close_gestionar_administrador">X</a>

        <h1>Formulario Proveedor</h1>

        <form>

          <div class="documento_proveedor">
            <h3>Documento:</h3>
            <select>
              <option disabled selected="">tipo de documento</option>
              <option>Cedula de ciudadania</option>
              <option>Código NIT</option>
            </select>
          </div>

          <input class="controls" type="text" name="Documento" id="Documento" placeholder="Ingrese su Documento">
          <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese su Correo">
          <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre">
          <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">
          <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
          <input class="controls" type="text" name="Direccion" id="Direccion" placeholder="Ingrese su Direccion">
          <form>
            <div class="transporte">
              <h3>Transporte :</h3>
              <select>
                <option disabled selected="">Seleccione Transporte</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>



            <form>
              <div class="estado_proveedor">
                <h3>Estado:</h3>
                <select>
                  <option disabled selected="">Seleccione su Estado</option>
                  <option>Activo</option>
                  <option>Inactivo</option>
                </select>
              </div>



              <input class="botons" type="submit" value="Registrar">
      </section>

    </div>
  </div>
  <!-------------------------------------------Formularios gestionar empleado ----------------------------------------------->

  <div class="gestionar_empleado" id="gestionar_empleado">
    <div class="ventana_empledo">

      <section class="Formulario-Empleado">
        <a href="#" class="btn-close_gestionar_empleado">X</a>
        <h1>Registrar Empleado</h1></br>
        <form>

          <div class="documento_empleado">
            <h3>Documento:</h3>
            <select>
              <option disabled selected="">Seleccione su tipo de documento</option>
              <option>Cedula de ciudadania</option>
              <option>Código NIT</option>
            </select>
          </div>

          <input class="controls" type="text" name="Documento" id="Documento" placeholder="Ingrese su Documento">
          <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese su Correo">
          <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre">
          <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">
          <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
          <input class="controls" type="password" name="Contraseña" id="Contraseña" placeholder="Ingrese su Contraseña">


          <form>
            <div class="estado_empleado">
              <h3>Estado:</h3>
              <select>
                <option disabled selected="">Seleccione su Estado</option>
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>


            <input class="botons" type="submit" value="Registrar">

      </section>
    </div>
  </div>





  <!-------------------------------- Factura cotizacion--------------------------------------->

  <div class="factura" id="factura_cotizacion">

    <div class="ventana0">
      <a href="#" class="btn-close_factura">X</a>
      <div class="texto3">
        <section id="contenido_general">

          <div class="logo_factura">
            <img src="imag/logo.jpg" alt="">
          </div>
          <div class="cotizacion">
            <h1>Cotizacion</h1>
          </div>
          <div class="factura_cotizacion_empresa">
            <form name="datos_empresa" id="datos_empresa_factura" class="factura_cotizacion_empresa">
              <div class="empresa_factura_cotizacion_fecha">
                <label>Fecha:<label>
                    <input type="date" name="fecha" id="fecha">
              </div>
              <div class="empresa_factura_cotizacion_nit">
                <label>Nit: XXXXXXXXXXXXX<label>

              </div>
              <div class="empresa_factura_cotizacion_numero">
                <label>No :<label>
                    <input type="text" name="empresa_numero" id="empresa_numero">
              </div>
            </form>
          </div>


          <div class="datos_cliente">

            <div class="titulo_datos_cliente_">
              <h4>Datos del cliente</h4>
            </div>
            <form name="form_nuevo_cliente_venta" id="form_nuevo_cliente_venta" class="datos_cliente_formulario">
              <div class="factura_contacto_cliente">

                <div class="factura_identificacion_cliente">
                  <label>Identificacion :<label>
                      <input type="text" name="Doc_cliente" id="Doc_cliente">
                </div>

                <div class="factura_telefono_cliente">
                  <label>Telefono :<label>
                      <input type="text" name="Tel_cliente" id="Tel_cliente">
                </div>
                <div class="factura_direccion_cliente">
                  <label>Direccion :<label>
                      <input type="text" name="Dir_cliente" id="Dir_cliente" disabled required>
                </div>


            </form>
          </div>
          <table class="tbl_venta">
            <thead>

              <tr class="descripcion_factura">
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th class="number">Cantidad</th>
                <th class="textright">Precio Und</th>
                <th class="textright">Precio Total</th>
                <th>Accion</th>

              </tr>
              <tr>
                <td><input type="text" name="txt_cod_producto" id="txt_cod_producto"><a href=""
                    id="buscar_producto_factura" class="link_buscar_producto_factura"><i class="fas fa-search"></i></a>
                </td>
                <td id="txt_nombre_factura">-</td>
                <td id="txt_descripcion_factura">-</td>
                <td id="txt_marca_factura">-</td>
                <td><input type="number" name="txt_cant_producto" id="txt_cant_producto" value="0" min="0"></td>
                <td id="txt_precio" class="textright">0.00</td>
                <td id="txt_precio_total" class="textright">0.00</td>
                <td> <a href="" id="agregar_producto_venta" class="link_Agregar_producto_venta"><i
                      class="fas fa-plus"></i>Agregar</a></td>

              </tr>
              <tr class="descripcion_factura">
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th class="number">Cantidad</th>
                <th class="textright">Precio Und</th>
                <th class="textright">Precio Total</th>
                <th>Accion</th>

              </tr>

            </thead>
            <tbody id="detalle_venta">
              <tr>
                <td>7707294382059</td>
                <td>estornillador</td>
                <td>estrella</td>
                <td>caterpilla</td>
                <td>3</td>
                <td>2000</td>
                <td>6000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detalle(7707294382059);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>

              <tr>
                <td>7707294382076</td>
                <td>martillo</td>
                <td>..</td>
                <td>caterpilla</td>
                <td>2</td>
                <td>9000</td>
                <td>18000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detalle(7707294382076);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>

              <tr>
                <td>7707294382076</td>
                <td>martillo</td>
                <td>..</td>
                <td>caterpilla</td>
                <td>2</td>
                <td>9000</td>
                <td>18000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detalle(7707294382076);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            </tbody>

          </table>
          <table class="total_factura">

            <tr>

              <th> sub total</th>
              <td class="texttright">1000.00</td>

            </tr>
            <tr>

              <th> iva 19%</th>
              <td class="texttright">1000.00</td>

            </tr>
            <tr>

              <th>total</th>
              <td class="texttright">40000.00</td>

            </tr>

          </table><br>

      </div>

      </section>

    </div>

  </div>
  </div>
  <!-----------------formulario registrar cliente------------------------------------->
  <div class="gestionar_cliente" id="modall">
    <div class="ventana_gestionar_cliente">

      <section class="Formulariocliente">
        <a href="#" class="btn-close">X</a>
        <div class="row no-gutters bg-dark">
          <div class="col-xl-5 col-lg-12 register-bg">
          </div>
          <div class="col-xl-7 col-lg-12 d-flex">
            <div class="container align-self-center p-6">
              <h1 class="font-weight-bold mb-3">Registrar Cliente</h1>
              <div class="form-group">
              </div>
              <form>
                <div class="form-row -2">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Tu nombre">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Tu apellido">
                  </div>
                </div>

                <div class="form-group mb-1">
                  <label class="font-weight-bold">Documento <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" placeholder="Ingresa tu Documento">
                </div>

                <div class="form-group mb-3">

                  <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                </div>

                <div class="form-group mb-3">
                  <label class="font-weight-bold">Telefono <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" placeholder="Ingresa tu Telefono">
                </div>

                <div class="form-group mb-3">
                  <label class="font-weight-bold">Direccion <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" placeholder="Ingresa tu Direccion">
                </div>


                <div class="estadocliente">
                  <label class="font-weight-bold">Estado: <span class="text-danger">*</span></label>
                  <select class="select">
                    <option disabled selected="">Seleccione su Estado</option>
                    <option>Activo</option>
                    <option>Inactivo</option>
                  </select>
                </div>

                <input class="botones" type="submit" value="Registrar">
              </form>
      </section>

    </div>

  </div>


  <!-------------------------------------------Factura ----------------------------------------------->
  
  <div class="factura" id="factura">

    <div class="ventana0">

      <div class="texto3">
        <a href="#" class="btn-close_factura">X</a>
        <section id="contenido_general">

          <div class="logo_factura">
            <img src="imag/logo.jpg" alt="">
          </div>

          <form name="datos_empresa" id="datos_empresa" class="factura_empresa">
            <div class="empresa_factura_fecha">
              <label>Fecha:<label>
                  <input type="date" name="fecha" id="fecha">
            </div>
            <div class="empresa_factura_nit">
              <label>Nit: XXXXXXXXXXXXX<label>

            </div>
            <div class="empresa_factura_numero">
              <label>No :<label>
                  <input type="text" name="empresa_numero" id="empresa_numero">
            </div>
          </form>

          <div class="datos_cliente">

            <div class="titulo_datos_cliente">
              <h4>Datos del cliente</h4>
            </div>
            <form name="form_nuevo_cliente_venta" id="form_nuevo_cliente_venta" class="datos_cliente_formulario">
              <div class="factura_contacto_cliente">
                <label>Contacto :<label>
                    <input type="text" name="Con_cliente" id="Con_cliente">
              </div>
              <div class="factura_identificacion_cliente">
                <label>Identificacion :<label>
                    <input type="text" name="Doc_cliente" id="Doc_cliente">
              </div>

              <div class="factura_telefono_cliente">
                <label>Telefono :<label>
                    <input type="text" name="Tel_cliente" id="Tel_cliente">
              </div>
              <div class="factura_direccion_cliente">
                <label>Direccion :<label>
                    <input type="text" name="Dir_cliente" id="Dir_cliente" disabled required>
              </div>

              <div class="nuevo_contacto">
                <a href="#modall" class="tbn_nuevo_contacto"><i class="fas fa-plus"></i>Agregar contacto</a>
              </div>
            </form>
          </div>
          <table class="tbl_venta">
            <thead>

              <tr class="descripcion_factura">
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th class="number">Cantidad</th>
                <th class="textright">Precio Und</th>
                <th class="textright">Precio Total</th>
                <th>Accion</th>

              </tr>
              <tr>
                <td><input type="text" name="txt_cod_producto" id="txt_cod_producto"><a href=""
                    id="buscar_producto_factura" class="link_buscar_producto_factura"><i
                      class="fas fa-search"></i></a></td>
                <td id="txt_nombre_factura">-</td>
                <td id="txt_descripcion_factura">-</td>
                <td id="txt_marca_factura">-</td>
                <td><input type="number" name="txt_cant_producto" id="txt_cant_producto" value="0" min="0"></td>
                <td id="txt_precio" class="textright">0.00</td>
                <td id="txt_precio_total" class="textright">0.00</td>
                <td> <a href="" id="agregar_producto_venta" class="link_Agregar_producto_venta"><i
                      class="fas fa-plus"></i>Agregar</a></td>

              </tr>
              <tr class="descripcion_factura">
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th class="number">Cantidad</th>
                <th class="textright">Precio Und</th>
                <th class="textright">Precio Total</th>
                <th>Accion</th>

              </tr>

            </thead>
            <tbody id="detalle_venta">
              <tr>
                <td>7707294382059</td>
                <td>estornillador</td>
                <td>estrella</td>
                <td>caterpilla</td>
                <td>3</td>
                <td>2000</td>
                <td>6000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detale(7707294382059);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>

              <tr>
                <td>7707294382076</td>
                <td>martillo</td>
                <td>..</td>
                <td>caterpilla</td>
                <td>2</td>
                <td>9000</td>
                <td>18000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detalle(7707294382076);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>

              <tr>
                <td>7707294382076</td>
                <td>martillo</td>
                <td>..</td>
                <td>caterpilla</td>
                <td>2</td>
                <td>9000</td>
                <td>18000</td>
                <td>
                  <a class="link_eliminar" href=""
                    onclick="event.preventDefault() del_producto_detalle(7707294382076);"><i
                      class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            </tbody>

          </table>
          <table class="total_factura">

            <tr>

              <th> sub total</th>
              <td class="texttright">1000.00</td>

            </tr>
            <tr>

              <th> iva 19%</th>
              <td class="texttright">1000.00</td>

            </tr>
            <tr>

              <th>total</th>
              <td class="texttright">40000.00</td>

            </tr>

          </table><br>
      </div>

      </section>

    </div>

  </div>
</div>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


</body>

</html>