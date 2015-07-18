<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('user.php');

class Login extends MY_Controller
{
	public function __construct() 
        {
            parent::__construct();
            $this->load->library('CI_Smarty');
        }
	function index()
	{
		$this->load->view('Vlogin');	
	}
	
	function check()
	{
		$Info=new User();
		
		$user=$Info->searchUser($_POST['uname']);
		
		if($user)
		{
			if($user[0]->upass==sha1($_POST['upass']))
			{
				echo "The Password is correct!";
				$arr=array('uname'=>$user[0]->uname,'upass'=>$user[0]->upass);
				$this->ci_smarty->assign('user', $user);
            	$this->ci_smarty->display("test_user.html");
				
			}
			else
			{
				echo "The Password is not correct!";	
				var_dump($user);
			}		
		}
		else
		{
			echo '用户不存在';	
		}
	}
}
