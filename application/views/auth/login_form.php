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
         	<?php echo form_open($this->uri->uri_string());?>
                <h2 class="form-signin-heading"></h2>
                <label for="inputEmail" class="sr-only">User</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Unidad" name="login" required="" autofocus="">
                <div style="color: red;">
                	<?php echo form_error($login['name']); ?>
                	<?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
                </div>
                <label for="inputPassword" class="sr-only" >Password</label>
                <input type="password" id="inputPassword" style="margin-top: 5px;" class="form-control" name="password" placeholder="Password" required="">
  				<div style="color: red;">
  					<?php echo form_error($password['name']); ?>
  					<?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
  				</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          		<?php echo form_close(); ?>
            </div>

        </div>
    </div>
</div>
