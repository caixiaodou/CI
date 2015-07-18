<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends MY_Controller
{
	private $uid;
	var $uname;
	var $upass;
	function addUser($Info)
	{
		$this->load->model('DB');
		
		$this->DB->user_insert('user',$Info);		
	}
	
	function update($Info)
	{
		$this->load->model('DB');
		$arr=array('uname'=>$Info->uname,'upass'=>$Info->upass);
		$this->DB->user_update('user',1,$arr);
	}
	
	function delete()
	{
		$this->load->model('DB');
		
		$this->DB->user_delete(1);
	}
	
	function searchUser($uname)
	{
		$this->load->model('DB');
		
		$user=$this->DB->user_select('user',$uname);
		
		return $user;
	}

}
