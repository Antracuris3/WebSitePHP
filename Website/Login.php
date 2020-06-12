<html>
<head>
<title> main </title>
<link rel="icon" href="icon.ico">
</head>

<frameset rows="6%,94%" frameborder="0">
	<frame name="top" src="top.html">
	<frame name="bottom" src="bottom.html">
	</frameset>
</frameset>
<body>

	<?php

	include( 'verifyUser.php' );

	// Testar se o formulário foi submetido
	if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( isOkUsernamePassword( $username, $password ) )
		{

			setcookie('user', $username );

			// Redireccionar para a homepage
			header("Location: loja.php");
			exit();

		}
		else
		{
			$msgErro = "username e password não correspondem!";
		}
	}

</body>

</html>
