
<!-------------proveedor--------------->
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

<!-------------categora producto--------------->
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

<!------------------datos producto-------------------------->
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
      <!-------------datos material--------------->
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
      <!---------------datos marca------------------>
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
      <!------------------datos medida---------------------->
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
      
      <!-----------------------Registrar producto nuevo -------------------->

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
                       
                        <input class="btnmodificar" type="submit" value="Modificar">
                      
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