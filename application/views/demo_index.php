<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		#container{
			margin: 0 auto;
			width:400px;
		}
		.layout label, .layout input{
			display:block;
			width:150px;
			float:left;
			margin-bottom:10px;
		}
		.layout label{
			text-align:right;
			padding-right:20px;
		}
		br{
			clear:left;
		}
		fieldset{
			width:350px;
			border-color: pink;
		}
		button{
			float:right;
			margin-right:25px;
			background-color:white;
		}
		button:hover{
			background-color:pink;
		}
	</style>
</head>
<body>
<?php echo validation_errors();?>

	<div id="container">
		<?php if(isset($message)) {
					echo $message;
				}
				else{
					echo '';
				} 
		?>
		<FIELDSET class="layout">
			<legend>Log In</legend>
			<form action="/login/" method="post">
<!-- 				<input type="hidden" name="login"> -->
				<label>Email</label><input type="email" name="email"><br>
				<label>Password</label><input type="password" name="password"><br>
				<button>Login</button>
			</form>
		</FIELDSET>
		<FIELDSET class="layout">
			<legend>Or Register</legend>
			<form action="/register/" method="post">
	<!-- 			<input type="hidden" name="register"> -->
			<?= form_error('first_name'); ?>
				<label>First Name</label><input type="text" name="first_name"><br>
				<label>Last Name</label><input type="text" name="last_name"><br>
				<label>Email</label><input type="email" name="email"><br>
				<label>Password</label><input type="password" name="password"><br>
				<label>Confirm Password</label><input type="password" name="confirm_pass"><br>
				<button>Register</button>
			</form>
		</FIELDSET>
	</div>
</body>
</html>