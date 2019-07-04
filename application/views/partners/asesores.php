  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Asesores</h1>
        <p class="lead">Pra!</p>

        <div class="row">
          <?php if (validation_errors()) : ?>
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <?= validation_errors() ?>
              </div>
            </div>
          <?php endif; ?>
          <?php if (isset($error)) : ?>
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <?= $error ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="page-header">
              <h1>Register</h1>
            </div>
            <?= form_open() ?>
              <div class="form-group">
                                
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="nombre">
                  <label class="custom-control-label" for="nombre">Nombres</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="apellido">
                  <label class="custom-control-label" for="apellido">Apellidos</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="sexo">
                  <label class="custom-control-label" for="sexo">Sexo</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="etnia">
                  <label class="custom-control-label" for="etnia">Etnia</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="telefono">
                  <label class="custom-control-label" for="telefono">Telefono</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="celular">
                  <label class="custom-control-label" for="celular">Celular</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="documento">
                  <label class="custom-control-label" for="documento">Documento</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="email">
                  <label class="custom-control-label" for="email">e-mail</label>
                </div>

              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-default" value="Register">
              </div>
            </form>
          </div>
        </div><!-- .row -->

        <table id="book-table" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <td>Nombres</td>
              <td>Apellidos</td>
              <td>Telefono</td>
              <td>Celular</td>
              <td>e-mail</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lista as $asesor): ?>
              <tr>
                <td><?php echo $asesor['primer_nombre'].' '.$asesor['segundo_nombre'] ; ?></td>
                <td><?php echo $asesor['primer_apellido'].' '.$asesor['segundo_apellido'] ; ?></td>
                <td><?php echo $asesor['telefono'] ; ?></td>
                <td><?php echo $asesor['celular'] ; ?></td>
                <td><?php echo $asesor['asesor_email'] ; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
