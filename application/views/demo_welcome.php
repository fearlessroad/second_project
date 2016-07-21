<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
Welcome, <?= $first_name?>! <a href="/logoff/<?=$id?>">Log Off</a>
	<FIELDSET class="layout">
		<legend>User Information</legend>
		<p>First Name: <?=$first_name?></p>
		<p>Last Name: <?=$last_name?></p>
		<p>Email Address: <?=$email?></p>
	</FIELDSET>
</body>
</html>