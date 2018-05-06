<?php
require_once 'Controller.class.php';


 
$mhs = new Controller;

if(!isset($_GET['do']))
	{
		$mhs->inputform();
	}
	else
	{
		$mhs->inputed();
	}