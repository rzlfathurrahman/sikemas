<div class="container-fluid d-flex align-items-center justify-content-center bg-gradient">

  <section class="login">
    
    <div class="card card-transparent">
      
      <h3 class="card-header text-center">Registrasi Akun</h3>
      <div class="card-body">
            <p><?= lang('create_user_subheading');?></p> 
        
            <div id="infoMessage"><?= $message;?></div>
            
            <?= form_open("auth/create_user");?>
            
                 <div class="form-group">
                        <?= lang('create_user_fname_label', 'first_name');?> <br />
                        <?= form_input($first_name);?>
                  </div>
            
                 <div class="form-group">
                        <?= lang('create_user_lname_label', 'last_name');?> <br />
                        <?= form_input($last_name);?>
                  </div>
                  
                  <?php
                  if($identity_column!=='email') {
                      echo '<p>';
                      echo lang('create_user_identity_label', 'identity');
                      echo '<br />';
                      echo form_error('identity');
                      echo form_input($identity);
                      echo '</p>';
                  }
                  ?>
            
                 <div class="form-group">
                        <label for="nik">NIK</label> <br />
                        <?= form_input($nik);?>
                  </div>
            
                 <div class="form-group">
                        <?= lang('create_user_email_label', 'email');?> <br />
                        <?= form_input($email);?>
                  </div>
            
                 <div class="form-group">
                        <?= lang('create_user_phone_label', 'phone');?> <br />
                        <?= form_input($phone);?>
                  </div>
            
                 <div class="form-group">
                        <?= lang('create_user_password_label', 'password');?> <br />
                        <?= form_input($password);?>
                  </div>
            
                 <div class="form-group">
                        <?= lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                        <?= form_input($password_confirm);?>
                  </div>
            
            
                  <p><?= form_submit('submit', lang('create_user_submit_btn'),['class' => 'btn btn-primary btn-block']);?></p>
            
            <?= form_close();?>        
      </div>
    </div>

  </section>
</div>
  

