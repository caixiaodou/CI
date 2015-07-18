<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	
	function sayhello($name1,$name2)
	{
		echo $name1.$name2;
		}
		
	function show()
	{
		$name="maomao";
		@$count=file_get_contents('./num.txt');
		$count=$count?$count:0;
		
		$count++;
		if($count>=20)
			$count=1;
		
		$data=array('v_name'=>$name,'v_count'=>$count);
		
		$re=fopen('./num.txt','w');
		fwrite($re,$count);
		fclose($re);
		
		
		$this->load->view('test_view_head.php',$data);
		$this->load->view('test_view.php');
		$this->load->view('test_view_foot.php');
		}
	
}
