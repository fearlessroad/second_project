
<!doctype html>
<html>
	<head lang="en">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home Page</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
			label{
				display:block;
				}
			button{
				background-color:green;
				color:white;
				display:block;
				margin:10px 0;
			}
			.col-md-4{
				padding-left:50px;
			}
			.row{
				padding-left:100px;
				margin:10px;
			}
			textarea{
				width:600px;
				height:75px;
				border:1px solid black;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Test App</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#">Dashboard</a></li>
			        <li><a href="#">Profile</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="#">Log Off</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
<!-- beginning content -->
			<div class="row">
				<div class="info">
				<h4><?php echo $first_name." ".$last_name ?></h4>
				<p>Registered at: <?=$date?></p>
				<p>User ID: <?=$id?></p>
				<p>Email Address: <?=$email?></p>
				<p>Description: <?=$description?></p>
				</div>
			</div>
			<div class="row">
				<div class="leave_message">
				<h4>Leave a message for <?= $first_name?> </h4>
				<form action="/forms/message/"<?=$this->session->userdata['id']?>"; method="post">
				<textarea name="content"></textarea>
				<button>Post</button>
				</form>
				</div>
			</div>
	</body>
</html>