<body class="hold-transition login-page" style="background-image: url('<?php echo base_url();?>assets/dist/img/abri.jpg'); background-size: contain;">
  <div class="login-box" >
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="text-center">
      <img src="<?php echo base_url();?>assets/dist/img/moi.jpeg" class="logo-almubarok" width="120px">
    </div>

    <div class="login-logo">
      <h3>Masuk ke Aplikasi</h3>
    </div>

    <form action="<?php echo base_url('auth/login');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="usroremail" class="form-control" placeholder="Username / Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingat saya
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
