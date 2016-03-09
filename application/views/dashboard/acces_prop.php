<style type="text/css">
.panel_login{
  max-width: 400px;
  margin: auto;
}
.panel_login input{
  margin-bottom: 20px;
}
</style>
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center title_small"><strong>Ingreso de Propietarios</strong>
            </h2>
            <hr>
            <div class="panel_login">
              <form class="form-signin" action="http://propietarios.administracionvielmisa.com/propietarios/validar_prop.php" method="post">
                <h2 class="form-signin-heading"></h2>
                <label for="inputEmail" class="sr-only">Unidad</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Unidad" name="unidad" required="" autofocus="">
                <label for="inputPassword" class="sr-only" >Password</label>
                <input type="password" id="inputPassword" style="margin-top: 5px;" class="form-control" name="pass" placeholder="Password" required="">
                <div class="checkbox">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
              </form>
            </div>

        </div>
    </div>
</div>
