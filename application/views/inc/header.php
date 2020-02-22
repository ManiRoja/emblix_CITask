<!DOCTYPE html>
<html>
<head>
	<title>Emblix Management Users</title>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
		div#container {
			margin: 0px 31px!important;
}
	</style>
</head>
<body>
	<nav href="" style="background-image: linear-gradient(to bottom,#2d6ba1 0,#2ea791 100%);" class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header col-lg-10">
  <a class="navbar-brand" style="color:#fff" href="#">EMBLIX MANAGEMENT USERS</a>
</div>
<?php $user_id=$this->session->userdata('user_id'); 
          if($user_id){
        ?>
 <div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2" >
    <span style="color:#fff"><b>SETTINGS</b></span>
  	<div class="btn-group">
  		<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
  		<ul class="dropdown-menu">
  			
  			<li> <?php echo anchor("welcome/logout","logout"); ?></li>
     
  			</ul>
  		</div>
  	</div>
  <?php } ?>
</div>
</nav>