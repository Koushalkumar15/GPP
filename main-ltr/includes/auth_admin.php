<?php
if(!$_SESSION['admin'] )
{
	header('Location: auth_login2.html');
}
?>