<html>
	<head>
		<link rel="icon" href="img/icon/acnt.png" type="image/x-icon" />	
		<title>Login | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/login.css" />
	</head>
	<body>
		<div class="title">
			<p style="margin-top:100px;">APLIKASI PHBS <br/><br/>
			SMK Mulia Hati Insani</p><br/>
		</div>
		<div class="title2"><p><strong>Dashboard</strong></p></div>
		<form name="login" method="post" action="act/login_process.php?op=in">
			<div class="log-box" align="center">
				<input type="text" name="username" class="username" placeholder="Username" />
				<input type="password" name="password" class="password" placeholder="Password">
				<div class="action-box">
					<button class="button" type="submit" name="submit">Login</button>
					<button class="button" type="reset" name="reset">Reset</button>
				</div>
				<p style="font-size:12px; margin-top:2px; width:275px; margin-left:0px;" align="center">
					<a href="admin.php" ><b>PHBS - SMK MHI |</b></a> Copy Right <b>&copy</b> DimasTri 2015.
				</p>
			</div>
		</form>
	</body>
</html>