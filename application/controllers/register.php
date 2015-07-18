<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('user.php');

class Register extends MY_Controller
{	
	function insert()
	{
		$Info=new User();
		$Info->uname=$_POST['uname'];
		$Info->upass=sha1($_POST['upass']);
		
		
		$Info->addUser($Info);	
	}
	function update()
	{
		$Info=new User();
		$Info->uname=$_POST['uname'];
		$Info->upass=sha1($_POST['upass']);
		
		$Info->update($Info);	
	}
}
