<?php
$this->load->view("inc/header");?>
<div id="container">
	<h3>View Users</h3>
	<br>
	<?php if($message=$this->session->flashdata('message1')): ?>
		<div class="row">
			<div class="col_md_6">
				<div class="alert alert-dismissible alert-success">
					<?php echo $message; ?>
				</div>
			</div>
			</div>
		<?php endif; ?>
	<br>
	<?php echo anchor("UserController/create_user","Create User",['class'=>'btn  btn-primary']); ?>
	<br>
	<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Phone</th>
				      <th scope="col">User Name</th>
				      <th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($users)): ?>
			<?php foreach($users as $user): ?>
				<tr>
		 		<td><?php echo $user->firstname; ?></td>
		 		<td><?php echo $user->lastname; ?></td>
		 		<td><?php echo $user->phone; ?></td>
		 		<td><?php echo $user->username; ?></td>
		 		<td><?php echo anchor("UserController/updateuser/{$user->id}","View",['class'=>'btn btn-sm btn-primary']); ?></td>
		 		<td><?php echo anchor("UserController/deleteuser/{$user->id}","Delete",['class'=>'btn btn-sm btn-primary']); ?></td>
		 	</tr>
			<?php endforeach;?>
				<?php else: ?>
		 	<tr>
		 		<td>No records found</td>
		 	</tr>
		 <?php endif; ?>
		</tbody>
	</table>

	</div>
	 
</div>
<?php
$this->load->view("inc/footer");?>