<!-------------------Formularios gestionar administrador ---------------------->

    <div class="gestionar_administrador" id="gestionar_administrador">
      <div class="ventana_administrador">
        <section class="registro-administrador">
          <a href="#" class="btn-close_gestionar_administrador">X</a>
          <strong>
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
            <input class="controls" type="text" name="documento" id="documento"
              placeholder="Numero Documento">
            <input class="controls" type="text" name="correo" id="correo" placeholder="Correo Electronico">
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombres">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
            <input class="controls" type="text" name="telefono" id="telefono" placeholder="Teléfono">
            <input class="controls" type="password" name="correo" id="correo" placeholder="Contraseña">
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

          <input class="controls_proveedor" type="text" name="Documento" id="Documento" placeholder="Numero Documento">
          <input class="controls_proveedor" type="text" name="correo" id="correo" placeholder="Correo Electronico">
          <input class="controls_proveedor" type="text" name="Nombre" id="Nombre" placeholder="Nombres">
          <input class="controls_proveedor" type="text" name="Apellido" id="Apellido" placeholder="Apellidos">
          <input class="controls_proveedor" type="text" name="Telefono" id="Telefono" placeholder="Telefono">
          <input class="controls_proveedor" type="text" name="Direccion" id="Direccion" placeholder="Direccion">
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

          <input class="controls" type="text" name="Documento" id="Documento" placeholder="Numero Documento">
          <input class="controls" type="text" name="correo" id="correo" placeholder="Correo Electronico">
          <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Nombres">
          <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Apellidos">
          <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Telefono">
          <input class="controls" type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña">


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
