<!-------------------Formularios gestionar administrador ---------------------->

<div class="gestionar_administrador" id="gestionar_administrador">
  <div class="ventana_administrador">

    <section class="registro-administrador">
      <strong>
        <a href="#" class="btn-close_gestionar_administrador">X</a>
        <h1>Formulario Administrador</h1><br>
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

        <input class="controls" type="text" name="documento" id="documento" placeholder="Numero Documento">
        <input class="controls" type="email" name="correo" id="correo" placeholder="Correo Electronico">
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombres">
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
        <input class="controls" type="text" name="telefono" id="telefono" placeholder="Teléfono">
        <input class="controls" type="password" name="correo" id="correo" placeholder="Contraseña">


      </div>

      <input class="botons" type="submit" value="Registrar">
    </section>
  </div>

</div>


<!-----------------------Formularios gestionar proveedor -------------------------->

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
      </form>
      <div class="contoles_datos">
        <input class="controls_proveedor" type="text" name="Documento" id="Documento" placeholder="Numero Documento">
        <input class="controls_proveedor" type="text" name="correo" id="correo" placeholder="Correo Electronico">
        <input class="controls_proveedor" type="text" name="Nombre" id="Nombre" placeholder="Nombres">
        <input class="controls_proveedor" type="text" name="Apellido" id="Apellido" placeholder="Apellidos">
        <input class="controls_proveedor" type="text" name="Telefono" id="Telefono" placeholder="Telefono">
        <input class="controls_proveedor" type="text" name="Direccion" id="Direccion" placeholder="Direccion">
      </div>
      <input class="formulario_proveedor_botons" type="submit" value="Registrar">
    </section>
  </div>
</div>
<!--------------------Formularios gestionar empleado --------------------------->

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
      </form>
      <div class="contoles_datos">
        <input class="controls" type="text" name="Documento" id="Documento" placeholder="Numero Documento">
        <input class="controls" type="text" name="correo" id="correo" placeholder="Correo Electronico">
        <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Nombres">
        <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Apellidos">
        <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Telefono">
        <input class="controls" type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña">
      </div>



      <input class="botons" type="submit" value="Registrar">

    </section>
  </div>
</div>