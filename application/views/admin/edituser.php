<?php
$this->load->view("inc/header");?>
	<?php
					
					foreach($users as $user)
					{
                    ?>
                    <div id="container">
	<?php echo form_open("Admin/editUser/{$user->id}",['class'=>'form_horizontal']); ?>

	<?php if($message=$this->session->flashdata('message')): ?>
		<div class="row">
			<div class="col_md_6">
				<div class="alert alert-dismissible alert-success">
					<?php echo $message; ?>
				</div>
			</div>
			</div>
		<?php endif; ?>
	<h3> USER</h3>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label"> First Name</label>
				<div class="col-md-9">
		
					<?php echo form_input(['name'=>'firstname','value'=>set_value('firstname',$user->firstname),'class'=>'form-control','placeholder'=>'First Name']); ?>
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
				<label class="col-md-3 control-label"> LastName</label>
				<div class="col-md-9">
		
					<?php echo form_input(['name'=>'lastname','value'=>set_value('lastname',$user->lastname),'class'=>'form-control','placeholder'=>'Last Name']); ?>
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
					echo form_input(['name'=>'username','value'=>set_value('username',$user->username),'class'=>'form-control','placeholder'=>'User Name']); ?>
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
					<?php echo form_input(['name'=>'phone','value'=>set_value('phone',$user->phone),'class'=>'form-control','placeholder'=>'phone']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php echo form_error('phone','<div class="text-danger">','</div>'); ?>
		</div>
	</div>
	<br>
	
	<br>
	
	 <button type="submit" class="btn btn-primary">Add</button>
	 <?php echo anchor("Admin/dashboard","Back",['class'=>'btn btn-primary']); ?>
</div>
		<?php echo form_close();?>

</div>
<?php
}
$this->load->view("inc/footer");?>