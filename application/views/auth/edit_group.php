<div class="container">
      <section class="mt-3">
            <h1><?= lang('edit_group_heading');?></h1>
            <p><?= lang('edit_group_subheading');?></p>

            <div id="infoMessage"><?= $message;?></div>

            <?= form_open(current_url());?>

                  <p>
                        <?= lang('edit_group_name_label', 'group_name');?> <br />
                        <?= form_input($group_name);?>
                  </p>

                  <p>
                        <?= lang('edit_group_desc_label', 'description');?> <br />
                        <?= form_input($group_description);?>
                  </p>

                  <p><?= form_submit('submit', lang('edit_group_submit_btn'),['class' => 'btn btn-primary']);?></p>
                  
            <?= form_close();?>
      </section>
</div>