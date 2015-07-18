<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	function index()
	{
		$this->load->view('up.html');	
	}
	
	function up()
	{
		if(empty($_post['sub']))
		{
			if (isset($_FILES['upfile'])) 
			{
				$file=$_FILES['upfile'];
				if($file['size']<=20000)
				{
					echo 'size no';	
				}	
				else
				{
					switch($file['type'])
					{
						case 'image/jpeg':
							$hz='.jpg';
							break;
						default:
							$hz=false;
							break;	
					}
					if($hz)
					{
						$time=time();
						echo $time;
						move_uploaded_file($file['tmp_name'],"./upload/{$time}{$hz}");
					}
					else
					{
						echo 'type no';	
					}	
				}
			}
				
		}	
	}
	function upp()
	{
		$config['upload_path']='./upload';
		$config['allowed_types']='gif|jpg|png';
		$config['Max_size']='20000';
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('upfile');
		
		if($this->upload->do_upload('upfile'))
		{
			$data=array('upload_data'=>$this->upload->data());
			var_dump($data);	
		}
		else
		{
			$error=array('error'=>$this->upload->display_errors());	
		}	var_dump($error);
	}
}
