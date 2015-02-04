
<!-- Form area -->
<div class="admin-form" style="margin-top:0;">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <!-- Widget starts -->
        <img src="<?php echo base_url(); ?>assets/img/logo2.png" style="display:block;margin:0 auto;">
            <div class="widget wlightblue">
              <?php 
              
                echo $this->session->flashdata('message');

                echo validation_errors('<div class="alert alert-error">', '</div>');
              
              ?>
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Registrar Cuenta 
              </div>

              <div class="widget-content">
                <div class="padd">
<?php $create_form = array('class' => 'form'); ?>

<?php echo form_open('members/create', $create_form); ?>

<?php echo form_label('No. Patrocinador:', 'directo'); ?>

<?php $directo_input = array('name' => 'directo', 'id' => 'directo', 'value' => set_value('directo')); ?>

<?php echo form_input($directo_input); ?> <br><br>


<?php echo form_label('Username:', 'username'); ?>

<?php $username_input = array('name' => 'username', 'id' => 'username', 'value' => set_value('username')); ?>

<?php echo form_input($username_input); ?> .lead-quest.com<br>
<p><em>Tú página replicada de lead-quest.com</em></p> 



<br> <br><?php echo form_label('Email:', 'email'); ?>

<?php $email_input = array('name' => 'email', 'id' => 'email', 'value' => set_value('email')); ?>

<?php echo form_input($email_input); ?><br><br>



<?php echo form_label('Password', 'password'); ?>

<?php $password_input = array('name' => 'password', 'id' => 'password', 'value' => set_value('password')); ?> 

<?php echo form_password($password_input); ?><br>  <br>    

<?php echo form_label('Confirm Password', 'confirm_password'); ?>

<?php $confirm_password_form = array('name' => 'confirm_password', 'id' => 'confirm_password', 'value' => set_value('confirm_password')); ?>

<?php echo form_password($confirm_password_form); ?><br> <br>



<?php echo form_label('First Name', 'first_name'); ?>

<?php $first_name_input = array('name' => 'first_name', 'id' => 'first_name', 'value' => set_value('first_name')); ?>

<?php echo form_input($first_name_input); ?><br><br>



<?php echo form_label('Last Name', 'last_name'); ?>

<?php $last_name_input = array('name' => 'last_name', 'id' => 'last_name', 'value' => set_value('last_name')); ?>

<?php echo form_input($last_name_input); ?><br><br>



<div class="form_button"><br><?php echo form_submit('submit', 'Registrar'); ?></div>



<?php echo form_close(); ?>

                </div>
              </div>
            </div>  
      </div>
    </div>
  </div> 
</div>

