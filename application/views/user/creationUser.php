<?php
$this->load->view("inc/header"); ?>
<div id="container">
	<?php echo form_open("",['class'=>'form_horizontal']); ?>

	<?php if($message=$this->session->flashdata('message')): ?>
		<div class="row">
			<div class="col_md_6">
				<div class="alert alert-dismissible alert-success">
					<?php echo $message; ?>
				</div>
			</div>
			</div>
		<?php endif; ?>
	<h3>ADD User</h3>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> First Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'firstname','class'=>'form-control','placeholder'=>'First Name']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('firstname','<div class="text-danger">','</div>'); 
			?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
					<div class="form-group">
				<label class="col-md-3 control-label"> Last Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'lastname','class'=>'form-control','placeholder'=>'Last Name']); ?>
				</div>
			</div>
				</div>
			
		<div class="col-md-6">
			<?php echo form_error('lastname','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> User Name</label>
				<div class="col-md-9">
					<?php 
					echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('username','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> Phone</label>
				<div class="col-md-9">
					<?php 
					echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('phone','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> Password</label>
				<div class="col-md-9">
					<?php 
					echo form_input(['name'=>'password','class'=>'form-control','type'=>'password','placeholder'=>'Password']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('password','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> Confirm Password</label>
				<div class="col-md-9">
					<?php 
					echo form_input(['name'=>'cpassword','class'=>'form-control','type'=>'password','placeholder'=>'conPassword']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('cpassword','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	
	
	 <button type="submit" class="btn btn-primary">Add</button>
	 <?php echo anchor("UserController/getting_user","Back",['class'=>'btn btn-primary']); ?>
</div>
		<?php echo form_close();?>

</div>
<?php
$this->load->view("inc/footer"); ?>