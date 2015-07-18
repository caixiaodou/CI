<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caixiaodou extends CI_Controller
{
	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
        }	
	
	function index()
	{
		if(isset($_GET['page']))
		{
			$page=$_GET['page']; //login.html
			//echo $page;
			
			$this->load->view($page);
		}
		else
		{
			$this->load->view('index.html');
		}
		/*if(isset($_POST['sub']))
		{
			switch($_POST['sub'])
			{
				case "注册":
					$this->load->view('register.html');
					break;
				case "登录":
					$this->load->view('login.html');
					break;
				default :
					$this->load->view('index.html');
					break;
			}
		}
		else
		{
			$this->load->view('index.html');	
		}	*/
	}
	
	
}
