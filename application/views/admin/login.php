<?php
$this->load->view("inc/header");?>
<div id="container">
	<?php echo form_open("welcome/adminSignin",['class'=>'form_horizontal']); ?>
	<?php if($message=$this->session->flashdata('message')): ?>
		<div class="row">
			<div class="col_md_6">
				<div class="alert alert-dismissible alert-danger">
					<?php echo $message; ?>
				</div>
			</div>
			</div>
		<?php endif; ?>
	<h3>ADMIN SIGNIN</h3>
	<br>
	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> User Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php form_error('username','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> Password</label>
				<div class="col-md-9">
					<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php form_error('password','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	
	 <button type="submit" class="btn btn-primary">Login</button>
	 <!-- <?php echo anchor("welcome","Back",['class'=>'btn btn-primary']); ?> -->
</div>
		<?php echo form_close();?>

</div>
<?php
$this->load->view("inc/footer");?>