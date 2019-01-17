<?php
    require 'header.php'
?>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <!-- últimos usuarios -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Últimos usuarios</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Registrado</th>
                      </tr>
                      <tr>
                        <td>Juan Lopez</td>
                        <td>juancho4582@gmail.com</td>
                        <td>Dic 17, 2012</td>
                      </tr>
                      <tr>
                        <td>Martha Solis</td>
                        <td>mart789ha@yahoo.es</td>
                        <td>Dic 17, 2012</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>Dic 17, 2012</td>
                      </tr>
                      <tr>
                        <td>Mauricio Osorio</td>
                        <td>mauosoro@yahoo.com</td>
                        <td>Dic 17, 2012</td>
                      </tr>
                      <tr>
                        <td>Mike Mayer</td>
                        <td>mjohn88@gmail.com</td>
                        <td>Dic 17, 2012</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modals -->

    <!-- Agregar página -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Página</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Título de Página</label>
          <input type="text" class="form-control" placeholder="Título de la página">
        </div>
        <div class="form-group">
          <label>Mensaje de Página</label>
          <textarea name="editor1" class="form-control" placeholder="Información de la página"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Publicado
          </label>
        </div>
        <div class="form-group">
          <label>Palabras Clave</label>
          <input type="text" class="form-control" placeholder="Agregar algunas palabras...">
        </div>
        <div class="form-group">
          <label>Meta Descripción</label>
          <input type="text" class="form-control" placeholder="Agregar una metadescripción...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php
    require 'footer.php'
?>