<div class="container-fluid d-flex align-items-center justify-content-center bg-gradient">

  <section class="login">
    
    <div class="card card-transparent">
      
      <h3 class="card-header text-center"><?= lang('login_heading');?></h3>
      <div class="card-body">
        
        <p><?= lang('login_subheading');?></p>
        <div id="infoMessage"><?= $message;?></div>
        <?= form_open("auth/login");?>
        
          <div class="form-group">
            <?= lang('login_identity_label', 'identity');?>
            <?= form_input($identity);?>
          </div>
        
          <div class="form-group">
            <?= lang('login_password_label', 'password');?>
            <?= form_input($password);?>
          </div>
        
          <?= form_submit('submit', lang('login_submit_btn'),['class' => 'btn btn-success btn-block']);?><br> 
          <?= anchor('auth/create_user','<div class="btn btn-block btn-outline-warning">Daftar</div>')  ?>
        
        <?= form_close();?>
        
      </div>
    </div>

  </section>
</div>
  