<?php
if(empty($_SESSION['wlogin']) )
{
	header('Location: auth_login2.php');
}
?>