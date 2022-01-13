 <!------------------------Factura -------------------------------->
  
 <div class="factura" id="factura">
<div class="ventana0">
  <div class="texto3">

   
    <section id="contenido_general">
    <a href="#" class="btn-close_factura">X</a>
      <div class="logo_factura">
        <img src="imag/logoferreteria.png" alt="">
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
        <form action="" class="form_nuevo_cliente_factura">
<div class="center">
<div class="container_flex">
    <label for="" class="form_label_cliente_factura">Documento:</label>
    <input type="text" class="form_input_cliente_factura" name="documento">  
    </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Contacto:</label>
    <input type="text" class="form_input_cliente_factura" name="contacto">  
     </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Telefono:</label>
    <input type="text" class="form_input_cliente_factura" name="telefono">  
     </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Direccion:</label>
    <input type="text" class="form_input_cliente_factura" name="direccion">  
     </div>
        </form> 
        <div class="link_nuevo_contacto_factura">
        <a href="#modall" class="link_nuevo_contacto"><i class="fas fa-plus"></i>Agregar contacto</a>
        </div>
       
</div>
   

      
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

</table>

<input class="botons_factura" type="submit" value="Registrar">

      </div>
  </section>
</div>
</div>

<!------------------- Factura cotizacion--------------------->

<div class="factura" id="factura_cotizacion">
<div class="ventana0">
 
  <div class="texto3">
    <section id="contenido_general">
    <a href="#" class="btn-close_factura">X</a>
      <div class="logo_factura">
        <img src="imag/logo.jpg" alt="">
      </div>
      <div class="cotizacion">
        <h1>Cotizacion</h1>
      </div>
      <div class="factura_cotizacion_empresa">
        
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

      <form action="" class="form_nuevo_cliente_factura">
<div class="center">
<div class="container_flex">
    <label for="" class="form_label_cliente_factura">Documento:</label>
    <input type="text" class="form_input_cliente_factura" name="documento">  
    </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Contacto:</label>
    <input type="text" class="form_input_cliente_factura" name="contacto">  
     </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Telefono:</label>
    <input type="text" class="form_input_cliente_factura" name="telefono">  
     </div>

     <div class="container_flex">
     <label for="" class="form_label_cliente_factura">Direccion:</label>
    <input type="text" class="form_input_cliente_factura" name="direccion">  
     </div>
        </form> 
        <div class="link_nuevo_contacto_factura">
        <a href="#modall" class="link_nuevo_contacto"><i class="fas fa-plus"></i>Agregar contacto</a>
        </div>
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
      <input class="botons_factura" type="submit" value="Imprimir">
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
