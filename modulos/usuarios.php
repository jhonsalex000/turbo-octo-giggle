   <div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
    <div class="page-block">
    <div class="row align-items-center">
    <div class="col-md-12">
     <div class="card">
    </div>
   <!-- Content Header (Page header) -->
    <section class="pcoded-wrapper">
      <h1>
       Gestor de Usuarios
      </h1>
    </section>
    <!-- Main content -->
    <section class="pcoded-content">
      <div class="main-body">
        <div class="page-wrapper">
        <button class="btn btn-primary">Crear Usuario</button>
        </div>
        <div class="page-header">
         
          <table class="table-responsive">
              <table id="key-act-button" class="display table nowrap table-striped table-hover" style="width:100%">
            <thead>
              
              <tr>
                
                <th>N°</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Foto</th>
                <th>Rol</th>
                <th>Editar / Eliminar</th>

              </tr>

            </thead>

            <tbody>
           

                <tr>
              <td>1</td>
               <td>Alejando</td>
              <td>1234567</td>
              <td><img class="img-radius" src="Vistas/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"></td>
              <td>Administrador</td>
              <td>
              <div class="">                 
<button type="button" class="btn btn-success">
<i class="fas fa-plus f-w-600 m-l-5"></i>
Success</button>

<button type="button" class="btn btn-danger" title="" data-toggle="tooltip" data-original-title="">eliminar</button>

</div>
    </td>
              </tr>
                                
              <?php

              $verU = new UsuariosC();
              $verU -> VerUsuariosC();

              ?>

            </tbody>

          </table>

        </div>
        <!-- /.box-body -->
      
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>



  <!-- Crear Usuarios -->
  <div class="modal fade" role="dialog" id="CrearUsuarios">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Nombre de Usuario:</h2>

              <input type="text" class="form-control input-lg" name="usuarioN" required>

            </div>

            <div class="form-group">
              
              <h2>Contraseña:</h2>

              <input type="password" class="form-control input-lg" name="claveN" required>

            </div>

            <div class="form-group">
              
              <h2>Seleccionar el Rol:</h2>

              <select class="form-control input-lg" name="rolN">
                
                <option>Seleccionar Rol...</option>

                <option value="Administrador">Administrador</option>

                <option value="Editor de Contenido">Editor de Contenido</option>

                <option value="Marketing">Marketing</option>

              </select>

            </div>


            <div class="form-group">
              
              <h2>Foto:</h2>

              <input type="file" name="fotoN">

              <p class="help-block">peso máximo permitido 200 MB</p>

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Crear</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

          </div>

          <?php

          $crearU = new UsuariosC();
          $crearU -> CrearUsuariosC();

          ?>

        </form>

      </div>

    </div>

  </div>


<?php

$borrarU = new UsuariosC();
$borrarU -> BorrarUsuariosC();

?>


