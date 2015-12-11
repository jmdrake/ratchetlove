<?php

/**
*  Class For the logout
*/
class Logout extends CI_Controller
{
	
	function index()
	{
        $this->load->model('site_common');
        $id=$this->session->userdata('userid');
		$time=date('h:i:s');
        $dt=array('status'=>0,'time'=>$time );
		
		
        $this->site_common->update('ratchet_register',$id,$dt);

		//$this->session->unset_userdata('aduserid');
		$this->session->unset_userdata('userid','username');

		redirect('login');
	}
}
?>