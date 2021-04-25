<?php
if(!$_SESSION['alogin'] )
{
	header('Location: auth_login2.php');
}
?>