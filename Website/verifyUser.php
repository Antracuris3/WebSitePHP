<?php
	// verifyUser.php


define ( 'HOSTNAME',  'localhost');
define ( 'DATABASE', 'id12738858_user');
define ( 'USERNAME', 'id12738858_user_for_site');
define ( 'USER_PASSWORD', 'Runespages031.');


function estabelecerConexao()
{
    try
    {
    $conexao = new PDO( "mysql:host=".HOSTNAME.";dbname=".DATABASE, USERNAME, USER_PASSWORD );
    }
    catch ( PDOException $e)
    {
        trigger_error($e->getMessage(), E_USER_ERROR);
    }

    // Always set it this way, after creation of PDO instance
    // The only proper error handling modes is PDO::ERRMODE_EXCEPTION.
    $conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    return $conexao;
}


/*
   Verifica a correspondência entre username e password
*/
function isOkUsernamePassword( $username, $password )
{
	$con = estabelecerConexao();
	$stmt = $con->prepare("SELECT username, password FROM users
                           WHERE username=:username AND password=:password
	                      ");
	$stmt->execute( [ 'username' => $username,
					  'password' => $password
				    ] );

    if( $stmt->fetchColumn() )
        return true;
    else
        return false;

}


?>
