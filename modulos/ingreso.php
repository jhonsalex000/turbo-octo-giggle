       <div class="auth-wrapper">
        <div class="auth-content">
        <div class="auth-bg">
        <span class="r"></span>
        <span class="r s"></span>
        <span class="r s"></span>
        <span class="r"></span>
        </div>
        <div class="card">
        <div class="card-body text-center">
        <div class="mb-4">
        <i class="feather icon-unlock auth-icon"></i>
        </div>
        <h3 class="mb-4">Imgreso Al BackEnd</h3>
        <form method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Usuario" name="usuario-Ing">
        </div>
        <div class="input-group mb-4">
       <input type="password" class="form-control" placeholder="Contraseña" name="clave-Ing">
    </div>
    <button class="btn btn-primary 12">Ingresar</button>
    </div>
    </div>
      <?php

      $ingreso = new UsuariosC();
      $ingreso -> IngresoUsuariosC();

      ?>
    </form>

    </div>
    </div>



