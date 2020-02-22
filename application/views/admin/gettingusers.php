<?php
$this->load->view("inc/header");?>
<div id="container">
	<br>
	<?php echo anchor("admin/create_user","Create User",['class'=>'btn  btn-primary']); ?>
	<br>
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
	<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Phone</th>
				      <th scope="col">User Name</th>
				      <th scope="col">Status</th>
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
		 		<?php if($user->active_status==0)
		 		{ ?>
		 			<td><?php echo anchor("admin/updateuserstatus/{$user->id}/1","Deactive",['class'=>'btn btn-sm btn-danger']); ?></td>
		 		<?php }
		 		else
		 		{ ?>
		 			<td><?php echo anchor("admin/updateuserstatus/{$user->id}/0","Active",['class'=>'btn btn-sm btn-primary']); ?></td>
		 		<?php } ?>
		 		<td><?php echo anchor("admin/updateuser/{$user->id}","View",['class'=>'btn btn-sm btn-primary']); ?></td>
		 		<td><?php echo anchor("admin/deleteuser/{$user->id}","Delete",['class'=>'btn btn-sm btn-primary']); ?></td>
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